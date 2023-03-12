<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboa extends CI_Controller
{

	public function login()
	{
		$this->load->view('admin/login');
	}

	public function dasha()
	{
		$data['head_title'] = "Dashboard";

		$this->load->view('admin/headera', $data);
		$this->load->view('admin/dasha', $data);
		$this->load->view('admin/footera', $data);
	}

	public function user()
	{
		$data['head_title'] = "User dashboad";

		$data['dt'] = $this->Musers->getData();
		$this->load->view('admin/headera', $data);
		$this->load->view('admin/users/read');
		$this->load->view('admin/footera');
	}

	public function add()
	{

		$data['dt'] = $this->Musers->getData();
		$this->load->view('admin/headera', $data);
		$this->load->view('admin/users/add');
		$this->load->view('admin/footera');
	}

	public function update($getId_user = "0")
	{
		// cek id user
		$cek = $this->Musers->cekId($getId_user);
		if ($getId_user == "0" || count($cek) == 0) {
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Pemberitahuan','Maaf Id Tidak ditemukan','error')</script>");
			redirect('dashboa/user');
			exit();
		}


		$data['id'] = $cek[0]['id'];
		$data['name'] = $cek[0]['name'];
		$data['photo'] = $cek[0]['photo'];
		$data['username'] = $cek[0]['username'];
		$data['email'] = $cek[0]['email'];
		$data['password'] = $cek[0]['password'];
		$data['level'] = $cek[0]['level'];

		$this->load->view('admin/headera', $data);
		$this->load->view('admin/users/update');
		$this->load->view('admin/footera');
	}



	public function proses_add()
	{
		// menerima inputan dari bagian view
		// $photo = ($this->input->post('photo'));
		$name = htmlspecialchars($this->input->post('name'), ENT_QUOTES);
		$username = htmlspecialchars($this->input->post('username'), ENT_QUOTES);
		$email = htmlspecialchars($this->input->post('email'), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password'), ENT_QUOTES);
		$level = htmlspecialchars($this->input->post('level'), ENT_QUOTES);


		// cek username tidak boleh sama
		$cek = $this->Musers->cekUsername($username);
		if (count($cek) >= 1) {
			// membuat notifikasi sementara
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Pemberitahuan','Maaf username ini telah ada','error')</script>");
			redirect('dashboa/add');
			exit();
		}
		// proses upload
		$config['upload_path'] = './assets/img/upload-user';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size'] = 2048; // 2 MB
		date_default_timezone_set('Asia/Jakarta');

		$date = date('YmdHis');
		$micro_time = microtime(true);
		$micro_time_array = explode(".", $micro_time);
		$micro_time_array[1] = substr($micro_time_array[1], 0, 6);
		$micro_time = implode("", $micro_time_array);
		$filename = $date . $micro_time . '.' . pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
		$config['file_name'] = $filename;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('photo')) {
			$meesageError = $this->upload->display_errors();
			// echo "<pre>";
			// var_dump($meesageError);
			// die();
			// ketika error apa yang kamu lakukan
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Gagal','".$this->upload->display_errors()."','error')</script>");
			redirect('dashboa/user?ket='.$meesageError);
			exit();
		} else {
			$dataSimpan = [
				"photo" => $filename,
				"name" => $name,
				"username" => $username,
				"password" => $password,
				"email" => $email,
				"level" => $level

			];

			$jadi = array_merge($dataSimpan);

			if ($this->Musers->add('user', $jadi)) {
				// membuat notifikasi sementara
				$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Berhasil','Tambah Data Berhasil disimpan','success')</script>");
				redirect('dashboa/user');
				exit();
			}
		}
	}

	public function proses_update()
	{

		// menerima inputan dari bagian view
		// $photo = ($this->input->post('photo'));
		$name = htmlspecialchars($this->input->post('name'), ENT_QUOTES);
		$username = htmlspecialchars($this->input->post('username'), ENT_QUOTES);
		$email = htmlspecialchars($this->input->post('email'), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password'), ENT_QUOTES);
		$level = htmlspecialchars($this->input->post('level'), ENT_QUOTES);
		$id_user = htmlspecialchars($this->input->post('id'), ENT_QUOTES);

		// cek username tidak boleh sama
		$cekUsernameSama = $this->Musers->cekUsername($username, $id_user);
		if (count($cekUsernameSama) >= 1) {
			// membuat notifikasi sementara
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Pemberitahuan','Maaf username ini telah ada','error')</script>");
			redirect('dashboa/update/'.$id_user."?ket=Maaf username ini telah ad");
			exit();
		}
		
		//proses cek apakah edit gambar juga
		if(!empty($_FILES['photo']['name'])){
			//proses menghapus foto di server
			//mengambil data sesuai ID user untuk mengambil gambar dan lain2
			$cekDataSesuai = $this->Musers->getData($id_user);
			$namaFileGambar = $cekDataSesuai[0]['photo'];
			$file = FCPATH . 'assets/img/upload-user/'.$namaFileGambar;
			// apakah ada filenya dan gambar dari databse tidak boleh kosong
			if (file_exists($file) && $namaFileGambar!="") {
				unlink($file);
			}
			
			// proses upload
			$config['upload_path'] = './assets/img/upload-user/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = 2048; // 2 MB
			date_default_timezone_set('Asia/Jakarta');
			
			$date = date('YmdHis');
			$micro_time = microtime(true);
			$micro_time_array = explode(".", $micro_time);
			$micro_time_array[1] = substr($micro_time_array[1], 0, 6);
			$micro_time = implode("", $micro_time_array);
			$filename = $date . $micro_time . '.' . pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
			$config['file_name'] = $filename;
			
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload('photo')) {
				$meesageError = $this->upload->display_errors();
				$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Gagal','".$this->upload->display_errors()."','error')</script>");
				redirect('dashboa/update/'.$id_user.'?ket='.$meesageError);
				exit();
			}
			
			$dataSimpan = [
				"photo" => $filename,
				"name" => $name,
				"username" => $username,
				"password" => $password,
				"email" => $email,
				"level" => $level
			];
			$jadi = array_merge($dataSimpan);
			if ($this->Musers->update('user', $jadi, 'id',$id_user)) {
				// membuat notifikasi sementara
				$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Berhasil','Tambah Data Berhasil disimpan','success')</script>");
				redirect('dashboa/user');
				exit();
			}
		}
		$dataSimpan = [
			"name" => $name,
			"username" => $username,
			"password" => $password,
			"email" => $email,
			"level" => $level
		];
		$jadi = array_merge($dataSimpan);
		if ($this->Musers->update('user', $jadi, 'id',$id_user)) {
			// membuat notifikasi sementara
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Berhasil','Tambah Data Berhasil disimpan','success')</script>");
			redirect('dashboa/user');
			exit();
		}
	}

	public function delete($getId_user = "0")
	{
		// cek id user
		$cek = $this->Musers->cekId($getId_user);
		if ($getId_user == "0" || count($cek) == 0) {
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Pemberitahuan','Maaf Id Tidak ditemukan','error')</script>");
			redirect('dashboa/user');
			exit();
		}

		// hapus data
		$ids = explode(',', $getId_user);
		foreach ($ids as $id) {
			$hapus = $this->Musers->hapusUser($id);
		}

		if ($hapus) {
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Berhasil','Data berhasil dihapus','success')</script>");
		} else {
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Gagal','Data gagal dihapus! Ulangi lagi','error')</script>");
		}

		redirect('dashboa/user');
	}
}
