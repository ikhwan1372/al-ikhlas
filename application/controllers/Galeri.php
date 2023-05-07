<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
	// metode yang pertama kali dijalankan
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		// keamaan admin panel, harus login terlebih dahulu
		$sessionId = $this->session->userdata('session_id');
		if ($sessionId == null) {
			redirect('login');
		}
	}

	public function index()
	{
		$data['head_title'] = "Dashboard";

		$this->load->view('admin/headera', $data);
		$this->load->view('admin/dasha', $data);
		$this->load->view('admin/footera', $data);
	}

	public function gal()
	{
		$data['head_title'] = "Galeri";

		$data['dt'] = $this->Mgaleri->getData();
		$this->load->view('admin/headera', $data);
		$this->load->view('admin/galeri/readg');
		$this->load->view('admin/footera');
	}

	public function add()
	{

		$this->load->model('Mgaleri');
		$data['enum_values'] = $this->Mgaleri->getEnumValues('user', 'level');
		$data['dt'] = $this->Mgaleri->getData();
		$this->load->view('admin/headera', $data);
		$this->load->view('admin/galeri/addg');
		$this->load->view('admin/footera');
	}

	public function proses_add()
	{
		// menerima inputan dari bagian view
		// $gambar = ($this->input->post('gambar'));
		$judul = htmlspecialchars($this->input->post('judul'), ENT_QUOTES);
		// $gambar = htmlspecialchars($this->input->post('gambar'), ENT_QUOTES);
		$keterangan = htmlspecialchars($this->input->post('keterangan'), ENT_QUOTES);



		// cek judul yang sudah ada tidak boleh sama
		$cek = $this->Mgaleri->cekJudul($judul);
		if (count($cek) >= 1) {
			// membuat notifikasi sementara
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Pemberitahuan','Maaf username ini telah ada','error')</script>");
			redirect('galeri/add');
			exit();

		}
		// proses upload
		$config['upload_path'] = './assets/img/upload-gbr';
		$config['allowed_types'] = 'jpg|jpeg|png';
		// $config['max_size'] = 2048; // 2 MB
		date_default_timezone_set('Asia/Jakarta');

		$date = date('YmdHis');
		$micro_time = microtime(true);
		$micro_time_array = explode(".", $micro_time);
		$micro_time_array[1] = substr($micro_time_array[1], 0, 6);
		$micro_time = implode("", $micro_time_array);
		$filename = $date . $micro_time . '.' . pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
		$config['file_name'] = $filename;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar')) {
			$meesageError = $this->upload->display_errors();
			// echo "<pre>";
			// var_dump($meesageError);
			// die();
			// ketika error apa yang kamu lakukan
			$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Gagal','" . $this->upload->display_errors() . "','error')</script>");
			redirect('galeri/gal?ket=' . $meesageError);
			exit();
		} else {
		
			$dataSimpan = [
				"judul" => $judul,
				"gambar" => $filename,
				"keterangan" => $keterangan,


			];
			$dataBintang = [
				"tgl_buat" => date('Y-m-d H:i:s'),
				"tgl_update" => "0000-00-00 00:00:00",
				
			];

			$jadi = array_merge($dataSimpan, $dataBintang);

			if ($this->Mgaleri->add('galeri', $jadi)) {
				// membuat notifikasi sementara
				$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Berhasil','Tambah Data Berhasil disimpan','success')</script>");
				redirect('galeri/gal');
				exit();
			}
		}
		// membuat notifikasi sementara
		$this->session->set_flashdata('notifikasi', "<script>Swal.fire('Gagal','Proses Lambat! Ulangi lagi','error')</script>");
		redirect('admin/galeri/addg');
	}
}
