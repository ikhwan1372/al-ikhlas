<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Musers extends CI_Model{
    public function getData()
    {
        {
            $sql = "SELECT * FROM `user`";
            $querySql = $this->db->query($sql);
            return $querySql->result_array();
        }
    }
}