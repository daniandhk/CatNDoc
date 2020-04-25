<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePage extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('HomeModel');
	}

	public function index()
	{
		$this->load->view('ViewHome');
	}

	public function logout(){
		if(isset($_SESSION['email'])){
			unset($_SESSION['email']);
		}
		if(isset($_SESSION['logged_in'])){
			unset($_SESSION['logged_in']);
		}
        redirect('HomePage');
	}
}