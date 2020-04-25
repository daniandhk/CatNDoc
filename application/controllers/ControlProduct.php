<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlProduct extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelAdmin');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['product'] = $this->ModelAdmin->get_products();
		$this->load->view('ViewProduct', $data);
	}

	public function addProduct() {
		$config['upload_path'] = './assets/img/Sale/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']  = '1024';
		$config['max_width']  = '1024';
		$config['max_height']  = '1024';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else {
			$file = $this->upload->data();
			$img_name = $this->upload->file_name;
			$data = array(
				'nama' => $this->input->post('nama'),
				'harga' => $this->input->post('harga'),
				'deskripsi' => $this->input->post('deskripsi'),
				'jenis' => $this->input->post('jenis'),
				'foto' => $img_name
			);
			$this->ModelAdmin->addProduct($data);

			echo 'Success';
			redirect('ControlProduct');
		}
	}

	public function editProduct() {
		$data = array(
			'nama' => $this->input->post('nama'),
			'harga' => $this->input->post('harga'),
			'deskripsi' => $this->input->post('deskripsi'),
			'jenis' => $this->input->post('jenis'),
			'foto' => $img_name
		);
		$id_product = $this->input->post('id_product');
		$this->ModelAdmin->editProduct($data, $id_product);

		echo 'Success';
		redirect('ControlProduct');
	}

	public function editProductFoto() {
		$config['upload_path'] = './assets/img/Sale/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']  = '1024';
		$config['max_width']  = '1024';
		$config['max_height']  = '1024';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
			echo $error['error'];
		}
		else {
			$file = $this->upload->data();
			$img_name = $this->upload->file_name;
			$data = array(
				'foto' => $img_name
			);
			$id_product = $this->input->post('id_product');
			$this->ModelAdmin->editProduct($data, $id_product);

			echo 'Success';
			redirect('ControlProduct');
		}
	}
}

/* End of file ControlProduct.php */
/* Location: ./application/controllers/ControlProduct.php */