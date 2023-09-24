<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profilman extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('profilman_model');
	}

	//view sejarah
	public function index()
	{
    $sejarah = $this->profilman_model->listing();

    $data = array(	'title'		=>	'Data Sejarah',
            'sejarah'	=>	$sejarah,
            'isi'		=>	'admin/profilman/sejarah'
        );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//view visimisi
	public function visimisi()
	{
		$vm = $this->profilman_model->viewVisiMisi();

		$data = array('title'		=>	'Data Visi & Misi',
						'vm'	=>	$vm,
						'isi'		=>	'admin/profilman/visimisi'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//simpan 
	public function simpan($id_profil)
	{
		$sejarah = $this->profilman_model->listing();
		$i = $this->input;
		//valid
		$valid = $this->form_validation;

		if($i->post('sejarah') != ""){
			$valid->set_rules('sejarah','Sejarah','required',
					array('required'	=>	'%s harus diisi'));
		}else if($i->post('visi') != ""){
			$valid->set_rules('visi','Visi Man 1 Kota Malang','required',
					array('required'	=>	'%s harus diisi'));

			$valid->set_rules('misi','Misi Man 1 Kota Malang','required',
					array('required'	=>	'%s harus diisi'));
		}else if($i->post('ekstra') != ""){
			$valid->set_rules('ekstra','Ekstrakurikuler','required',
					array('required'	=>	'%s harus diisi'));
		}else{
			$valid->set_rules('jdwpel','Jadwal Pelajaran','required',
					array('required'	=>	'%s harus diisi'));
		}
		if($valid->run()) {

			if($i->post('sejarah') != ""){
				$data = array('id_profil'	=>	$id_profil,
								'sejarah'	=>	$i->post('sejarah'),
							);
			}else if($i->post('visi') != ""){
				$data = array('id_profil'	=>	$id_profil,
								'visi' => $i->post('visi'),
								'misi' => $i->post('misi'),
							);
			}else if($i->post('ekstra') != ""){
				$data = array('id_profil'	=>	$id_profil,
								'ekstrakurikuler' => $i->post('ekstra'),
							);
			}else{
				$data = array('id_profil'	=>	$id_profil,
								'jdwpel' => $i->post('jdwpel'),
							);
			}
			$this->profilman_model->simpan($data);
			$this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
			if($i->post('sejarah') != ""){
				redirect(base_url('index.php/admin/profilman'),'refresh');
			}else if($i->post('visi') != ""){
				redirect(base_url('index.php/admin/profilman/visimisi'),'refresh');
			}else if($i->post('ekstra') != ""){
				redirect(base_url('index.php/admin/profilman/ekstrakurikuler'),'refresh');
			}else{
				redirect(base_url('index.php/admin/profilman/jdwpel'),'refresh');
			}


		}
		//End Masuk Database
		$data = array(	'title'			=>	'Data Sambutan ',
						'sejarah'		=>	$sejarah,
						'isi'			=>	'admin/profilman/sejarah'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
	
	//Struktur Organisasi
	public function struktur()
	{
		$profil = $this->profilman_model->listing();

		//validasi
		$this->form_validation->set_rules('id_profil', 'Struktur Organisasi', 'required',
				array(	'required'	=>	'%s Harus Diisi'));

		if($this->form_validation->run()) {
			$config['upload_path']          = './assets/upload/image/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 5000;
	        $config['max_width']            = 5000;
	        $config['max_height']           = 5000;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('struktur')) {
		//End Validasi

		$data = array(	'title'			=>	'Struktur Organisasi',
						'struktur'	=>	$profil,
						'error_upload'	=>	$this->upload->display_errors(),
						'isi'			=>	'admin/profilman/struktur'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//Masuk Database
		}else {
			$upload_data	= array('uploads'	=> $this->upload->data());

			$i = $this->input;
			$data = array(	'id_profil'=>	$profil->id_profil,
							'struktur_organisasi'			=>	$upload_data['uploads']['file_name']
					);
			$this->profilman_model->simpan($data);
			$this->session->set_flashdata('sukses', 'Struktur Organisasi Telah diUpdate');
			redirect(base_url('index.php/admin/profilman/struktur'),'refresh');
		}}
		//End masuk database
		$data = array(	'title'			=>	'Struktur Organisasi',
						'struktur'	=>	$profil,
						'isi'			=>	'admin/profilman/struktur'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function ekstrakurikuler()
	{
	$ekstra = $this->profilman_model->listing();

    $data = array(	'title'		=>	'Data Ekstrakurikuler',
            'ekstra'	=>	$ekstra,
            'isi'		=>	'admin/profilman/ekstrakurikuler'
        );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function jdwpel()
	{
	$jdwpel = $this->profilman_model->listing();

    $data = array(	'title'		=>	'Jadwal Pelajaran',
            'jdwpel'	=>	$jdwpel,
            'isi'		=>	'admin/profilman/jdwpel'
        );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function galeri()
	{
	$galeri = $this->profilman_model->total_galeri();

    $data = array(	'title'		=>	'Galeri',
            'galeri'	=>	$galeri,
            'isi'		=>	'admin/profilman/galeri'
        );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function galeri_simpan()
	{
		//validasi
			$config['upload_path']          = './assets/upload/galeri/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 5000;
	        $config['max_width']            = 5000;
	        $config['max_height']           = 5000;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('galeri')) {
		//End Validasi
		$this->session->set_flashdata('gagal', 'Upload Galeri Gagal!');
		redirect(base_url('index.php/admin/profilman/galeri'), 'refresh');
		//Masuk Database
		}else {
			$upload_data	= array('uploads'	=> $this->upload->data());

			$i = $this->input;
			$data = array(	'gambar_galeri'=>	$upload_data['uploads']['file_name'],
							'caption_galeri'			=>	$i->post('caption'),
							'tanggal' =>  date('Y-m-d H:i:s')
					);
			$this->profilman_model->galeri_simpan($data);
			$this->session->set_flashdata('sukses', 'Galeri Berhasil Ditambah!');
			redirect(base_url('index.php/admin/profilman/galeri'),'refresh');
		}
		//End masuk database
	}

	public function galeri_edit($id_galeri)
	{
		$i = $this->input;
		//validasi
			$config['upload_path']          = './assets/upload/galeri/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 5000;
	        $config['max_width']            = 5000;
	        $config['max_height']           = 5000;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('galeri_edit')) {
		//End Validasi
		
		$data = array(	'id_galeri' => $id_galeri,
						'caption_galeri'			=>	$i->post('caption_edit'),
						'tanggal' =>  date('Y-m-d H:i:s')
				);
		$this->profilman_model->galeri_update($data);
		$this->session->set_flashdata('sukses', 'Galeri Berhasil Diupdate!');
		redirect(base_url('index.php/admin/profilman/galeri'),'refresh');
		//Masuk Database
		}else {
			$upload_data	= array('uploads'	=> $this->upload->data());
			$data = array(	'id_galeri' => $id_galeri,
							'gambar_galeri'=>	$upload_data['uploads']['file_name'],
							'caption_galeri'			=>	$i->post('caption_edit'),
							'tanggal' =>  date('Y-m-d H:i:s')
					);
			$this->profilman_model->galeri_update($data);
			$this->session->set_flashdata('sukses', 'Galeri Berhasil Diupdate!');
			redirect(base_url('index.php/admin/profilman/galeri'),'refresh');
		}
		//End masuk database
	}

	public function galeri_delete($id_galeri)
	{
		$this->check_login->check();
		
		$galeri = $this->profilman_model->galeri_detail($id_galeri);

		//Hapus Gambar
		if($galeri->gambar_galeri != "") {
			unlink('./assets/upload/galeri/'.$galeri->gambar_galeri);
		}
		//End Hapus Gambar

		$data = array(	'id_galeri'	=>	$id_galeri);
		$this->profilman_model->galeri_delete($data);
		$this->session->set_flashdata('sukses', 'Data Telah dihapus');
		redirect(base_url('index.php/admin/profilman/galeri'),'refresh');
	}

}

/* End of file ProfilMan.php */
/* Location: ./application/controllers/admin/ProfilMan.php */