<?php 

class Keranjang extends CI_Controller {

	public function tambah($id) {
		$products = $this->Products_model->find($id);

		$data = array(
			'id' => $products->id_produk,
			'qty' => 1,
			'price' => $products->harga,
			'name' => $products->nama
		);

		$this->cart->insert($data);
		redirect('user');
	}

	public function detail() {
		$this->load->view('ecommerce/templates/header');
		$this->load->view('ecommerce/detailCart');
		$this->load->view('ecommerce/templates/footer');
	}

	public function hapusKeranjang() {
		$this->cart->destroy();
		redirect('keranjang/detail');
	}

	public function pembayaran() {
		$this->load->view('ecommerce/templates/header');
		$this->load->view('ecommerce/pembayaran');
		$this->load->view('ecommerce/templates/footer');
	}

	public function prosesPesanan() {

		$is_processed = $this->model_invoice->index();

		if ($is_processed) {
			$this->cart->destroy();
			$this->load->view('ecommerce/templates/header');
			$this->load->view('ecommerce/prosesPesanan');
			$this->load->view('ecommerce/templates/footer');
		} else {
			echo "Maaf, Pesanan Anda gagal diproses!";
		}
		
	}
}