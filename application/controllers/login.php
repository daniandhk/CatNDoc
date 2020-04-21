<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('loginModel');
  }
 
  public function index(){
    if (isset($_SESSION['email'])) {
      $data = $this->loginModel->get_profile($_SESSION['email']);
      $check = $data->email;
      if($check === "admin@admin"){
        $this->load->view('ViewAdmin');
      }else{
        $this->load->view('ViewProfile',$data);
      }
    }
    else {
      $this->load->view('HomePage');
    }
  }
   
  public function login(){
    $data = array(
      'email' => $this->input->post('email'),
      'password' => $this->input->post('password')
    );
    $login = $this->loginModel->login($data);
    if($login == TRUE) {
      $this->session->set_userdata('email', $data['email']);
      redirect('/login');
    }else{
      $this->session->set_flashdata('error_message', 'email atau password salah');
      redirect('/HomePage');
    }
  }
}
?>