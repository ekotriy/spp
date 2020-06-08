<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function indexs()
    {
        $data['title'] = 'Home';
        $this->template->load('templates/admin_temps', 'home/admin', $data);
    }
}
