<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profilman extends CI_Controller {

  //load model
  public function __construct()
  {
    parent::__construct();
    $this->load->model('profilman_model');
    $this->load->model('konfigurasi_model');
  }

	//MainPage
	public function index()
	{
    $sejarah = $this->profilman_model->listing();
    $konfigurasi = $this->konfigurasi_model->listing();
    $link = $this->konfigurasi_model->viewLink();
    $apl = $this->konfigurasi_model->viewAplikasiMadrasah();

    $data = array(	'title'		=>	'Sejarah Man 1 Kota Malang',
            'sejarah'	=>	$sejarah,
            'link' => $link,
            'apl' => $apl,
            'conf' => $konfigurasi,
            'isi'		=>	'profil/sejarah'
        );
    $this->load->view('layout/wrapper', $data, FALSE);
  }

  public function visimisi()
  {
    $vm = $this->profilman_model->listing();
    $konfigurasi = $this->konfigurasi_model->listing();
    $link = $this->konfigurasi_model->viewLink();
    $apl = $this->konfigurasi_model->viewAplikasiMadrasah();

    $data = array(	'title'		=>	'Visi & Misi Man 1 Kota Malang',
            'vm'	=>	$vm,
            'link' => $link,
            'apl' => $apl,
            'conf' => $konfigurasi,
            'isi'		=>	'profil/visimisi'
        );
    $this->load->view('layout/wrapper', $data, FALSE);
  }
  
    public function struktur()
  {
    $vm = $this->profilman_model->listing();
    $konfigurasi = $this->konfigurasi_model->listing();
    $link = $this->konfigurasi_model->viewLink();
    $apl = $this->konfigurasi_model->viewAplikasiMadrasah();

    $data = array(	'title'		=>	'Struktur Organisasi Man 1 Kota Malang',
            'vm'	=>	$vm,
            'link' => $link,
            'apl' => $apl,
            'conf' => $konfigurasi,
            'isi'		=>	'profil/struktur'
        );
    $this->load->view('layout/wrapper', $data, FALSE);
  }

  public function galeri()
  {
    // $galeri = $this->profilman_model->listing_galeri();
    $konfigurasi = $this->konfigurasi_model->listing();
    $link = $this->konfigurasi_model->viewLink();
    $apl = $this->konfigurasi_model->viewAplikasiMadrasah();
    
    $this->load->library('pagination');
    $config['base_url'] 	= base_url('index.php/profilman/galeri/index/');
		$config['total_rows'] 	= count($this->profilman_model->total_galeri());
		$config['per_page'] 	= 8;
		$config['uri_segment']	= 4;

    //Limit dan Start
		$limit					= $config['per_page'];
		$start					= ($this->uri->segment(4)) ? ($this->uri->segment(4)) : 0;
		//End Limit dan Start
		$this->pagination->initialize($config);

		$galeri 				= $this->profilman_model->listing_galeri($limit,$start);

    $data = array(	'title'		=>	'Galeri Man 1 Kota Malang',
            'galeri'	=>	$galeri,
            'link' => $link,
            'apl' => $apl,
            'conf' => $konfigurasi,
            'paginasi'	=> $this->pagination->create_links(),
            'limit'		=> $limit,
            'total'		=> $config['total_rows'],
        );
    $this->load->view('profil/galeri', $data, FALSE);
  }

  public function ekstrakurikuler()
  {
    $ekstra = $this->profilman_model->listing();
    $konfigurasi = $this->konfigurasi_model->listing();
    $link = $this->konfigurasi_model->viewLink();
    $apl = $this->konfigurasi_model->viewAplikasiMadrasah();

    $data = array(	'title'		=>	'Ekstrakurikuler Man 1 Kota Malang',
            'ekstra'	=>	$ekstra,
            'link' => $link,
            'apl' => $apl,
            'conf' => $konfigurasi,
            'isi'		=>	'profil/ekstrakurikuler'
        );
    $this->load->view('layout/wrapper', $data, FALSE);
  }

  public function jdwpel()
  {
    $jdwpel = $this->profilman_model->listing();
    $konfigurasi = $this->konfigurasi_model->listing();
    $link = $this->konfigurasi_model->viewLink();
    $apl = $this->konfigurasi_model->viewAplikasiMadrasah();

    $data = array(	'title'		=>	'Jadwal Pelajaran Man 1 Kota Malang',
            'jdwpel'	=>	$jdwpel,
            'link' => $link,
            'apl' => $apl,
            'conf' => $konfigurasi,
            'isi'		=>	'profil/jdwpel'
        );
    $this->load->view('layout/wrapper', $data, FALSE);
  }
}

/* End of file Profilman.php */
/* Location: ./application/controllers/Profilman.php */