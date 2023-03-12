<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	// metode yang pertama kali dijalankan
	public function __construct()
	{
		parent::__construct();
		// maka session harus dijalankan, apabila ada session maka dia dilarang untuk login.
		if ($this->session->userdata('session_id') != null) {
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Pemberitahuan','Kamu sudah login','info')</script>");
			redirect('admin/dashboard');
			exit();
		}
	}

    public function index()
	{

		// cek tabel user
		$cek = $this->Musers->getData();
		if (count($cek) == 0) {
			redirect('admin/login/registrasi');
		}

		$this->load->view('admin/loginv');
	}
    public function cek_login()
	{
		// menerima inputan dari bagian view
		$u = htmlspecialchars($this->input->post('u'), ENT_QUOTES);
		$p = htmlspecialchars($this->input->post('p'), ENT_QUOTES);

		// cek username
		$cekUser = $this->Musers->cekUsername($u);

		// percabangan, 
		if (count($cekUser) == 0) {
			// proses username salah
			// membuat notifikasi sementara
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Gagal','Username Salah!','error')</script>");
			redirect('admin/login');
			exit();
		}

		// proses ketika username bernilai benar

		// cek password
		if (password_verify($p, $cekUser[0]['password'])) {
			// ketika password benar

			// membuat data untuk dijadikan session
			$ses = [
				"session_id" => $cekUser[0]['id_user'],
				"session_namafull" => $cekUser[0]['nama_depan'] . ' ' . $cekUser[0]['nama_belakang'],
				"session_level" => $cekUser[0]['level']
			];
			// proses membuat session di CI3 pada php
			$this->session->set_userdata($ses);

			// membuat notifikasi sementara
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Berhasil','Selamat Datang di Website Perhitungan Laba!','success')</script>");
			redirect('admin/dashboard');
			exit();
		} else {
			// ketika password salah
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Gagal','Password Salah!','error')</script>");
			redirect('admin/login');
			exit();
		}
	}
}