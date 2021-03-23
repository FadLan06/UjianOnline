<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
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
        $data['judul'] = 'Data';

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('dashboard/data', $data);
        $this->load->view('template/footer', $data);
    }

    function list()
    {
        $data = $this->db->get('tb_guru')->result();

        foreach ($data as $dt) {
            echo "
                <tr>
                    <td>" . $dt->nip . "</td>
                    <td>" . $dt->nama_guru . "</td>
                    <td>" . $dt->no_hp . "</td>
                    <td>
                        <button class='btn btn-info btnEdit' value='" . $dt->id_guru . "'>Edit</button>
                        <button class='btn btn-danger btnHapus' value='" . $dt->id_guru . "'>Hapus</button>
                    </td>
                </tr>
            ";
        }
    }

    function tambah_data()
    {
        $data = [
            'nip' => $this->input->post('nip'),
            'nama_guru' => $this->input->post('nama'),
            'no_hp' => $this->input->post('no_hp'),
        ];

        $this->db->insert('tb_guru', $data);
    }
}
