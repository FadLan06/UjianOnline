<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $data['judul'] = 'Dashboard';
        $data['soal'] = $this->db->get('tb_soal')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('template/footer', $data);
    }

    function simpan()
    {
        if (isset($_POST['simpan'])) {
            $jawaban = $this->input->post('jawaban');
            $benar = 0;
            if (count($jawaban) <= 1) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Belum Menjawab Satupun Soal!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('Dashboard');
            } else {
                foreach ($jawaban as $nmr => $nilai) {
                    $soal = $this->db->get_where('tb_soal', ['id_soal' => $nmr])->row_array();
                    if ($soal['jawaban'] == $nilai) {
                        $benar = $benar + 1;
                    }
                }

                $jumlah_soal = $this->db->count_all_results('tb_soal');
                $nilai_per_soal = 100 / $jumlah_soal;
                $jawab_salah = $jumlah_soal - $benar;
                $persentase_benar = round($benar / $jumlah_soal * 100) . "%";
                $persentase_salah = round($jawab_salah / $jumlah_soal * 100) . "%";
                $nilai = intval($nilai_per_soal * $benar);

                $this->session->set_flashdata('message', '<div class="alert alert-secondary alert-dismissible fade show" role="alert">Hasil Jawaban Anda : <br> Benar = ' . $persentase_benar . '<br> Salah = ' . $persentase_salah . '<br> Nilai = ' . $nilai . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('Dashboard');
            }
        }
    }
}
