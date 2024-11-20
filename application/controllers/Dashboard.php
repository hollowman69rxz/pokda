<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->library(['session']);
    //     $this->load->helper('url');

    //     if (!$this->session->userdata('logged_in')) {
    //         redirect('admin/dashboard');
    //     }
    // }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user_name'] = $this->session->userdata('user_name');
        $this->load->view('admin/dashboard', $data);
    }
}