<?php 

class Category_model extends CI_Model {
	public function getAllCategory() {
        return $this->db->get('category')->result_array();
    }
}