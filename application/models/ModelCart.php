<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class ModelCart extends CI_Model{
    function __construct (){
        parent::__construct();
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

	public function get_all(){
		return $this->db->get('keranjang')->result_array();
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

	public function get_products(){
		return $this->db->get('product')->result_array();
	}

}
?>