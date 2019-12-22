<?php 

class Kategori extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Kategori_model');
        $this->load->library('form_validation');
    }

	public function index() {
		$data['kategori'] = $this->Kategori_model->getAllKategori();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('admin/templates/footer'); 
	}

    public function tambah() {

        $this->form_validation->set_rules('kategori', 'KATEGORI', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('kategori/tambah');
            $this->load->view('admin/templates/footer'); 
        } else {
            $this->Kategori_model->tambahDataKategori();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kategori');
        }
    }

     public function hapus($id) {
        $this->Kategori_model->hapusDataKategori($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kategori');
    }

     public function ubah($id) {
        
        $data['kategori'] = $this->Kategori_model->getKategoriById($id);

        $this->form_validation->set_rules('kategori', 'KATEGORI', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('kategori/ubah', $data);
            $this->load->view('admin/templates/footer');    
        } else {
            $this->Kategori_model->ubahDataKategori();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kategori');
        }
    }

}