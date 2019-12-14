<?php 

class Produk extends CI_Controller {
	public function index() {
		$data['products'] = $this->Products_model->getAllProducts();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('produk/index', $data);
		$this->load->view('admin/templates/footer');
	}

	public function create() {
		$nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
		$kategori = $this->input->post('kategori');
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
			'deskripsi' => $deskripsi,
			'kategori' => $kategori,
			'harga' => $harga,
			'stok' => $stok,
			'gambar' => $gambar
		);

		$this->Products_model->tambahProduk($data, 'products');
		redirect('admin/produk/index');
	}
}