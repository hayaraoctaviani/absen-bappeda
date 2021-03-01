<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Absensi Bappeda Sultra';
            $this->load->view('user/template/header', $data);
            $this->load->view('auth/login');
            $this->load->view('user/template/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $nip = $this->input->post('nip');

        $user = $this->db->get_where('tb_pegawai', ['nip' => $nip])->row_array();

        if ($user) {
            $data = [
                'nip' => $user['nip'],
                'role_id' => $user['role_id']
            ];
            $this->session->set_userdata($data);
            if ($user['role_id'] == 1) {
                redirect('admin');
            } else {
                redirect('user_login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIP tidak terdaftar</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('nip', 'Nip', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[tb_pegawai.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[8]|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Absensi Bappeda Sultra';
            $this->load->view('user/template/header', $data);
            $this->load->view('auth/registration');
            $this->load->view('user/template/footer');
        } else {
            echo 'Data berhasil ditambahkan';
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nip');
        $this->session->unset_userdata('role_id');

        redirect('auth');
    }
}
