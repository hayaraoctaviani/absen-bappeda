<?php
class login_model extends CI_Model {
    function auth_user($nip) {
        $query = $this->db->query("SELECT*FROM tb_pegawai WHERE nip='$nip' LIMIT 1");
        return $query;
    }
}
