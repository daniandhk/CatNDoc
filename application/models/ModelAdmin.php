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
		$insert_id = $this->db->insert_id();

		return $insert_id;
	}

	public function editProduct($data,$id_product) {
		$this->db->where('id_product', $id_product)->update('product', $data);
	}

	public function editProductFoto($data,$id_product) {
		$this->db->where('id_product', $id_product)->update('product', $data);
	}

	public function get_all_penjualan() {
		$this->db->select('id_keranjang, user.nama as pembeli, product.nama as barang, quantity, bukti, status, tanggal, alamat, resi')
						->from('keranjang')
						->join('user', 'user.id_user = keranjang.id_user')
						->join('product', 'product.id_product = keranjang.id_product')
						->order_by("status", "desc");
		return $this->db->get()->result_array();
	}

	public function terimaPembayaran($id_keranjang) {
		$this->db->where('id_keranjang', $id_keranjang)->set('status','packing')->update('keranjang');
	}

	public function kirimBarang($id_keranjang, $data) {
		$this->db->where('id_keranjang', $id_keranjang)->set('status','delivery')->set('resi', $data['resi'])->update('keranjang');
	}

	public function batalKirim($id_keranjang) {
		$this->db->where('id_keranjang', $id_keranjang)->set('status','packing')->update('keranjang');
	}

	public function batalPembayaran($id_keranjang) {
		$this->db->where('id_keranjang', $id_keranjang)->set('status','proses')->update('keranjang');
	}

	public function ubahNomorResi($id_keranjang, $data) {
		$this->db->where('id_keranjang', $id_keranjang)->set('resi', $data['resi'])->update('keranjang');
	}

	public function getNewestProduct() {
		return $this->db->select('*')->from('product')->limit(1)->order_by('id_product', 'desc')->get()->row_array();
	}

	public function deleteBarang($id_product) {
		return $this->db->where('id_product', $id_product)->delete('product');
	}

	public function refund($id) {
		$this->db->where('id_keranjang', $id)->delete('keranjang');
	}
}