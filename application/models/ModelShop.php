<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class ModelShop extends CI_Model{
    function __construct (){
        parent::__construct();
    }
    
    public function get_all(){
		return $this->db->get('product')->result_array();
	}
	
	public function get_product($id_product){
		$this->db->where('id_product', $id_product);
		return $this->db->get('product')->row_array();
	}
	

	public function insert_product($data){
		return $this->db->insert('product',$data);
	}
	
	public function update_product($id_product, $data){
		$this->db->where('id_product', $id_product);
		return $this->db->update('product',$data);
	}
	
	public function delete_product($id_produk){
		$this->db->where('id_product', $id_product);
		return $this->db->delete('product');
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

  public function tambah($id_product,$id_user,$quantity){
    $this->db->where('id_product', $id_product);
    $this->db->where('id_user', $id_user);
    $this->db->where('status', 'belum');
    $query = $this->db->get('keranjang');
    $date = date("Y-m-d");
    if($query->num_rows() > 0) {
      $found = $query->row();
      $quantity_awal = $found->quantity;
      $quantity += $quantity_awal;
      $data = $this->db->query("UPDATE keranjang SET quantity = '$quantity', tanggal = '$date' WHERE id_product = '$id_product' AND id_user = '$id_user'AND status = 'belum'");
    }else{
      $data = $this->db->query("INSERT INTO keranjang(id_product, id_user, quantity, status, tanggal) VALUES ('$id_product', '$id_user', '$quantity', 'belum', '$date')");
    }
  	return $data;
  }

  public function add_akun($nama,$email,$password)
  {
      $data = $this->db->query("INSERT INTO user(nama, email, password) VALUES ('$nama','$email','$password')");
      return $data;
  }
    
  public function cek_email($email)
  {
      $this->db->where('email',$email);
      $query = $this->db->get('user');
      if($query->num_rows() > 0){
          return true;
      }else{
          return false;
      }
  }
}
?>