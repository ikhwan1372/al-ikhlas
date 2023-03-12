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
		$data['username'] = $cek[0]['username'];
		$data['email'] = $cek[0]['email'];
		$data['password'] = $cek[0]['email'];
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
		$config['max_size'] = 1024;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;
		
		$filename = uniqid() . '_' . $_FILES['photo']['name'];
		$config['file_name'] = $filename;
	
		$this->load->library('upload', $config);
	
		if (!$this->upload->do_upload('photo')) {
			// ketika error apa yang kamu lakukan
		} else {
			$dataSimpan = [
				"photo" =>$filename,
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


		// membuat notifikasi sementara
		$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Gagal','Proses Lambat! Ulangi lagi','error')</script>");
		redirect('dashboa/user');
	}

	public function proses_update()
	{

		// menerima inputan dari bagian view
		// $photo = ($this->input->post('photo'));
		$name = htmlspecialchars($this->input->post('name'), ENT_QUOTES);
		$username = htmlspecialchars($this->input->post('username'), ENT_QUOTES);
		$email = htmlspecialchars($this->input->post('email'), ENT_QUOTES);
		$level = htmlspecialchars($this->input->post('level'), ENT_QUOTES);


		// cek username tidak boleh sama
		$cek = $this->Musers->cekUsername($username);
		if (count($cek) >= 1) {
			// membuat notifikasi sementara
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Pemberitahuan','Maaf username ini telah ada','error')</script>");
			redirect('dashboa/update');
			exit();
		}

		if ($this->Musers->update('username', 'id')) {
			// membuat notifikasi sementara
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Berhasil','Edit Data Berhasil disimpan','success')</script>");
			redirect('admin/users');
			exit();
		}
		// proses upload
		$config['upload_path'] = './assets/img/upload-user';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size'] = 1024;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;
		
		$filename = uniqid() . '_' . $_FILES['photo']['name'];
		$config['file_name'] = $filename;
	
		$this->load->library('upload', $config);
	
		if (!$this->upload->do_upload('photo')) {
			// ketika error apa yang kamu lakukan
		} else {
			$dataSimpan = [
				"photo" =>$filename,
				"name" => $name,
				"username" => $username,
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


		// membuat notifikasi sementara
		$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Gagal','Proses Lambat! Ulangi lagi','error')</script>");
		redirect('dashboa/user');
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
