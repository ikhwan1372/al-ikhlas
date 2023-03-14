<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Musers extends CI_Model
{
    public function getData()
    { {
            $sql = "SELECT * FROM `user`";
            $querySql = $this->db->query($sql);
            return $querySql->result_array();
        }
    }
    public function add($tb, $data)
    {
        $this->db->insert($tb, $data);
        return $this->db->affected_rows(); // 0 atau 1
    }

    public function update($tb, $data, $kolom, $nilai)
    {
        $this->db->where($kolom, $nilai);
        $this->db->update($tb, $data);
        return $this->db->affected_rows(); // 0 atau 1
    }


    public function cekUsername($username, $id = "")
    {
        if ($id == '') {
            $sql = "SELECT * FROM user WHERE username='$username'";
        } else {
            $sql = "SELECT * FROM user WHERE username = '$username' AND id != '$id'";
        }
        $querySql = $this->db->query($sql);
        return $querySql->result_array();
    }

    public function cekid($id)
    {
        $sql = "SELECT * FROM user WHERE id='$id'";
        $querySql = $this->db->query($sql);
        return $querySql->result_array();
    }

    public function hapususer($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
        return $this->db->affected_rows() > 0;
    }

    public function getEnumValues($table, $column) {
        $result = $this->db->query("SHOW COLUMNS FROM $table WHERE Field = '$column'");
        $row = $result->row();
        preg_match_all("/'([\w\s]+)'/", $row->Type, $matches);
        return $matches[1];
      }
    
}
