<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlProduct extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelAdmin');
	}

	public function index()
	{
		$data['product'] = $this->ModelAdmin->get_products();
		$this->load->view('ViewProduct', $data);
	}

}

/* End of file ControlProduct.php */
/* Location: ./application/controllers/ControlProduct.php */