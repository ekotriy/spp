<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Config extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Config_model', 'confg');
    }

    // feature setting profile school
    public function setting()
    {
        $this->form_validation->set_rules('sekolah', 'Nama Sekolah', 'trim|required');
        $this->form_validation->set_rules('nss', 'NSS', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('kelurahan', 'Desa/Kelurahan', 'trim|required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');
        $this->form_validation->set_rules('kabupaten', 'Kebupaten', 'trim|required');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'trim|required');
        $this->form_validation->set_rules('kepsek', 'Nama Kepala Sekolah', 'trim|required');
        $this->form_validation->set_rules('website', 'Website', 'trim|required');
        $this->form_validation->set_rules('email', 'E-mail', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $data['setting'] = $this->confg->getSettingById();
            $data['title'] = 'Setting';
            $this->template->load('templates/admin_temps', 'config/setting', $data);
        } else {
            $this->confg->setUpdateSettingById();
            redirect('config/setting');
        }
    }

    // feature add new account
    public function TambahAkun()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('role_id', 'Status', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah Akun';
            $this->template->load('templates/admin_temps', 'config/tambah_akun', $data);
        } else {
            $this->confg->setInsertAccount();
            redirect('home/indexs');
        }
    }
}
