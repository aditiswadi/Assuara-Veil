<?php 

class Kategori_model extends CI_Model {

	public function getAllKategori() {
        return $this->db->get('kategori')->result_array();
    }

    public function getKategoriById($id) {
        return $this->db->get_where('kategori', ['id_kategori' => $id])->row_array();
    }

    public function tambahDataKategori() {
        $data = [
            "nama_kategori" => $this->input->post('kategori', true),
        ];

        $this->db->insert('kategori', $data);
    }

    public function hapusDataKategori($id) {
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
    }

    public function ubahDataKategori() {
        $data = [
            "nama_kategori" => $this->input->post('kategori', true),
        ];

        $this->db->where('id_kategori', $this->input->post('id_kategori'));
        $this->db->update('kategori', $data);
    }
}