<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {

	//Load data konfigurasi
	public function __construct()
	{
		parent::__construct();
		//Proteksi
		if($this->session->userdata('akses_level') != "Admin"){
			$this->session->set_flashdata('sukses', 'Hak Akses anda tidak mencukupi');
			redirect('admin/dasbor','refresh');
		}
		//End Proteksi
		$this->load->model('konfigurasi_model');
	}

	//Konfigurasi Umum
	public function index()
	{
		
		$konfigurasi = $this->konfigurasi_model->listing();

		//validasi
		$this->form_validation->set_rules('alamat', 'Alamat', 'required',
				array(	'required'	=>	'%s Harus Diisi'));

		if($this->form_validation->run() === FALSE) {
		//End Validasi

		$data = array(	
						// 'title'			=>	'Konfigurasi Website',
						'konfigurasi'	=>	$konfigurasi,
						'breadcrumb' => 'Konfigurasi',
						'sub_breadcrumb' => 'Konfigurasi',
						'isi'			=>	'admin/konfigurasi/list',
						'activator' => 'konfigurasi',
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//Masuk Database
		}else {
			$i = $this->input;
			if (!empty($_FILES['logo']['name'])) {
			$config['upload_path']          = './assets/upload/image/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 5000;
	        $config['max_width']            = 5000;
	        $config['max_height']           = 5000;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('logo')) {
				$data = array(	
					// 'title'			=>	'Konfigurasi Website',
					'konfigurasi'	=>	$konfigurasi,
					'breadcrumb' => 'Konfigurasi',
					'sub_breadcrumb' => 'Konfigurasi',
					'isi'			=>	'admin/konfigurasi/list',
					'activator' => 'konfigurasi',
					'error_upload' => $this->upload->display_errors()
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
			}else{
			$upload_data	= array('uploads'	=> $this->upload->data());

			$config['image_library']  	= 'gd2';
			$config['source_image']   	= './assets/upload/image/'.$upload_data['uploads']['file_name'];
			//Gambar versi kecil dipindahkan
			$config['new_image']		= './assets/upload/image/thumbs/'.$upload_data['uploads']['file_name'];
			$config['create_thumb']   	= TRUE;
			$config['maintain_ratio'] 	= TRUE;
			$config['width']          	= 200;
			$config['height']         	= 200;
			$config['thumb_marker']		= '';

			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

			

			$data = array(	'id_konfigurasi'=>	$konfigurasi->id_konfigurasi,
							'email'			=>	$i->post('email'),
							'telepon'		=>	$i->post('telepon'),
							'alamat'		=>	$i->post('alamat'),	
							'sejarah'		=>	$i->post('sejarah'),
							'facebook'		=>	$i->post('facebook'),
							'instagram'		=>	$i->post('instagram'),
							'twitter' => $i->post('twitter'),
							'logo'			=>	$upload_data['uploads']['file_name']
					);
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data Telah Diupdate');
			redirect(base_url('admin/konfigurasi'),'refresh');

			}
			}else{

			$data = array(	'id_konfigurasi'=>	$konfigurasi->id_konfigurasi,
							'email'			=>	$i->post('email'),
							'telepon'		=>	$i->post('telepon'),
							'alamat'		=>	$i->post('alamat'),	
							'sejarah'		=>	$i->post('sejarah'),
							'facebook'		=>	$i->post('facebook'),
							'instagram'		=>	$i->post('instagram'),
							'twitter' => $i->post('twitter'),
					);
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data Telah Diupdate');
			redirect(base_url('admin/konfigurasi'),'refresh');
			}
			
		}
		//End masuk database
	}


	//Konfigurasi sambutan
	public function sambutan(){
		$sambutan = $this->konfigurasi_model->viewSambutan();
		// print_r($sambutan);

		$data = array(	'title'		=>	'Data Sambutan',
						'sambutan'	=>	$sambutan,
						'isi'		=>	'admin/konfigurasi/sambutan'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//simpan sambutan
	public function simpan($id_sambutan)
	{
		$sambutan = $this->konfigurasi_model->viewSambutan();
		//valid
		$valid = $this->form_validation;


		$valid->set_rules('isi_sambutan','Isi Sambutan','required',
				array('required'	=>	'%s harus diisi'));

		if($valid->run()) {
			//Kalo ga ganti gambar
			if(!empty($_FILES['gambar']['name'])) {

			$config['upload_path']          = './assets/upload/image/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 5000;
	        $config['max_width']            = 5000;
	        $config['max_height']           = 5000;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('gambar')) {
		//End Validasi

		$data = array(	'title'			=>	'Data Sambutan ',
						'sambutan'		=>	$sambutan,
						'error_upload'	=>	 $this->upload->display_errors(),
						'isi'			=>	'admin/konfigurasi/sambutan'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//Masuk database
		}else{
			//Proses Manipulasi Gambar
			$upload_data	= array('uploads'	=> $this->upload->data());
			//Gambar asli disimpan di folder assets/upload/image
			//lalu gambar asli itu dicopy untuk versi mini size ke folder assets/upload/image/thumbs

			$config['image_library']  	= 'gd2';
			$config['source_image']   	= './assets/upload/image/'.$upload_data['uploads']['file_name'];
			//Gambar versi kecil dipindahkan
			$config['new_image']		= './assets/upload/image/thumbs/'.$upload_data['uploads']['file_name'];
			$config['create_thumb']   	= TRUE;
			$config['maintain_ratio'] 	= TRUE;
			$config['width']          	= 200;
			$config['height']         	= 200;
			$config['thumb_marker']		= '';

			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

			$i = $this->input;

			//Hapus gambar lama jika ada upload gambar baru
			if($sambutan->gambar != "")
			{
				unlink('./assets/upload/image/'.$sambutan->gambar);
				unlink('./assets/upload/image/thumbs/'.$sambutan->gambar);
			}
			//End Hapus gambar

			$data = array(	'id_sambutan'	=>	$id_sambutan,
							'isi_sambutan'	=>	$i->post('isi_sambutan'),
							'gambar'		=>	$upload_data['uploads']['file_name'],
						);
			$this->konfigurasi_model->simpan($data);
			$this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
			redirect(base_url('index.php/admin/konfigurasi/sambutan'),'refresh');
		}}else {
			//Update program tanpa gambar
			$i = $this->input;
			$data = array('id_sambutan'	=>	$id_sambutan,
							'isi_sambutan'	=>	$i->post('isi_sambutan'),
							//'gambar'		=>	$upload_data['uploads']['file_name'],
						);

			$this->konfigurasi_model->simpan($data);
			$this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
			redirect(base_url('index.php/admin/konfigurasi/sambutan'),'refresh');

		}}
		//End Masuk Database
		$data = array(	'title'			=>	'Data Sambutan ',
						'sambutan'		=>	$sambutan,
						'isi'			=>	'admin/konfigurasi/sambutan'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//Listing data link terkait
	public function link_terkait()
	{
		$link = $this->konfigurasi_model->viewLink();

		$data = array(	'title'	=>	'Data Footer Link Terkait ('.count($link).')',
						'link'	=>	$link,
						'isi'	=>	'admin/link_terkait/list'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//Tambah Link Terkait
	public function tambahLinkTerkait()
	{
		//valid
		$valid = $this->form_validation;

		$valid->set_rules('nama_link','Nama Link','required',
				array('required'	=>	'%s harus diisi'));

		$valid->set_rules('link','Link','required',
						array('required'	=>	'%s harus diisi'));

		if($valid->run() === FALSE) {
		//End Validasi

		$data = array(	'title'	=>	'Tambah Data Link Terkait',
						'isi'	=>	'admin/link_terkait/tambah'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//Masuk database
		}else{
			$i = $this->input;
			$data = array(	'nama_link'			=>	$i->post('nama_link'),
							'link'			=>	$i->post('link'),
						);
			$this->konfigurasi_model->tambahLinkTerkait($data);
			$this->session->set_flashdata('sukses', 'Data Telah Ditambah');
			redirect(base_url('index.php/admin/konfigurasi/link_terkait'),'refresh');
		}
		//End Masuk Database
	}

	//Edit Link Terkait
	public function editLinkTerkait($id_link)
	{
		$link = $this->konfigurasi_model->detailLinkTerkait($id_link);

		//valid
		$valid = $this->form_validation;

		$valid->set_rules('nama_link','Nama Link','required',
				array('required'	=>	'%s harus diisi'));

		$valid->set_rules('link','Link','required',
						array('required'	=>	'%s harus diisi'));

		if($valid->run() === FALSE) {
		//End Validasi

		$data = array(	'title'	=>	'Edit Link Terkait: '.$link->nama_link,
						'link'	=>	$link,
						'isi'	=>	'admin/link_terkait/edit'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//Masuk database
		}else{
			$i = $this->input;
			$data = array(	'id_link'		=> $id_link,
							'nama_link'			=>	$i->post('nama_link'),
							'link'			=>	$i->post('link'),
						);
			$this->konfigurasi_model->editLinkTerkait($data);
			$this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
			redirect(base_url('index.php/admin/konfigurasi/link_terkait'),'refresh');
		}
		//End Masuk Database
	}

	//Delete Link Terkait
	public function deleteLinkTerkait($id_link)
	{
		//Proteksi delete
		$this->check_login->check();

		$link = $this->konfigurasi_model->detailLinkTerkait($id_link);

		$data = array(	'id_link'	=>	$link->id_link);
		$this->konfigurasi_model->deleteLinkTerkait($data);
		$this->session->set_flashdata('sukses', 'Data Telah dihapus');
		redirect(base_url('index.php/admin/konfigurasi/link_terkait'),'refresh');
	}

	//Listing data aplikasi madrasah
	public function aplikasi_madrasah()
	{
		$apl = $this->konfigurasi_model->viewAplikasiMadrasah();

		$data = array(	'title'	=>	'Data Footer Aplikasi Madrasah ('.count($apl).')',
						'apl'	=>	$apl,
						'isi'	=>	'admin/aplikasi_madrasah/list'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//Tambah Aplikasi Madrasah
	public function tambahAplikasiMadrasah()
	{
		//valid
		$valid = $this->form_validation;

		$valid->set_rules('nama_aplikasi','Nama Aplikasi','required',
				array('required'	=>	'%s harus diisi'));

		$valid->set_rules('link_aplikasi','Link Aplikasi','required',
						array('required'	=>	'%s harus diisi'));

		if($valid->run() === FALSE) {
		//End Validasi

		$data = array(	'title'	=>	'Tambah Data Aplikasi Madrasah',
						'isi'	=>	'admin/aplikasi_madrasah/tambah'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//Masuk database
		}else{
			$i = $this->input;
			$data = array(	'nama_aplikasi'			=>	$i->post('nama_aplikasi'),
							'link_aplikasi'			=>	$i->post('link_aplikasi'),
						);
			$this->konfigurasi_model->tambahAplikasiMadrasah($data);
			$this->session->set_flashdata('sukses', 'Data Telah Ditambah');
			redirect(base_url('index.php/admin/konfigurasi/aplikasi_madrasah'),'refresh');
		}
		//End Masuk Database
	}

	//Edit Aplikasi Madrasah
	public function editAplikasiMadrasah($id_aplikasi)
	{
		$apl = $this->konfigurasi_model->detailAplikasiMadrasah($id_aplikasi);

		//valid
		$valid = $this->form_validation;

		$valid->set_rules('nama_aplikasi','Nama Aplikasi','required',
				array('required'	=>	'%s harus diisi'));

		$valid->set_rules('link_aplikasi','Link Aplikasi','required',
						array('required'	=>	'%s harus diisi'));

		if($valid->run() === FALSE) {
		//End Validasi

		$data = array(	'title'	=>	'Edit Aplikasi Madrasah: '.$apl->nama_aplikasi,
						'apl'	=>	$apl,
						'isi'	=>	'admin/aplikasi_madrasah/edit'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//Masuk database
		}else{
			$i = $this->input;
			$data = array(	'id_aplikasi'		=> $id_aplikasi,
							'nama_aplikasi'			=>	$i->post('nama_aplikasi'),
							'link_aplikasi'			=>	$i->post('link_aplikasi'),
						);
			$this->konfigurasi_model->editAplikasiMadrasah($data);
			$this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
			redirect(base_url('index.php/admin/konfigurasi/aplikasi_madrasah'),'refresh');
		}
		//End Masuk Database
	}

	//Delete Aplikasi Madrasah
	public function deleteAplikasiMadrasah($id_aplikasi)
	{
		//Proteksi delete
		$this->check_login->check();

		$apl = $this->konfigurasi_model->detailAplikasiMadrasah($id_aplikasi);

		$data = array(	'id_aplikasi'	=>	$apl->id_aplikasi);
		$this->konfigurasi_model->deleteAplikasiMadrasah($data);
		$this->session->set_flashdata('sukses', 'Data Telah dihapus');
		redirect(base_url('index.php/admin/konfigurasi/aplikasi_madrasah'),'refresh');
	}

}

/* End of file Konfigurasi.php */
/* Location: ./application/controllers/admin/Konfigurasi.php */