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
		$data['product'] = $this->ModelCart->get_products();
		if(isset($_SESSION['logged_in'])){
			$data['email'] = $this->session->userdata('email');
			$email = $this->session->userdata('email');
			$user = $this->ModelCart->get_profile($email);
			$data['nama'] = $user->nama;
			$data['id_user'] = $user->id_user; 
			$data['keranjang'] = $this->ModelCart->get_all($data['id_user']);
			$data['keranjang_sudah_dibayar'] = $this->ModelCart->get_all_sudah_dibayar($data['id_user']);
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

	public function upload_bukti() {
		$config['upload_path'] = './assets/img/Bukti Transfer/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']  = '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('bukti')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else {
			if(!empty($this->input->post('checkboxBayar'))) {
				foreach ($this->input->post('checkboxBayar') as $obj) {
					$checkboxBayar[] = $obj;
				}

				$file = $this->upload->data();
				$img_name = $this->upload->file_name;
				$data = array(
					'id_keranjang' => $checkboxBayar,
					'bukti' => $img_name,
					'status' => 'proses',
					'alamat' => $this->input->post('alamat')
				);
				echo "<script>console.log(".$data['id_keranjang'].")</script>";
				$id_user = $this->input->post('id_user');
				$this->ModelCart->upload_bukti($data, $id_user);
			}
			echo 'Success';
			redirect('ControlCart');
		}
	}

	public function deleteItem() {
		$id = $this->uri->segment(3);
		$this->ModelCart->deleteItem($id);
		redirect('ControlCart');
	}
	
	public function refundItem() {
		$id = $this->uri->segment(3);
		$this->ModelCart->refundItem($id);
		redirect('ControlCart');
	}

	public function updateItem(){
		$id = $this->input->post('Myid');
		$myalamat = $this->input->post('Myalamat');
		$alamat = $this->input->post('alamat');
		if($alamat == ""){
			$alamat = $myalamat;
		}
		$this->ModelCart->updateItem($id,$alamat);
		redirect('ControlCart');
	}
}