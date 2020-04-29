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
			$data['id_user'] = $user->id_user;
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
			$this->session->set_flashdata('gagalshop','
          
			<div class="alert alert-danger" role="alert">
			  <h4 class="alert-heading" style="text-align:center;margin-top:1%;">Login Failed</h4>
			</div>');
			redirect('ControlShop');
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

	public function beli(){
		$id_product = $this->input->post('id_product');
		$id_user = $this->input->post('id_user');
		$quantity = $this->input->post('quantity');
		$this->ModelShop->tambah($id_product,$id_user, $quantity);
		$this->session->set_flashdata('berhasilbeli','
          
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading" style="text-align:center;margin-top:1%;">Pembelian Berhasil</h4>
          </div>');
		redirect('ControlShop');
	}

	public function registrasi()
	{   
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $check = $this->ModelShop->cek_email($email);
        if($check == false){
          $this->ModelShop->add_akun($nama,$email,$password);
          $this->session->set_flashdata('berhasil','
          
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading" style="text-align:center;margin-top:1%;">Register Success</h4>
          </div>');
        }else{
          $this->session->set_flashdata('gagal','
          
          <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading" style="text-align:center;margin-top:1%;">Register Failed</h4>
          </div>');
        }
          
        redirect("ControlShop");
    }
}
