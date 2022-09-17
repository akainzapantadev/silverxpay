<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('upload');
	    // session_start();
	}
	public function index(){
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
		$this->load->view('index',$data);
	}
	public function privacyPolicy(){
		$this->load->view('privacypolicy');
	}
	public function termsAndConditions(){
		$this->load->view('termsandconditions');
	}
	public function error(){
		$this->load->view('error');
	}
	// -----------------------------------------------------------------
	// ------------------------- GET DATA ------------------------------
	// -----------------------------------------------------------------
	public function getAll(){
		$t = $_GET['table'];
		$sb = $_GET['sortBy'];
		$so = $_GET['sortOrder'];
		$result = $this->_getRecordsData(
			$selectfields = array("*"),$tables=array($t),$fieldName=null,$where = null,
			$join=null,$joinType=null,$sortBy=array($sb),$sortOrder=array($so),$limit=null,  
			$fieldNameLike= null,$like=null,$whereSpecial=null,$groupBy=null);
		echo json_encode($result);
	}
		// ------------------------- GET ID ------------------------------
	public function getByID(){
		$id = $_GET['id'];
		$t = $_GET['table'];
		$sb = $_GET['sortBy'];
		$so = $_GET['sortOrder'];
		$result = $this->_getRecordsData(
		$selectfields=array("*"),$tables=array($t),$fieldName=array("id"),$where=array($id), 
		$join=null,$joinType=null,$sortBy=array($sb),$sortOrder=array($so),$limit=null, 
		$fieldNameLike=null,$like=null,$whereSpecial=null,$groupBy=null 
		);
		echo json_encode($result);
	}
		// ------------------------- GET CUSTOM ------------------------------
	public function getCustom(){
		$x = $_GET['fieldName'];
		$y = $_GET['where'];
		$t = $_GET['table'];
		$sb = $_GET['sortBy'];
		$so = $_GET['sortOrder'];
		$result = $this->_getRecordsData($selectfields=array("*"),$tables=array($t),$fieldName=array($x),$where=array($y),
		$join=null,$joinType=null,$sortBy=array($sb),$sortOrder=array($so),$limit=null,
		$fieldNameLike=null,$like=null,$whereSpecial=null,$groupBy=null
		);
		echo json_encode($result);
	}
	// -----------------------------------------------------------------
	// -------------------- INSERT UPDATE DELETE DATA ------------------
	// -----------------------------------------------------------------
	public function insert(){
		$table = $_GET['table'];
		$record = $_GET['record'];
		$result = $this->_insertRecords($table, $this->security->xss_clean($record));
		echo $result;
	}

	public function updateID(){
		$id = $_GET['id'];
		$table = $_GET['table'];
		$record = $_GET['record'];
		$result = $this->_updateRecords($table,array('id'),array($id), $this->security->xss_clean($record));
		echo $result;
		// echo json_encode($record);
	}

	public function updateCustom(){
		$x = $_GET['fieldName'];
		$y = $_GET['where'];
		$table = $_GET['table'];
		$record = $_GET['record'];
		$result = $this->_updateRecords($table,array($x),array($y), $this->security->xss_clean($record));
		echo $result;
		// echo json_encode($record);
	}

	public function deleteID(){
		$id = $_GET['id'];
		$table = $_GET['table'];

		$result = $this->_deleteRecords($tableName=$table,$fieldName=array('id'),$where=array($id));
		echo $result;
		// echo json_encode($record);
	}
		// -----------------------------------------------------------------
	// -------------------- API -------------------------------------
	// -----------------------------------------------------------------
	

	// -----------------------------------------------------------------
	// -------------------- CUSTOM -------------------------------------
	// -----------------------------------------------------------------
	public function quickLoadPage(){
		if (is_file(APPPATH.'views/' . $_GET['pagename'] . EXT)){
			$this->load->view($_GET['pagename']);
		} else {
			$this->load->view('404Error');
		}	
	}
	public function getPin(){
		$res = $this->_getRecordsData(
			$selectfields = array("pin"), 
			$tables = array('pin_tbl'),
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
		echo json_encode($res);
	}
	public function insertContactUs(){
		$name = $_GET['name'];
		$emailaddress = $_GET['emailaddress'];
		$message = $_GET['message'];

		$insert_contactus = array(
			'name'=>$name,
			'emailaddress'=>$emailaddress,
			'message'=>$message,
			'dateCreated' => $this->_getTimeStamp24Hours(),
		);

		$insertcontactus = $this->_insertRecords('contactus_tbl', $insert_contactus);

		if ($insertcontactus) {
			echo true;
		}else{
			echo false;
		}
	}

	public function robots(){
		echo(file_get_contents("application/views/others/robots.txt"));
	}
	public function sitemap(){

		$res = $this->_getRecordsData(
			$selectfields = array('*'), 
			$tables = array('blogs_tbl'),$fieldName = null, $where = null,$join = null,$joinType = null,$sortBy = null, 
			$sortOrder = null, $limit = null, $fieldNameLike = null, $like = null,$whereSpecial = null, $groupBy = null );

			$data = array(
				'res' => $res,
			);

			header("Content-type: text/xml");
			$this->load->view('others/sitemap.php',$data);
	}
	public function subscribe(){
		$this->db->where('ip',$_GET["ip"]);
		$q = $this->db->get('subscribers_tbl');
		$check = $q->result_array();

		$timeStamp = date('Y-m-d H:i:s');
		$insertRecord = array(
			'email' => $_GET["email"],
			'ip' => $_GET["ip"],
			'timestamp' => $timeStamp,
		);
		$saveQueryNotif = $this->db->escape("subscribers_tbl",$insertRecord);
		if ($saveQueryNotif) {
			echo true;
		}else{
			echo false;
		}
	}
	
}

