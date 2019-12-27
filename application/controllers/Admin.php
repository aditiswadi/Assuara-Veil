<?php 

class Admin extends CI_Controller {
	public function index() {
		$data['products'] = $this->Products_model->getAllProducts();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('produk/index', $data);
		$this->load->view('admin/templates/footer');
	}
}