<?php 
class loginModel extends CI_Model{
 
  public function check_email($email){
    $this->db->where('email', $email);
    $query = $this->db->get('user');
    if($query->num_rows() > 0) {
      return true;
    }else{
      return false;
    }
  }
   
  public function login($data) {
    $this->db->where('email', $data['email']);
    $this->db->where('password', $data['password']);
    $query = $this->db->get('user');
    if($query->num_rows() > 0) {
      return true;
    }else{
      return false;
    }
  }

  public function get_profile($email){
    $this->db->where('email', $email);
    $query = $this->db->get('user');
    if($query->num_rows() > 0) {
      return $query->row();
    }else{
      return false;
    }
  }
}
?>