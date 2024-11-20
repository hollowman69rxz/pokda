<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('contact/contact');
        $this->load->view('templates/footer');
    }

    public function send() {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'message' => $this->input->post('message')
        ];
        $this->db->insert('contact_messages', $data);
        $this->session->set_flashdata('success', 'Pesan Anda telah terkirim!');
        redirect('contact');
    }
}
