<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasbor extends CI_Controller
{

	//Load Model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
		$this->load->model('galeri_model');
		$this->load->model('program_model');
		$this->load->model('user_model');
		$this->load->model('konfigurasi_model');
	}

	public function index()
	{
		// $berita 	= $this->berita_model->listing();
		// $galeri 	= $this->galeri_model->listing();
		// $user 		= $this->user_model->listing();
		// $program 	= $this->program_model->listing();

		$data = array(
			// 'title'		=> 'Halaman Dasbor Admin',
			// 'berita'	=> $berita,
			// 'galeri'	=> $galeri,
			// 'user'		=> $user,
			// 'program'	=> $program,
			'breadcrumb' => 'Beranda',
			'sub_breadcrumb' => 'Beranda',
			'isi'		=> 'admin/dasbor/list',
			'activator' => 'dasbor'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
}

/* End of file Dasbor.php */
/* Location: ./application/controllers/admin/Dasbor.php */