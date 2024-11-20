<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index() {
        $data['about'] = $this->db->get('about')->row_array();
        $this->load->view('templates/header');
        $this->load->view('about/about', $data);
        $this->load->view('templates/footer');
    }
}
