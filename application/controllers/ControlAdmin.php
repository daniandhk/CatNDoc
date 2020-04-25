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
		$data['product'] = $this->ModelAdmin->get_products();
		$data['users'] = $this->ModelAdmin->get_all_users();
		$data['ap'] = $this->ModelAdmin->get_all_apointments();
		$data['hewan'] = $this->ModelAdmin->get_all_hewan();
		$this->load->view('ViewAdmin', $data);
	}

	public function deleteUser() {
		$id_user = $this->uri->segment(3);
		$this->ModelAdmin->deleteUser($id_user);
		redirect('ControlAdmin');
	}

	public function acceptAppointment() {
		$id_ap = $this->uri->segment(3);
		$this->ModelAdmin->acceptAppointment($id_ap);
		redirect('ControlAdmin');
	}

	public function cancelAppointment() {
		$id_ap = $this->uri->segment(3);
		$this->ModelAdmin->cancelAppointment($id_ap);
		redirect('ControlAdmin');
	}

}