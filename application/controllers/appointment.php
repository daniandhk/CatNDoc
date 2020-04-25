<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class appointment extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('ModelAppointment');
  }

  public function appointment()
	{   
        $email = $this->input->post('email');
        $notelp = $this->input->post('notelp');
        $date = $this->input->post('date');
        $nama_pet = $this->input->post('nama_pet');
        $jenis = $this->input->post('jenis');
        $keluhan = $this->input->post('keluhan');
        $check = $this->ModelAppointment->cek_email($email);
        if($check == true){
          $this->ModelAppointment->add_appointment($email,$notelp,$date,$nama_pet,$jenis,$keluhan);
        }
        redirect('HomePage');
    }
}
?>

