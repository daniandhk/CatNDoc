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
		if(isset($_SESSION['logged_in'])){
			$data['email'] = $this->session->userdata('email');
			$email = $this->session->userdata('email');
			$user = $this->ModelShop->get_profile($email);
			$data['nama'] = $user->nama;
		}
		$this->load->view('ViewShop', $data);
	}

	public function login(){
	    $data = array(
	      'email' => $this->input->post('email'),
	      'password' => $this->input->post('password')
	    );
	    $login = $this->ModelShop->login($data);
	    if($login == TRUE) {
	      $this->session->set_userdata('email', $data['email']);
	      $this->session->set_userdata('logged_in', TRUE);
	      redirect('/ControlShop');
	    }else{
	      $this->session->set_flashdata('error_message', 'email atau password salah');
	      redirect('/ControlShop');
	    }
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
}
