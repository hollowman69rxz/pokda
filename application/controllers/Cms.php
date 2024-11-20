<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cms extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CmsModel');
        $this->load->library('session');
        $this->load->helper('url');

        // Restrict access to admin only
        // if (!$this->session->userdata('logged_in') || $this->session->userdata('user_role') !== 'admin') {
        //     redirect('signin');
        // }
    }

    public function index()
    {
        $data['title'] = 'CMS Management';
        $data['contents'] = $this->CmsModel->getAllContent();
        $this->load->view('admin/cms/index', $data);
    }

    public function create()
    {
        $data['title'] = 'Add New Content';
        $this->load->view('admin/cms/create', $data);
    }

    public function store()
    {
        $data = [
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content')
        ];

        $this->CmsModel->insertContent($data);
        redirect('cms');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Content';
        $data['content'] = $this->CmsModel->getContentById($id);
        $this->load->view('admin/cms/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content')
        ];

        $this->CmsModel->updateContent($id, $data);
        redirect('cms');
    }

    public function delete($id)
    {
        $this->CmsModel->deleteContent($id);
        redirect('cms');
    }
}
