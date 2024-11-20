<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Gallery_model');
    }

    // Menampilkan galeri
    public function index() {
        $data['title'] = 'Galeri';
        $data['gallery'] = $this->Gallery_model->get_all_images();
        $this->load->view('templates/header');
        $this->load->view('gallery/index', $data);
        $this->load->view('templates/footer');
    }

    // Form tambah gambar
    public function add() {
        $this->load->view('templates/header');
        $this->load->view('gallery/add');
        $this->load->view('templates/footer');
    }

    // Proses tambah gambar
    public function store() {
        $config['upload_path'] = './uploads/gallery/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('gallery/add');
        } else {
            $upload_data = $this->upload->data();
            $data = [
                'title' => $this->input->post('title'),
                'image' => $upload_data['file_name']
            ];
            $this->Gallery_model->insert_image($data);
            $this->session->set_flashdata('success', 'Gambar berhasil ditambahkan!');
            redirect('gallery');
        }
    }

    // Hapus gambar
    public function delete($id) {
        $this->Gallery_model->delete_image($id);
        $this->session->set_flashdata('success', 'Gambar berhasil dihapus!');
        redirect('gallery');
    }
}
