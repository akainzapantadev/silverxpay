<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class upload extends CI_Controller {

	public function index(){
		$this->load->view('library/upload_view');
	}

  function do_upload(){
    // print_r($_FILES);
    $config['upload_path']          = './assets/imgs/blogimages/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    // $config['max_size']             = 100;
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;
    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('blogImage')){
      $error = array('error' => $this->upload->display_errors());
      echo json_encode($error);
      // $this->load->view('upload_form', $error);
    }
    else{
      $data = array('upload_data' => $this->upload->data());
      echo json_encode('upload success');
      // $this->load->view('upload_success', $data);
    }
  }
}
