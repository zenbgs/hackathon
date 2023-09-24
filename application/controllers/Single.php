<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Single extends CI_Controller
{

  //Load Model
  public function __construct()
  {
    parent::__construct();
    // $this->load->model('berita_model');
    // $this->load->model('galeri_model');
    // $this->load->model('program_model');
    // $this->load->model('user_model');
    $this->load->model('konfigurasi_model');
    $this->load->model('single_model');
  }

  public function index()
  {
    if($this->uri->segment(2) == ""){
        redirect(base_url('/'), 'refresh');
    }
    $slug = $this->uri->segment(2);
    // $berita 	= $this->berita_model->listing();
    // $galeri 	= $this->galeri_model->listing();
    // $user 		= $this->user_model->listing();
    // $program 	= $this->program_model->listing();
    $konfigurasi = $this->konfigurasi_model->listing();
    $tampilSingle = $this->single_model->singlepage($slug);

    $data = array(
      'dataSingle'		=> $tampilSingle,
      'isi'    => 'single_page/list',
      'activator' => $tampilSingle->slug_master,
      'sub_activator' => $tampilSingle->nama_slug,
      'konfigurasi' => $konfigurasi
    );
    $this->load->view('layout/wrapper', $data, FALSE);
  }
}

/* End of file Single.php */
/* Location: ./application/controllers/Single.php */