<?php 

class Produk extends CI_Controller {
	public function index() {
		$data['products'] = $this->Products_model->getAllProducts();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('produk/index', $data);
		$this->load->view('admin/templates/footer');
	}

	public function tambah() {
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
		redirect('produk/index');
	}

	public function edit($id) {
		$where = array('id' => $id);
		$data['products'] = $this->Products_model->editProduk($where, 'products')->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('produk/edit', $data);
		$this->load->view('admin/templates/footer');
	}

	public function update() {
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');

		$data = array(
			'nama' => $nama,
			'deskripsi' => $deskripsi,
			'kategori' => $kategori,
			'harga' => $harga,
			'stok' => $stok
		);

		$where = array(
			'id' => $id
		);

		$this->Products_model->updateData($where, $data, 'products');
		redirect('produk/index');

	}


	public function hapus($id) {
        $this->Products_model->hapusDataProduk($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('produk/index');
    }
}