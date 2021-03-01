<?php
class Profil_model extends CI_Model {
    public function getAllProfil() {
        return $this->db->get_where('tb_pegawai', ['nip' => 11111])->row_array();
    }
}
