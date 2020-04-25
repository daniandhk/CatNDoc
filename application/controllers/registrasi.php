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
          
        redirect("HomePage");
    }
    
}


?>

