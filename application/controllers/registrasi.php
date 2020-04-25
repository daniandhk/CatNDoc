<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('ModelRegistrasi');
  }

  public function registrasi()
	{   
        $data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
        );

        $email = $this->input->post("email");
        $tersedia = $this->ModelRegistrasi->cek_email($email);
        if($tersedia){
            $this->ModelRegistrasi->add_akun($data);
            redirect('ViewHome');
        }else{
            echo "Data sudah tersedia";
        }
		
    }
?>