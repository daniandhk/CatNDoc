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

	public function get_all($id_user){
		$this->db->select('id_keranjang, product.nama as nama_barang, quantity, harga, (quantity*harga) as total, bukti, status, resi');
		$this->db->join('product', 'product.id_product = keranjang.id_product');
		$this->db->where('status', 'belum');
		$this->db->where('id_user', $id_user);
		return $this->db->get('keranjang')->result_array();
	}

	public function get_all_sudah_dibayar($id_user) {
		$this->db->select('id_keranjang, product.nama as nama_barang, quantity, harga, (quantity*harga) as total, bukti, status, alamat, resi');
		$this->db->join('product', 'product.id_product = keranjang.id_product');
		$this->db->where('status !=', 'belum');
		$this->db->where('id_user', $id_user);
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

	public function upload_bukti($data,$id_user) {
		$this->db->where_in('id_keranjang',$data['id_keranjang']);
		$this->db->set('bukti', $data['bukti']);
		$this->db->set('status', $data['status']);
		$this->db->set('alamat', $data['alamat']);
		return $this->db->update('keranjang');
	}

	public function refundItem($id) {
		$this->db->where('id_keranjang',$id);
		$this->db->set('status','refund');
		$this->db->set('resi', '');
		return $this->db->update('keranjang');
	}

	public function deleteItem($id) {
		$this->db->where('id_keranjang', $id)->delete('keranjang');
	}

	public function updateItem($id,$alamat) {
		$this->db->where_in('id_keranjang',$id);
		$this->db->set('alamat',$alamat);
		return $this->db->update('keranjang');
	}

}
?>