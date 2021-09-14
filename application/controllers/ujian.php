<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ujian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        if ($this->session->userdata('role_id') != '1') {
            redirect('Auth');
        }
    }

    public function index()
    {
        $data['judul'] = 'Ujian';
        $data['soal'] = $this->db->get('tb_soal')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('ujian/index', $data);
        $this->load->view('template/footer', $data);
    }
}
