<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlAdmin extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelAdmin');
	}

	public function index()
	{
		$this->load->view('ViewAdmin');
	}
}