<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blogs extends MY_Controller {
	public function __construct(){
		parent::__construct();

		$this->uploadPath = "assets/imgs/blogimages/";
	}
	public function adminBlogs()
	{
		$this->load->view('blogs/adminBlogs');
	}

	public function blogs(){
		$res = $this->_getRecordsData(
			$selectfields = array("*,DATE_FORMAT(dateCreated, '%W %M %e %Y') AS dateCreated,"), 
      $tables = array('blogs_tbl'),
      $fieldName = null, 
      $where = null, 
      $join = null,	 
      $joinType = null,
			$sortBy = array('id'), 
			$sortOrder = array('desc'), 
      $limit = null, 
      $fieldNameLike = null, 
      $like = null,
      $whereSpecial = null, 
      $groupBy = null 
		);
		$data = array(
			'res' => $res,
		);
		$this->load->view('blogs',$data);
	}
	
	
	public function countBlogs(){
		$res = $this->_getRecordsData(
			$selectfields = array("*,DATE_FORMAT(dateCreated, '%W %M %e %Y') AS dateCreated"), 
      $tables = array('blogs_tbl'),
      $fieldName = null, 
      $where = null, 
      $join = null,	 
      $joinType = null,
      $sortBy = null, 
      $sortOrder = null, 
      $limit = null, 
      $fieldNameLike = null, 
      $like = null,
      $whereSpecial = null, 
      $groupBy = null 
		);
		echo count($res);
	}
	public function blogLoad($slug){
			$res = $this->_getRecordsData(
				$selectfields = array(
					"
						blogs_tbl.*, 
						blog_content_tbl.content AS blog_content, 
						blog_content_tbl.blogImage AS blogImage, 
						DATE_FORMAT(blogs_tbl.dateCreated, '%W %M %e %Y') AS dateCreated,
					"), 
				$tables = array('blogs_tbl','blog_content_tbl'),
				$fieldName = array('blogs_tbl.routeLink'), 
				$where = array($slug), 
				$join = array("blogs_tbl.id = blog_content_tbl.blog_id"),	 
				$joinType = array('left'),
				$sortBy = null, 
				$sortOrder = null, 
				$limit = null, 
				$fieldNameLike = null, 
				$like = null,
				$whereSpecial = null, 
				$groupBy = null 
			);
			if(count($res)>=1){
				$seo = $this->_getRecordsData(
					$selectfields = array(
						"
							seo_tags_tbl.content AS seo_content, seo_tags_tbl.name AS seo_name
						"), 
					$tables = array('seo_tags_tbl','blogs_tbl'),
					$fieldName = array('blogs_tbl.routeLink'), 
					$where = array($slug),
					$join = array("seo_tags_tbl.blog_id = blogs_tbl.id "),	 
					$joinType = array('inner'),
					$sortBy = null, 
					$sortOrder = null, 
					$limit = null, 
					$fieldNameLike = null, 
					$like = null,
					$whereSpecial = null, 
					$groupBy = null 
				);

				$dataContainer = [];

				for ($i=0; $i < count($seo); $i++) {
					$dataContainer[$seo[$i]->seo_name] = $seo[$i]->seo_content;
				}
					
				$data = array(
					'blogDetails' => $res,
					'contents' => $res[0]->blog_content,
					'blogImage' => $res[0]->blogImage,
					'title' => $res[0]->title,
					'desc' => $res[0]->desc,
					'dateCreated' => $res[0]->dateCreated,
					'dataContainer' => $dataContainer,
				);
				
				$this->load->view('blogs/blog-posts/blogContainer', $data);
			// pretty print JSON
					// $jsonData = json_encode(array(
					// 		"test" => $dataContainer,
					// 	), JSON_PRETTY_PRINT
					// );
					// echo "<pre>" . $jsonData . "</pre>";
				// pretty print JSON	
				// echo json_encode($data);
			}else{
				echo "no blogs for such link, damn";
			}
			// echo json_encode(array($slug,$res));
    }
		public function addBlog(){
			$mainurl = 'safelypal.com/blogs/';

			$title = $_GET['title'];
			$sdesc = $_GET['sdesc'];
			$routeLink = $_GET['routeLink'];
			$author = $_GET['author'];

			$content = $_GET['content'];
			$blogImage = $_GET['blogImage'];

			// echo json_encode($blogImage);

			$desc = $_GET['desc'];
			$keywords = $_GET['keywords'];

			$blogs_tbl = 'blogs_tbl';
			$insert_blogs_tbl = array(
				'title'=>$title,
				'desc'=>$sdesc,
				'routeLink'=>$routeLink,
				'author'=>$author,
				'dateCreated' => $this->_getTimeStamp24Hours(),
			);

			$id_blogs_tbl = $this->_insertRecords($blogs_tbl, $insert_blogs_tbl);

			if($id_blogs_tbl!=0){

				$blog_content_tbl = 'blog_content_tbl';
				$insert_blog_content_tbl = array(
					'blog_id'=>$id_blogs_tbl,
					'content'=>$content,
					'blogImage'=>$blogImage,
				);
				$this->_insertRecords($blog_content_tbl, $insert_blog_content_tbl);

				$seo_tags_tbl = 'seo_tags_tbl';
				$insert_seo_tags_tbl_title = array(
					'blog_id' => $id_blogs_tbl,
					'name' => 'title',
					'content' => $title,
				);
				$insert_seo_tags_tbl_description = array(
					'blog_id' => $id_blogs_tbl,
					'name' => 'description',
					'content' => $desc,
				);
				$insert_seo_tags_tbl_keywords = array(
					'blog_id' => $id_blogs_tbl,
					'name' => 'keywords',
					'content' => $keywords,
				);
				$insert_seo_tags_tbl_url = array(
					'blog_id' => $id_blogs_tbl,
					'name' => 'url',
					'content' => $mainurl.$routeLink,
				);

				$this->_insertRecords($seo_tags_tbl, $insert_seo_tags_tbl_title);
				$this->_insertRecords($seo_tags_tbl, $insert_seo_tags_tbl_description);
				$this->_insertRecords($seo_tags_tbl, $insert_seo_tags_tbl_keywords);
				$this->_insertRecords($seo_tags_tbl, $insert_seo_tags_tbl_url);

				echo json_encode('blog added');
			}else {
				echo json_encode('blog not added');
			}
			
		}
		public function updateBlog(){
			$id = $_GET['id'];
			$mainurl = 'safelypal.com/blogs/';

			$title = $_GET['title'];
			$sdesc = $_GET['sdesc'];
			$routeLink = $_GET['routeLink'];
			$author = $_GET['author'];

			$blogImage = $_GET['blogImage'];

			$content = $_GET['content'];

			$desc = $_GET['desc'];
			$keywords = $_GET['keywords'];

			$blogs_tbl = 'blogs_tbl';
			$update_blogs_tbl = array(
				'title'=>$title,
				'desc'=>$sdesc,
				'routeLink'=>$routeLink,
				'author'=>$author,
				'dateCreated' => $this->_getTimeStamp24Hours(),
			);

			$updateblogs_tbl = $this->_updateRecords($blogs_tbl,array('id'), array($id), $update_blogs_tbl);

			if($updateblogs_tbl!=0){
				$blog_content_tbl = 'blog_content_tbl';
				
				$update_blog_content_tbl = array(
					'content'=>$content,
					'blogImage'=>$blogImage,
				);

				$this->_updateRecords($blog_content_tbl,array('blog_id'), array($id), $update_blog_content_tbl);

				$updateTitle = array(
					'content' => $title,
				);
				$updateDesc = array(
					'content' => $desc,
				);
				$updateKeywords = array(
					'content' => $keywords,
				);
				$updateUrl = array(
					'content' => $mainurl.$routeLink,
				);

				$seo_tags_tbl = 'seo_tags_tbl';
				$nameContents = ['title','description','keywords','url'];
				$contentContents = [
					$updateTitle,
					$updateDesc,
					$updateKeywords,
					$updateUrl
				];
				
				for ($i=0; $i < 4; $i++) {
					$this->_updateRecords($seo_tags_tbl,array('blog_id','name'), array($id,$nameContents[$i]), $contentContents[$i]);
				}

				echo json_encode('blog updated');
			}else {
				echo json_encode('blog not updated');
			}

			// echo json_encode($updateblogs_tbl);
		}
		public function deleteBlog(){
			$id = $_GET['id'];
			$ImagePath = $_GET['ImagePath'];

			unlink($ImagePath);

			$this->_deleteRecords($tableName = 'blogs_tbl',$fieldName = array('id'),$where = array($id));
			$this->_deleteRecords($tableName = 'blog_content_tbl',$fieldName = array('blog_id'),$where = array($id));
			$this->_deleteRecords($tableName = 'seo_tags_tbl',$fieldName = array('blog_id'),$where = array($id));

		}

		public function deleteBlogImageBeforeUpdatingBlogDetails(){
			$ImagePath = $_GET['ImagePath'];
			$deleteImage = unlink($ImagePath);

			echo json_encode($ImagePath);
		}

		public function checkIfBlogExist(){
			$id = $_GET['id'];

				$res = $this->_getRecordsData(
					$selectfields = array("*"), 
					$tables = array('blogs_tbl'),
					$fieldName = array('id'), 
					$where = array($id), 
					$join = null,	 
					$joinType = null,
					$sortBy = null, 
					$sortOrder = null, 
					$limit = null, 
					$fieldNameLike = null, 
					$like = null,
					$whereSpecial = null, 
					$groupBy = null 
				);
				if(count($res)){
					echo json_encode(true);
				}else{
					echo json_encode(false);
				}
		}

		public function getUrls(){
			$routeLinks = $this->_getRecordsData(
				$selectfields = array("routeLink","title","DATE_FORMAT(dateCreated, '%W %M %e %Y') AS dateCreated","id"), 
				$tables = array('blogs_tbl'),
				$fieldName = null, 
				$where = null,
				$join = null,	 
				$joinType = null,
				$sortBy = array('id'), 
				$sortOrder = array('desc'), 
				$limit = null, 
				$fieldNameLike = null, 
				$like = null,
				$whereSpecial = null, 
				$groupBy = null 
			);

			echo json_encode($routeLinks);
		}

		public function getBlog(){

			$id = $_GET['id'];

				$res = $this->_getRecordsData(
					$selectfields = array(
						"
							blogs_tbl.*, 
							blog_content_tbl.content AS blog_content, 
							blog_content_tbl.blogImage AS blogImage, 
							DATE_FORMAT(blogs_tbl.dateCreated, '%W %M %e %Y') AS dateCreated,
						"), 
					$tables = array('blogs_tbl','blog_content_tbl'),
					$fieldName = array('blogs_tbl.id'), 
					$where = array($id), 
					$join = array("blogs_tbl.id = blog_content_tbl.blog_id"),	 
					$joinType = array('left'),
					$sortBy = null, 
					$sortOrder = null,
					$limit = null, 
					$fieldNameLike = null, 
					$like = null,
					$whereSpecial = null, 
					$groupBy = null 
				);

				if(count($res)>=1){
					$seo = $this->_getRecordsData(
						$selectfields = array("*"), 
						$tables = array('seo_tags_tbl'),
						$fieldName = array('blog_id'), 
						$where = array($id),
						$join = null,	 
						$joinType = null,
						$sortBy = null, 
						$sortOrder = null, 
						$limit = null, 
						$fieldNameLike = null, 
						$like = null,
						$whereSpecial = null, 
						$groupBy = null 
					);
						
					$data = array(
						'blogDetails' => $res,
						'contents' => $res[0]->blog_content,
						'blogImage' => $res[0]->blogImage,
						'title' => $res[0]->title,
						'desc' => $res[0]->desc,
						'dateCreated' => $res[0]->dateCreated,
						'seo' => $seo,
					);

					echo json_encode($data);

				}else{
					echo json_encode('blog not found');
				}
	}

}