<?php 

class Ecommerce extends CI_Controller {
	
	public function index() {
		$data['products'] = $this->Products_model->getAllProducts();
		$this->load->view('ecommerce/templates/header');
		$this->load->view('ecommerce/index', $data);
		$this->load->view('ecommerce/templates/footer');
	}

	public function detail($id) {
		$data['products'] = $this->Products_model->detailProduct($id);
		$this->load->view('ecommerce/templates/header');
		$this->load->view('ecommerce/detail', $data);
		$this->load->view('ecommerce/templates/footer');
	}

}