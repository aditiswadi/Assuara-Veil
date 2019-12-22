<?php 

class Products_model extends CI_Model {

	public function getAllProducts() {
        return $this->db->get('products')->result_array();
    }


    public function getProductByID($id) {
        return $this->db->get_where('products', ['id_produk' => $id])->row_array();
    }


    public function tambahProduk($data, $table) {
    	$this->db->insert($table, $data);
    }

    public function ubahDataProduk() {
        $data = [
            "nama" => $this->input->post('nama', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "kategori" => $this->input->post('kategori', true),
            "harga" => $this->input->post('harga', true),
            "stok" => $this->input->post('stok', true)
        ];

        $this->db->where('id_produk', $this->input->post('id_produk'));
        $this->db->update('products', $data);
    }
    

    public function hapusDataProduk($id) {
        $this->db->where('id_produk', $id);
        $this->db->delete('products');
    }

    public function find($id) {
        $result = $this->db->where('id_produk', $id)
                       ->limit(1)
                       ->get('products');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function detailProduct($id) {
        $result = $this->db->where('id_produk', $id)->get('products');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}