<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class custom extends MY_Controller {

	public function __construct(){
		parent::__construct();
	    // session_start();
	}
	public function index(){
		$this->load->view('index');
	}
	
}

