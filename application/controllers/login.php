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
        redirect('/ControlAdmin');
      }else{
        $this->load->view('ViewHome',$data);
      }
    }
    else {
      $this->load->view('ViewHome');
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
      $this->session->set_userdata('logged_in', TRUE);
      redirect('/login');
    }else{
      $this->session->set_flashdata('gagallogin','
          
          <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading" style="text-align:center;margin-top:1%;">Login Failed</h4>
          </div>');
          redirect('HomePage');
    }
  }
}
?>