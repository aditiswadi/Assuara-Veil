<?php 

class User extends CI_Controller {
	public function index() {
		$data['title'] = 'My Profile';
 		$data['user'] = $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
		$data['products'] = $this->Products_model->getAllProducts();
		$this->load->view('user/templates/headerUser');
		$this->load->view('user/indexUser', $data);
		$this->load->view('user/templates/footerUser');
	}
}