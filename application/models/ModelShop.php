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
}