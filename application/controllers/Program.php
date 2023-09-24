<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {

	//Load Model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('program_model');
	}

	//MainPage Program
	public function index()
	{
		$konfigurasi = $this->konfigurasi_model->listing();
		$link = $this->konfigurasi_model->viewLink();
		$apl = $this->konfigurasi_model->viewAplikasiMadrasah();

		//Listing Berita dengan Pagination
		$this->load->library('pagination');

		$config['base_url'] 	= base_url('index.php/program/index/');
		$config['total_rows'] 	= count($this->program_model->total());
		$config['per_page'] 	= 12;
		$config['uri_segment']	= 3;
		//Limit dan Start
		$limit					= $config['per_page'];
		$start					= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
		//End Limit dan Start
		$this->pagination->initialize($config);

		$program 				= $this->program_model->program($limit,$start);
		//End Pagination

		$data = array(	'title'		=>	'Program - '.$konfigurasi->namaweb,
						'deskripsi'	=>	'Program - '.$konfigurasi->deskripsi,
						'keywords'	=>	'Program - '.$konfigurasi->keywords,
						'paginasi'	=> $this->pagination->create_links(),
						'program'	=> $program,
						'limit'		=> $limit,
						'link' => $link,
						'apl' => $apl,
						'conf' => $konfigurasi,
						'total'		=> $config['total_rows'],
						'isi'		=>	'program/list'
				);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	//Detail Program
	public function read($slug_program)
	{
		$konfigurasi  	= $this->konfigurasi_model->listing();
		$link = $this->konfigurasi_model->viewLink();
		$apl = $this->konfigurasi_model->viewAplikasiMadrasah();
		$program 		= $this->program_model->read($slug_program);

		$data = array(	'title'		=> $program->judul_program,
						'deskripsi'	=> $program->judul_program.', '.$program->keywords,
						'keywords'	=> $program->judul_program.', '.$program->keywords,
						'program'	=> $program,
						'link' => $link,
						'apl' => $apl,
						'conf' => $konfigurasi,
						'isi'		=> 'program/read'
				);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Program.php */
/* Location: ./application/controllers/Program.php */
