<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	//Load Model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
	}

	//MainPage
	public function index()
	{
		$konfigurasi = $this->konfigurasi_model->listing();
		$link = $this->konfigurasi_model->viewLink();
		$apl = $this->konfigurasi_model->viewAplikasiMadrasah();


		$data = array(	'title'			=> 'Kontak - '.$konfigurasi->namaweb. ' - '.$konfigurasi->tagline,
						'deskripsi'		=> 'Kontak - '.$konfigurasi->namaweb. ' - '.$konfigurasi->tagline,
						'keywords'		=> 'Kontak - '.$konfigurasi->namaweb. ' - '.$konfigurasi->tagline,
						'konfigurasi'	=> $konfigurasi,
						'link' => $link,
						'apl' => $apl,
						'conf' => $konfigurasi,
					  'isi'			=> 'kontak/list'
					);

		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */
