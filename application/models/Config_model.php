<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Config_model extends CI_Model
{
    // get all from table profile by id_profil 1
    public function getSettingById()
    {
        return $this->db->get_where('profile', ['id_profil' => 1])->row_array();
    }

    // update from table profile by id_profil 1
    public function setUpdateSettingById()
    {
        $nm_sekolah = $this->input->post('sekolah', true);
        $nss        = $this->input->post('nss', true);
        $alamat     = $this->input->post('alamat', true);
        $kelurahan  = $this->input->post('kelurahan', true);
        $kecamatan  = $this->input->post('kecamatan', true);
        $kabupaten  = $this->input->post('kabupaten', true);
        $provinsi   = $this->input->post('provinsi', true);
        $kepsek     = $this->input->post('kepsek', true);
        $website    = $this->input->post('website', true);
        $email      = $this->input->post('email', true);
        $data = [
            "nm_sekolah"    => $nm_sekolah,
            "nss"           => $nss,
            "alamat"        => $alamat,
            "kelurahan"     => $kelurahan,
            "kecamatan"     => $kecamatan,
            "kabupaten"     => $kabupaten,
            "provinsi"      => $provinsi,
            "kpl_sekolah"   => $kepsek,
            "website"       => $website,
            "email"         => $email
        ];
        $this->db->where('id_profil', 1);
        $this->db->update('profile', $data);
    }
}
