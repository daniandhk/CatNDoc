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
		$data['keranjang'] = $this->ModelCart->get_all();
		$data['product'] = $this->ModelCart->get_products();
		if(isset($_SESSION['logged_in'])){
			$data['email'] = $this->session->userdata('email');
			$email = $this->session->userdata('email');
			$user = $this->ModelCart->get_profile($email);
			$data['nama'] = $user->nama;
			$data['id_user'] = $user->id_user; 
		}
		$this->load->view('ViewCart', $data);
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

	public function login(){
	    $data = array(
	      'email' => $this->input->post('email'),
	      'password' => $this->input->post('password')
	    );
	    $login = $this->ModelCart->login($data);
	    if($login == TRUE) {
	      $this->session->set_userdata('email', $data['email']);
	      $this->session->set_userdata('logged_in', TRUE);
	      redirect('/ControlCart');
	    }else{
	      $this->session->set_flashdata('error_message', 'email atau password salah');
	      redirect('/ControlCart');
	    }
	}
}