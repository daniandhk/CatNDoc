<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('ModelRegistrasi');
  }

  public function registrasi()
	{   
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $check = $this->ModelRegistrasi->cek_email($email);
        if($check == false){
            $this->ModelRegistrasi->add_akun($nama,$email,$password);
        }
        redirect('HomePage');
    }
}
?>

