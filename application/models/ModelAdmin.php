<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class ModelAdmin extends CI_Model{
    function __construct (){
        parent::__construct();
    }

    public function get_products(){
		return $this->db->get('product')->result_array();
	}

	public function get_all_users() {
		return $this->db->get('user')->result_array();
	}

	public function get_all_apointments() {
		return $this->db->get('appointment')->result_array();
	}

	public function get_all_hewan() {
		$this->db->select('nama, nama_pet, jenis, berat, tinggi, warna')
						->from('hewan')
						->join('user', 'user.email = hewan.email');
		return $this->db->get()->result_array();
	}

	public function deleteUser($id) {
		$this->db->where('id_user', $id)->delete('user');
	}

	public function acceptAppointment($id_ap) {
		$data = array('status' => "Sudah");
		$this->db->set($data)->where('id_ap', $id_ap)->update('appointment');
	}

	public function cancelAppointment($id_ap) {
		$data = array('status' => "Belum");
		$this->db->set($data)->where('id_ap', $id_ap)->update('appointment');
	}

	public function addProduct($data) {
		$this->db->insert('product', $data);
	}

	public function editProduct($data,$id_product) {
		$this->db->where('id_product', $id_product)->update('product', $data);
	}

	public function editProductFoto($data,$id_product) {
		$this->db->where('id_product', $id_product)->update('product', $data);
	}
}