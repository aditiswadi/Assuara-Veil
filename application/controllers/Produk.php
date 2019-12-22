<?php 

class Produk extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index() {
		$data['products'] = $this->Products_model->getAllProducts();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('produk/index', $data);
		$this->load->view('admin/templates/footer');
	}

	public function tambah() {
		$nama = $this->input->post('nama');
		$kategori = $this->input->post('kategori');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		
		$gambar = $_FILES['gambar']['name'];

		if ($gambar = '') {

		} else {
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';
		
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')) {
				echo "Gambar Gagal Diupload";
			} else {
				$gambar = $this->upload->data('file_name');
			}
		}

		$data = array (
			'nama' => $nama,
			'kategori' => $kategori,
			'deskripsi' => $deskripsi,
			'harga' => $harga,
			'stok' => $stok,
			'gambar' => $gambar
		);

		$this->Products_model->tambahProduk($data, 'products');
		redirect('produk/index');
	}

	public function ubah($id) {
        $data['products'] = $this->Products_model->getProductById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header');
			$this->load->view('admin/templates/sidebar');
			$this->load->view('produk/edit', $data);
			$this->load->view('admin/templates/footer');    
        } else {
            $this->Products_model->ubahDataProduk();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('produk/index');
        }
    }

	public function hapus($id) {
        $this->Products_model->hapusDataProduk($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('produk/index');
    }

}