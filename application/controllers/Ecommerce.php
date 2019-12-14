<?php 

class Ecommerce extends CI_Controller {
	
	public function index() {
		$data['products'] = $this->Products_model->getAllProducts();
		$this->load->view('ecommerce/templates/header');
		$this->load->view('ecommerce/index', $data);
		$this->load->view('ecommerce/templates/footer');
	}
}