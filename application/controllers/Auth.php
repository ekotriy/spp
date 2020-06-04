<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Login';
        $this->load->view('auth/login', $data);
    }

    public function regis()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[users.username]', ['is_unique' => 'This username has already']);
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[6]|matches[password2]', [
            'matches' => 'Password dont macth',
            'min_length' => 'Password too short'
        ]);
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|matches[password1]');


        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Buat Akun';
            $this->load->view('auth/regis', $data);
        } else {
            $username = $this->input->post('username', true);
            $password = $this->input->post('password1');
            $data = [
                'username' => htmlspecialchars($username),
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'id_role' => 1,
                'date_created' => time()
            ];

            $this->db->insert('users', $data);
            $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
            Congratulation! your account has been created</div>');
            redirect('auth');
        }
    }
}
