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
		unset(
        $_SESSION['email'],
        $_SESSION['logged_in']
        );
        redirect('HomePage');
	}
}