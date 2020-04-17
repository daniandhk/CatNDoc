<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlProfile extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelProfile');
	}

	public function index()
	{
		$this->load->view('ViewProfile');
	}
}