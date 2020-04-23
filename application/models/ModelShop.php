<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class ModelShop extends CI_Model{
    function __construct (){
        parent::__construct();
    }
    
    public function get_all(){
		return $this->db->get('produk')->result_array();
	}

	
	public function get_produk($id_produk){
		$this->db->where('id_produk', $id_produk);
		return $this->db->get('produk')->row_array();
	}
	

	public function insert_produk($data){
		return $this->db->insert('produk',$data);
	}
	

	
	public function update_produk($id_produk, $data){
		$this->db->where('id_produk', $id_produk);
		return $this->db->update('produk',$data);
	}
	
	
	public function delete_produk($id_produk){
		$this->db->where('id_produk', $id_produk);
		return $this->db->delete('produk');
	}
}