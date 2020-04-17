<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlCart extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelCart');
	}

	public function index()
	{
		$this->load->view('ViewCart');
	}
}