<?php
class Beranda_model extends CI_Model
{
    public function getAllProfil()
    {
        return $this->db->from('tb_pegawai')->join('tb_kehadiran', 'tb_kehadiran.nip=tb_pegawai.nip')->get()->result();
    }

    public function hadir()
    {
        return $this->db->from('tb_pegawai')->join('tb_kehadiran', 'tb_kehadiran.nip=tb_pegawai.nip')->where('tb_kehadiran.status', 'hadir')->get()->result();
    }

    public function ortu()
    {
        return $this->db->from('tb_pegawai')->join('tb_kehadiran', 'tb_kehadiran.nip=tb_pegawai.nip')->where('tb_pegawai.umur >',50)->get()->result();
    }

    public function sakit()
    {
        return $this->db->from('tb_pegawai')->join('tb_kehadiran', 'tb_kehadiran.nip=tb_pegawai.nip')->where('tb_kehadiran.status', 'sakit')->get()->result();
    }

    public function izin()
    {
        return $this->db->from('tb_pegawai')->join('tb_kehadiran', 'tb_kehadiran.nip=tb_pegawai.nip')->where('tb_kehadiran.status', 'izin')->get()->result();
    }

    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
