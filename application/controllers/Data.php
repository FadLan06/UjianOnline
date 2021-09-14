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

        $no = 1;
        foreach ($data as $dt) {
            echo "
                <tr align='center'>
                    <td width='5%'>" . $no++ . "</td>
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

    function simpan()
    {
        $data = [
            'nip' => $this->input->post('nip'),
            'nama_guru' => $this->input->post('nama'),
            'no_hp' => $this->input->post('no_hp'),
        ];

        $this->db->insert('tb_guru', $data);
    }

    function hapus($id)
    {
        $this->db->where('id_guru', $id);
        $this->db->delete('tb_guru');
    }

    function edit($id)
    {
        $row = $this->db->get_where('tb_guru', ['id_guru' => $id])->row();

        echo '
            <div class="form-group">
                <input type="hidden" class="form-control" value="' . $row->id_guru . '" id="id_guru">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="nip" value="' . $row->nip . '" placeholder="NIP">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="nama" value="' . $row->nama_guru . '" placeholder="NAMA LENGKAP">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="no_hp" value="' . $row->no_hp . '" placeholder="NOMOR HP">
            </div>
            <div class="form-group">
                <button class="btn btn-success" id="btnSimpan" value="ubah">Ubah</button>
            </div>
        ';
    }

    function ubah()
    {
        $data = [
            'nip' => $this->input->post('nip'),
            'nama_guru' => $this->input->post('nama'),
            'no_hp' => $this->input->post('no_hp'),
        ];

        $this->db->where('id_guru', $this->input->post('id_guru'));
        $this->db->update('tb_guru', $data);
    }
}
