<?php 

class Products_model extends CI_Model {

	public function getAllProducts() {
        return $this->db->get('products')->result_array();
    }

    public function getProductByID($id) {
        return $this->db->get_where('products', ['id' => $id])->row_array();
    }

    public function tambahProduk($data, $table) {
    	$this->db->insert($table, $data);
    }

    public function editProduk($where, $table) {
    	return $this->db->get_where($table, $where);
    }

    public function updateData($where, $data, $table) {
    	$this->db->where($where);
    	$this->db->update($table, $data);
    }

    // public function ubahDataProduk() {
    //     $data = [
    //         "nama" => $this->input->post('nama', true),
    //         "deskripsi" => $this->input->post('deskripsi', true),
    //         "kategori" => $this->input->post('kategori', true),
    //         "harga" => $this->input->post('harga', true),
    //         "stok" => $this->input->post('stok', true)
    //     ];

    //     $this->db->where('id', $this->input->post('id'));
    //     $this->db->update('products', $data);
    // }
    

    public function hapusDataProduk($id) {
        $this->db->where('id', $id);
        $this->db->delete('products');
    }

    public function find($id) {
        $result = $this->db->where('id', $id)
                       ->limit(1)
                       ->get('products');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
}