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
        if ($this->session->userdata('username')) {
            redirect('');
        }

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Login';
            $this->template->load('templates/login_temps', 'auth/login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        // check if there is a username in the users table
        if ($user) {
            // check the password entered is the same as the users password table
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'id_role' => $user['id_role']
                ];
                // check type id_role username in the users table
                if ($user['id_role'] == 1) {
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">
            Username not found</div>');
            redirect('auth');
        }
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
            $this->template->load('templates/login_temps', 'auth/regis', $data);
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

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_role');

        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">You have been logout</div>');
        redirect('auth');
    }
}
