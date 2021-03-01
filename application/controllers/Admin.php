<?php
class Admin extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';

        $this->load->model('Beranda_model');
        $data['user'] = $this->Beranda_model->hadir();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/home/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function pengaturan()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';

        $this->load->model('Waktu_model');
        $where = array('id' => 1);
        $data['user'] = $this->Waktu_model->edit_data($where, 'tb_waktu')->result();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/pengaturan/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function edit_pengaturan()
    {
        $id = $this->input->post('id');
        $pagi_buka = $this->input->post('pagi_buka');
        $pagi_hadir = $this->input->post('pagi_hadir');
        $pagi_tutup = $this->input->post('pagi_tutup');
        $this->load->model('Waktu_model');

        $data = array(
            'pagi_buka' => $pagi_buka,
            'pagi_hadir' => $pagi_hadir,
            'pagi_tutup' => $pagi_tutup
        );

        $where = array(
            'id' => $id
        );

        $this->Waktu_model->update_data($where, $data, 'tb_waktu');
        redirect('admin/pengaturan');
    }

    public function ortu()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';

        $this->load->model('Beranda_model');
        $data['user'] = $this->Beranda_model->ortu();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/kriteria/ortu', $data);
        $this->load->view('admin/template/footer');
    }

    public function sakit()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';

        $this->load->model('Beranda_model');
        $data['user'] = $this->Beranda_model->sakit();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/kriteria/sakit', $data);
        $this->load->view('admin/template/footer');
    }

    public function izin()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';

        $this->load->model('Beranda_model');
        $data['user'] = $this->Beranda_model->izin();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/kriteria/izin', $data);
        $this->load->view('admin/template/footer');
    }

    public function pegawai()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';

        $this->load->model('Beranda_model');
        $data['user'] = $this->Beranda_model->getAllProfil();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/pegawai/index', $data);
        $this->load->view('admin/template/footer');
    }

    public function edit()
    {
        $data['judul'] = 'Absensi Bappeda Sultra';

        $this->load->model('Beranda_model');
        $data['user'] = $this->Beranda_model->getAllProfil();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/pegawai/edit', $data);
        $this->load->view('admin/template/footer');
    }

    public function delete($nip)
    {
        $this->load->model('Beranda_model');

        $where = array('nip' => $nip);
        $this->Beranda_model->hapus_data($where, 'tb_pegawai');
        redirect('admin/pegawai');
    }
}
