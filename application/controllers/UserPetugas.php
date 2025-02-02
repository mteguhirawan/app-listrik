<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserPetugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Halaman Petugas';

       $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('userpetugas/index', $data);
        $this->load->view('templates/footer');
    }
}