<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{
    public function index()
    {
        // code untuk menghapus session
        $this->session->unset_userdata('session_id');
        $this->session->unset_userdata('session_username');
        $this->session->unset_userdata('session_foto');
        
        $this->session->unset_userdata('session_level');

        // redirect untuk berpindah ke controller lain
        redirect('dash');
    }
}