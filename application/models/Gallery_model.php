<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model {
    // Ambil semua gambar
    public function get_all_images() {
        return $this->db->get('gallery')->result_array();
    }

    // Tambah gambar baru
    public function insert_image($data) {
        $this->db->insert('gallery', $data);
    }

    // Hapus gambar
    public function delete_image($id) {
        $image = $this->db->get_where('gallery', ['id' => $id])->row_array();
        if ($image) {
            unlink('./uploads/gallery/' . $image['image']); // Hapus file fisik
            $this->db->delete('gallery', ['id' => $id]); // Hapus data dari DB
        }
    }
}
