<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	//Load Model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
		$this->load->model('kategori_model');
	}

	//MainPage Berita
	public function index()
	{
		$konfigurasi = $this->konfigurasi_model->listing();
		//Listing Berita dengan Pagination
		$this->load->library('pagination');

		$config['base_url'] 	= base_url('berita/halaman/');
		$config['total_rows'] 	= count($this->berita_model->total());
		$config['per_page'] 	= 3;
		$config['uri_segment']	= 3;
		
		//Limit dan Start
		$limit					= $config['per_page'];
		$start					= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
		//End Limit dan Start
		$config['next_link'] = '&raquo;';
		$config['prev_link'] = '&laquo;';
		$config['cur_tag_open'] = '<a class="active">';
		$this->pagination->initialize($config);

		$berita 				= $this->berita_model->berita($limit,$start);
		//End Pagination

		// tambahan zen untuk menampilkan list berita samping + kategori
		$listing = $this->berita_model->home();
		$ambilKategori = $this->kategori_model->listing();

		// keperluan Footer
		// $link = $this->konfigurasi_model->viewLink();
		// $apl = $this->konfigurasi_model->viewAplikasiMadrasah();


		$data = array(	
						// 'title'		=>	'Berita - '.$konfigurasi->namaweb,
						// 'deskripsi'	=>	'Berita - '.$konfigurasi->deskripsi,
						// 'keywords'	=>	'Berita - '.$konfigurasi->keywords,
						'paginasi'	=> $this->pagination->create_links(),
						'berita'	=> $berita,
						'listing' => $listing,
						'kategori' => $ambilKategori,
						'limit'		=> $limit,
						// 'link' => $link,
						// 'apl' => $apl,
						'konfigurasi' => $konfigurasi,
						'total'		=> $config['total_rows'],
						'isi'		=>	'berita/list'
				);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	//Kategori Berita
	public function kategori($slug_kategori)
	{
		$kategori 	 = $this->kategori_model->read($slug_kategori);
		$id_kategori = $kategori->id_kategori;
		$konfigurasi = $this->konfigurasi_model->listing();
		$listing = $this->berita_model->home();
		$ambilKategori = $this->kategori_model->listing();
		//Listing Berita dengan Pagination
		$this->load->library('pagination');

		$config['base_url'] 	= base_url('berita/kategori/'.$slug_kategori.'/halaman/');
		$config['total_rows'] 	= count($this->berita_model->total_kategori($id_kategori));
		$config['per_page'] 	= 3;
		$config['uri_segment']	= 5;
		//Limit dan Start
		$limit					= $config['per_page'];
		$start					= ($this->uri->segment(5)) ? ($this->uri->segment(5)) : 0;
		//End Limit dan Start
		$config['next_link'] = '&raquo;';
		$config['prev_link'] = '&laquo;';
		$config['cur_tag_open'] = '<a class="active">';
		$this->pagination->initialize($config);
		//End Pagination
		$berita 				= $this->berita_model->berita_kategori($id_kategori,$limit,$start);
		if($berita == "" || $berita == null){
			$this->session->set_flashdata('kosong', 'Kategori Berita Kosong!');
			redirect(base_url('berita'), 'refresh');
		}else{
			$data = array(	
				// 'title'		=>	'Kategori Berita - '.$kategori->nama_kategori,
				// 'deskripsi'	=>	'Kategori Berita - '.$kategori->nama_kategori,
				// 'keywords'	=>	'Kategori Berita - '.$kategori->nama_kategori,
				'paginasi'	=> $this->pagination->create_links(),
				'berita'	=> $berita,
				'limit'		=> $limit,
				'total'		=> $config['total_rows'],
				'isi'		=>	'berita/list',
				'konfigurasi' => $konfigurasi,
				'kategori' => $ambilKategori,
				'listing' => $listing,
			);
			$this->load->view('layout/wrapper', $data, FALSE);
		}
		
	}


	//Detail Berita
	public function detail($slug_berita)
	{
		$berita = $this->berita_model->read($slug_berita);
		$listing = $this->berita_model->home();
		$konfigurasi = $this->konfigurasi_model->listing();
		$link = $this->konfigurasi_model->viewLink();
		$apl = $this->konfigurasi_model->viewAplikasiMadrasah();

		//tambahan
		$kategori = $this->kategori_model->listing();

		$data = array(	
						// 'title'		=>	$berita->judul_berita,
						// 'deskripsi'	=>	$berita->judul_berita,
						'berita'	=>	$berita,
						'kategori' => $kategori,
						'listing'	=>	$listing,
						'konfigurasi' => $konfigurasi,
						'isi'		=>	'berita/read'
				);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	//View Berita Berdasarkan Tag
	public function tag($slug_kategori)
	{
		$konfigurasi = $this->konfigurasi_model->listing();
		$link = $this->konfigurasi_model->viewLink();
		$apl = $this->konfigurasi_model->viewAplikasiMadrasah();
		//Listing Berita dengan Pagination
		$this->load->library('pagination');

		$config['base_url'] 	= base_url("index.php/berita/tag/$slug_kategori/");
		$config['total_rows'] 	= count($this->berita_model->total_tag($slug_kategori));
		$config['per_page'] 	= 3;
		$config['uri_segment']	= 4;
		//Limit dan Start
		$limit					= $config['per_page'];
		$start					= ($this->uri->segment(4)) ? ($this->uri->segment(4)) : 0;
		//End Limit dan Start
		$this->pagination->initialize($config);

		$berita 				= $this->berita_model->tag($limit,$start,$slug_kategori);
		// tambahan zen untuk menampilkan list berita samping + kategori
		$listing = $this->berita_model->home();
		$ambilKategori = $this->kategori_model->listing();
		//End Pagination

		$data = array(	'title'		=>	'Berita - '.$konfigurasi->namaweb,
						'deskripsi'	=>	'Berita - '.$konfigurasi->deskripsi,
						'keywords'	=>	'Berita - '.$konfigurasi->keywords,
						'paginasi'	=> $this->pagination->create_links(),
						'berita'	=> $berita,
						'listing' => $listing,
						'kategori' => $ambilKategori,
						'limit'		=> $limit,
						'total'		=> $config['total_rows'],
						'link' => $link,
						'apl' => $apl,
						'conf' => $konfigurasi,
						'isi'		=>	'berita/tag'
				);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */