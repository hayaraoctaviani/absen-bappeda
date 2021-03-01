<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_login extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';
        $data['user'] = $this->db->get_where('tb_pegawai', ['nip' =>
        $this->session->userdata('nip')])->row_array();

        $this->load->view('user/template/header', $data);
        $this->load->view('user/home/index', $data);
        $this->load->view('user/template/footer');
    }

    public function profil()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';
        $data['user'] = $this->db->get_where('tb_pegawai', ['nip' =>
        $this->session->userdata('nip')])->row_array();

        $this->load->view('user/template/header', $data);
        $this->load->view('user/profil/index', $data);
        $this->load->view('user/template/footer');
    }

    public function absen()
    {
        $this->load->model('Absen_model');



        if ($this->input->post('keterangan') == "") {
            $nip = $this->input->post('nip');
            $jam = $this->input->post('jam');
            $status = $this->input->post('status');
            $tanggal = $this->input->post('tanggal');

            $data = array(
                'nip' => $nip,
                'jam' => $jam,
                'status' => $status,
                'tanggal' => $tanggal
            );
            $this->Absen_model->input_data($data, 'tb_kehadiran');
            redirect('user_login');
        } else {
            $nip = $this->input->post('nip');
            $jam = $this->input->post('jam');
            $status = $this->input->post('status');
            $keterangan = $this->input->post('keterangan');
            $tanggal = $this->input->post('tanggal');

            $data = array(
                'nip' => $nip,
                'jam' => $jam,
                'status' => $status,
                'keterangan' => $keterangan,
                'tanggal' => $tanggal
            );
            $this->Absen_model->input_data($data, 'tb_kehadiran');
            redirect('user_login');
        }
    }
}
