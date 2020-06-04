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
        $data['title'] = 'Buat Akun';
        $this->load->view('auth/regis', $data);
    }
}
