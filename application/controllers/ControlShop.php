<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlShop extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelShop');
	}
	public function index()
	{
		$data['product'] = $this->ModelShop->get_all();
		$this->load->view('ViewShop');
	}
}
