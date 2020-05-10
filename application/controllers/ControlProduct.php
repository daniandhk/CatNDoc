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
		if(isset($_SESSION['email']) && $_SESSION['email'] == 'admin@admin') {
			$data['product'] = $this->ModelAdmin->get_products();
			$this->load->view('ViewProduct', $data);
		} else {
			redirect('HomePage');
		}
	}

	public function addNewProduct() {
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
			$result = $this->ModelAdmin->addProduct($data);
			echo json_decode($result);
			return $result;
			redirect('ControlProduct');
		}
	}

	public function editProduct() {
		$data = array(
			'nama' => $this->input->post('nama'),
			'harga' => $this->input->post('harga'),
			'deskripsi' => $this->input->post('deskripsi'),
			'jenis' => $this->input->post('jenis'),
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

	public function show_product() {
		$data = $this->ModelAdmin->get_products();
		echo json_encode($data);
	}

	public function getNewestProduct() {
		$data = $this->ModelAdmin->getNewestProduct();
		echo json_encode($data);
	}

	public function deleteProduct() {
		$id_product = $this->uri->segment(3);
		$data = $this->ModelAdmin->deleteBarang($id_product);
		echo json_encode($data);
	}
}

/* End of file ControlProduct.php */
/* Location: ./application/controllers/ControlProduct.php */