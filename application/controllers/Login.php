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
			redirect('dashboa');
			exit();
		}
	}

    public function index()
	{
		// cek tabel user
		// $cek = $this->Musers->getData();
		// if (count($cek) == 0) {
		// 	redirect('admin/login/registrasi');
		// }

		$this->load->view('admin/login');
	}
    public function cek_login()
	{
		// menerima inputan dari bagian view
		$username = htmlspecialchars($this->input->post('username'), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password'), ENT_QUOTES);
		
		// cek username
		$cekUser = $this->Musers->cekUsername($username);

		// percabangan, 
		if (count($cekUser) == 0) {
			// proses username salah
			// membuat notifikasi sementara
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Gagal','Username Salah!','error')</script>");
			redirect('login');
			exit();
		}

		// proses ketika username bernilai benar

		// cek password
		if (password_verify($password, $cekUser[0]['password'])) {
			// ketika password benar

			// membuat data untuk dijadikan session
			$ses = [
				"session_id" => $cekUser[0]['id'],
				"session_username" => $cekUser[0]['username'],
				"session_level" => $cekUser[0]['level']
			];
			// proses membuat session di CI3 pada php
			$this->session->set_userdata($ses);

			// membuat notifikasi sementara
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Berhasil','Selamat Datang di Web Al- Ikhlas!','success')</script>");
			redirect('dashboa');
			exit();
		} else {
			// ketika password salah
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Gagal','Password Salah!','error')</script>");
			redirect('login');
			exit();
		}
	}
}