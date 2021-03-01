<?php
class Absen_model extends CI_Model
{
    public function input_data($data,$table)
    {
        return $this->db->insert($table,$data);
    }
}