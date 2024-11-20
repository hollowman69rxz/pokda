<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['form_validation', 'session']);
        $this->load->helper('url');
        $this->load->model('Auth_model');
    }

    public function signin()
    {
        $data['title'] = 'Sign In';
        $data['error'] = '';

        if ($this->input->post()) {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() === TRUE) {
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $user = $this->Auth_model->login($email, $password);

                if ($user) {
                    $this->session->set_userdata([
                        'user_id' => $user['id'],
                        'user_name' => $user['name'],
                        // 'user_role' => $user['role'], // Tambahkan role jika ada
                        'logged_in' => TRUE
                    ]);
                    redirect('dashboard');
                } else {
                    $data['error'] = 'Email atau Password salah!';
                }
            } else {
                $data['error'] = validation_errors();
            }
        }

        $this->load->view('auth/signin', $data);
    }

    public function signup()
    {
        $data['title'] = 'Sign Up';
        $data['error'] = '';
        $data['success'] = '';

        if ($this->input->post()) {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]', [
                'is_unique' => 'Email ini sudah terdaftar.'
            ]);
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

            if ($this->form_validation->run() === TRUE) {
                $data = [
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                    'role' => 'user' // Default role
                ];

                if ($this->Auth_model->register($data)) {
                    $data['success'] = 'Registrasi berhasil. Silakan login!';
                } else {
                    $data['error'] = 'Terjadi kesalahan. Coba lagi nanti.';
                }
            } else {
                $data['error'] = validation_errors();
            }
        }

        $this->load->view('auth/signup', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('signin');
    }
}