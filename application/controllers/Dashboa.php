<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboa extends CI_Controller {

	public function login()
	{
        $this->load->view('admin/login');


	}

	public function dasha()
	{
		$data['head_title'] = "Dashboard";

		$this->load->view('admin/headera',$data);
		$this->load->view('admin/dasha',$data);
		$this->load->view('admin/footera',$data);

	}

	public function user()
	{
		$data['head_title'] = "User dashboad";

		$data['dt'] = $this->Musers->getData();
		$this->load->view('admin/headera',$data);
		$this->load->view('admin/users/read');
		$this->load->view('admin/footera');

	}

	public function add()
	{

		$data['dt'] = $this->Musers->getData();
		$this->load->view('admin/headera',$data);
		$this->load->view('admin/users/add');
		$this->load->view('admin/footera');

	}

	public function update()
	{

		$data['dt'] = $this->Musers->getData();
		$this->load->view('admin/headera',$data);
		$this->load->view('admin/users/update');
		$this->load->view('admin/footera');

	}



	public function proses_add()
	{

		// menerima inputan dari bagian view
		$photo = htmlspecialchars($this->input->post('photo'), ENT_QUOTES);
		$name = htmlspecialchars($this->input->post('name'), ENT_QUOTES);
		$username = htmlspecialchars($this->input->post('username'), ENT_QUOTES);
		$email = htmlspecialchars($this->input->post('email'), ENT_QUOTES);
		$level = htmlspecialchars($this->input->post('level'), ENT_QUOTES);


		// cek username tidak boleh sama
		$cek = $this->Musers->cekUsername($username);
		if (count($cek) >= 1) {
			// membuat notifikasi sementara
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Pemberitahuan','Maaf username ini telah ada','error')</script>");
			redirect('dashboa/add');
			exit();
		}

		$dataSimpan = [
			"photo" =>$photo,
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
		//choose image
		{
			$config['upload_path'] = '../../assets/img/'; // path to upload folder
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 1024; // maximum size in kilobytes
		  
			$this->load->library('upload', $config);
		  
			if (!$this->upload->proses_add('photo')) {
			  // handle upload error
			}
		  
			$data = $this->upload->data();
		  
			// insert image data to database
			$image_name = $data['file_name'];
			$this->db->insert('photo', array('name' => $image_name));
			
			redirect('photo');
		  }

		// membuat notifikasi sementara
		$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Gagal','Proses Lambat! Ulangi lagi','error')</script>");
		redirect('dashboa/user');
	}

	public function proses_update()
	{

		// menerima inputan dari bagian view
		$id = htmlspecialchars($this->input->post('id'), ENT_QUOTES);
		$photo = htmlspecialchars($this->input->post('photo'), ENT_QUOTES);
		$name = htmlspecialchars($this->input->post('name'), ENT_QUOTES);
		$username = htmlspecialchars($this->input->post('username'), ENT_QUOTES);
		$email = htmlspecialchars($this->input->post('email'), ENT_QUOTES);
		$level = htmlspecialchars($this->input->post('level'), ENT_QUOTES);

		$cek = $this->Musers->cekUsername($username, $id);
		if (count($cek) >= 1) {
			// membuat notifikasi sementara
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Pemberitahuan','Maaf username ini telah ada','error')</script>");
			redirect('dashboa/add');
			exit();
		}

		$dataSimpan = [
			"photo" =>$photo,
			"name" => $name,
			"username" => $username,
			"email" => $email,
			"level" => $level

		];

		$jadi = array_merge($dataSimpan);

		if ($this->Musers->update('user', $jadi, 'id', $id)) {
			// membuat notifikasi sementara
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Berhasil','Tambah Data Berhasil disimpan','success')</script>");
			redirect('dashboa/user');
			exit();
		}
		//choose image
		{
			$config['upload_path'] = '<?base_url?>assets/img/'; // path to upload folder
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 1024; // maximum size in kilobytes
		  
			$this->load->library('upload', $config);
		  
			if (!$this->upload->proses_add('photo')) {
			  // handle upload error
			}
		  
			$data = $this->upload->data();
		  
			// insert image data to database
			$image_name = $data['file_name'];
			$this->db->insert('photo', array('name' => $image_name));
			
			redirect('photo');
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

		// membuat notifikasi sementara
		$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Gagal','Proses Lambat! Ulangi lagi','error')</script>");
		redirect('dashboa/user');
	}
	
}
