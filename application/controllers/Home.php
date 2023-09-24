<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	//load Model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
		$this->load->model('konfigurasi_model');
		$this->load->model('galeri_model');
		$this->load->model('single_model');
	}

	//MainPage
	public function index()
	{
		$konfigurasi = $this->konfigurasi_model->listing();
		$profil = $this->single_model->profilhome();
		$galeri		 = $this->galeri_model->slider();
		$ppdb 	 = $this->single_model->ppdbhome();
		$pin = $this->berita_model->berita_pin();
		$pojoksantri = $this->berita_model->pojok_santri();
		// $berita 	 = $this->berita_model->home();
		// $a 	 = $this->berita_model->home();
		$unit = $this->single_model->unithome();
		// $link = $this->konfigurasi_model->viewLink();
		// $apl = $this->konfigurasi_model->viewAplikasiMadrasah();

		$data = array(	
						// 'title'		=> $konfigurasi->namaweb.' - '.$konfigurasi->tagline,
						// 'keywords'	=> $konfigurasi->namaweb.' - '.$konfigurasi->tagline.', '.$konfigurasi->keywords,
						// 'deskripsi'	=> $konfigurasi->deskripsi,
						'galeri'	=> $galeri,
						// 'sambutan' => $sambutan,
						// 'program'	=> $program,
						// 'berita'	=> $berita,
						'pojoksantri' => $pojoksantri,
						'pin' => $pin,
						'unit' => $unit,
						'ppdb' => $ppdb,
						'konfigurasi' => $konfigurasi,
						'profil' => $profil,
					  'isi'		=> 'home/list'
					);

		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */