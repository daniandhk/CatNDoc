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
			$data['password'] = $user->password;
			$data['foto'] = $user->foto;
			$data['id'] = $user->id_user;
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

    public function editprofile()
	{   
		$config['upload_path'] = './assets/img/Profile/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']  = '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';
		$this->load->library('upload', $config);
		$myemail = $this->input->post('Myemail');
		$mynama = $this->input->post('Mynama');
		$mypassword = $this->input->post('Mypassword');
		$email = $this->input->post('email');
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');
		if($email == ""){
			$email = $myemail;
		}
		if($password == ""){
			$password = $mypassword;
		}
		if($nama == ""){
			$nama = $mynama;
		}
		$check = $this->ModelProfile->cek_email($email);
		$id = $this->input->post('id');
		if ( $check != true or $myemail == $email){
			$this->ModelProfile->edit_pro($id,$nama,$email,$password);
			//klo berhasil $this->session->set_userdata('email', $email);
			if ($this->upload->do_upload('foto')){
					$file = $this->upload->data();
					$img_name = $this->upload->file_name;
					$data = array(
						'foto' => $img_name
					);
					$this->ModelProfile->editFoto($data,$id);
			}
			echo 'Success';
			redirect("ControlProfile");
		} else{
			echo 'email sudah ada!';
		}
    }

    public function deleteAppointment() {
		$id_user = $this->uri->segment(3);
		$this->ModelProfile->deleteAppointment($id_user);
		redirect('ControlProfile');
	}
}