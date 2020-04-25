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
		$data['appointment'] = $this->ModelProfile->get_all();
		if(isset($_SESSION['logged_in'])){
			$data['email'] = $this->session->userdata('email');
			$email = $this->session->userdata('email');
			$user = $this->ModelProfile->get_profile($email);
			$data['nama'] = $user->nama;
		}
		$this->load->view('ViewProfile', $data);
	}

	public function logout(){
		if(isset($_SESSION['email'])){
			unset($_SESSION['email']);
		}
		if(isset($_SESSION['logged_in'])){
			unset($_SESSION['logged_in']);
		}
        redirect('ControlShop');
	}

	public function updateAppointment() {
		$id_ap = $this->input->post('id_ap');
		$notelp = $this->input->post('notelp');
		$keluhan = $this->input->post('keluhan');
		$this->ModelProfile->updateAppointment($id_ap,$notelp,$keluhan);
		redirect('ControlProfile');
	}

	public function appointment()
	{   
        $email = $this->input->post('email');
        $notelp = $this->input->post('notelp');
        $date = $this->input->post('date');
        $nama_pet = $this->input->post('nama_pet');
        $jenis = $this->input->post('jenis');
        $keluhan = $this->input->post('keluhan');
        $check = $this->ModelProfile->cek_email($email);
        if($check == true){
          $this->ModelProfile->add_appointment($email,$notelp,$date,$nama_pet,$jenis,$keluhan);
        }
        redirect('ControlProfile');
    }
}