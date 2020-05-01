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
		$data['penjualan'] = $this->ModelAdmin->get_all_penjualan();
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

	public function terimaPembayaran() {
		$id_keranjang = $this->uri->segment(3);
		$this->ModelAdmin->terimaPembayaran($id_keranjang);
		redirect('ControlAdmin');
	}

	public function kirimBarang() {
		$id_keranjang = $this->uri->segment(3);
		$this->ModelAdmin->kirimBarang($id_keranjang);
		redirect('ControlAdmin');
	}

	public function batalKirim() {
		$id_keranjang = $this->uri->segment(3);
		$this->ModelAdmin->batalKirim($id_keranjang);
		redirect('ControlAdmin');
	}

	public function batalPembayaran() {
		$id_keranjang = $this->uri->segment(3);
		$this->ModelAdmin->batalPembayaran($id_keranjang);
		redirect('ControlAdmin');
	}
}