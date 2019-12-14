<?php 

class Products_model extends CI_Model {

	public function getAllProducts() {
        return $this->db->get('products')->result_array();
    }

    public function tambahProduk($data, $table) {
    	$this->db->insert($table, $data);
    }
}