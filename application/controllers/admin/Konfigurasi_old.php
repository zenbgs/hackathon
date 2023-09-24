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
			redirect('index.php/admin/dasbor','refresh');
		}
		//End Proteksi
		$this->load->model('konfigurasi_model');
	}

	//Konfigurasi Umum
	public function index()
	{
		$konfigurasi = $this->konfigurasi_model->listing();

		//validasi
		$this->form_validation->set_rules('namaweb', 'Nama Perusahaan', 'required',
				array(	'required'	=>	'%s Harus Diisi'));

		if($this->form_validation->run() === FALSE) {
		//End Validasi

		$data = array(	'title'			=>	'Konfigurasi Website',
						'konfigurasi'	=>	$konfigurasi,
						'isi'			=>	'admin/konfigurasi/list'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//Masuk Database
		}else {
			$i = $this->input;

			$data = array(	'id_konfigurasi'=>	$konfigurasi->id_konfigurasi,
							'id_user'		=>	$this->session->userdata('id_user'),
							'namaweb'		=>	$i->post('namaweb'),
							'tagline'		=>	$i->post('tagline'),
							'email'			=>	$i->post('email'),
							'telepon'		=>	$i->post('telepon'),
							'alamat'		=>	$i->post('alamat'),
							'website'		=>	$i->post('website'),
							'deskripsi'		=>	$i->post('deskripsi'),
							'keywords'		=>	$i->post('keywords'),
							'metatext'		=>	$i->post('metatext'),
							'map'			=>	$i->post('map'),
							'facebook'		=>	$i->post('facebook'),
							'instagram'		=>	$i->post('instagram')
					);
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data Telah diUpdate');
			redirect(base_url('index.php/admin/konfigurasi'),'refresh');
		}
		//End masuk database
	}

	//Konfigurasi logo
	public function logo()
	{
		$konfigurasi = $this->konfigurasi_model->listing();

		//validasi
		$this->form_validation->set_rules('id_konfigurasi', 'Nama Perusahaan', 'required',
				array(	'required'	=>	'%s Harus Diisi'));

		if($this->form_validation->run()) {
			$config['upload_path']          = './assets/upload/image/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 5000;
	        $config['max_width']            = 5000;
	        $config['max_height']           = 5000;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('logo')) {
		//End Validasi

		$data = array(	'title'			=>	'Konfigurasi Website',
						'konfigurasi'	=>	$konfigurasi,
						'error_upload'	=>	$this->upload->display_errors(),
						'isi'			=>	'admin/konfigurasi/logo'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//Masuk Database
		}else {
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
			$data = array(	'id_konfigurasi'=>	$konfigurasi->id_konfigurasi,
							'id_user'		=>	$this->session->userdata('id_user'),
							'logo'			=>	$upload_data['uploads']['file_name']
					);
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses', 'Logo Telah diUpdate');
			redirect(base_url('index.php/admin/konfigurasi/logo'),'refresh');
		}}
		//End masuk database
		$data = array(	'title'			=>	'Konfigurasi Website',
						'konfigurasi'	=>	$konfigurasi,
						'isi'			=>	'admin/konfigurasi/logo'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//Konfigurasi Icon
	public function icon()
	{
		$konfigurasi = $this->konfigurasi_model->listing();

		//validasi
		$this->form_validation->set_rules('id_konfigurasi', 'Nama Perusahaan', 'required',
				array(	'required'	=>	'%s Harus Diisi'));

		if($this->form_validation->run()) {
			$config['upload_path']          = './assets/upload/image/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 5000;
	        $config['max_width']            = 5000;
	        $config['max_height']           = 5000;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('icon')) {
		//End Validasi

		$data = array(	'title'			=>	'Konfigurasi Website',
						'konfigurasi'	=>	$konfigurasi,
						'error_upload'	=>	$this->upload->display_errors(),
						'isi'			=>	'admin/konfigurasi/icon'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//Masuk Database
		}else {
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
			$data = array(	'id_konfigurasi'=>	$konfigurasi->id_konfigurasi,
							'id_user'		=>	$this->session->userdata('id_user'),
							'icon'			=>	$upload_data['uploads']['file_name']
					);
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses', 'Icon Telah diUpdate');
			redirect(base_url('index.php/admin/konfigurasi/icon'),'refresh');
		}}
		//End masuk database
		$data = array(	'title'			=>	'Konfigurasi Website',
						'konfigurasi'	=>	$konfigurasi,
						'isi'			=>	'admin/konfigurasi/icon'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
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

}

/* End of file Konfigurasi.php */
/* Location: ./application/controllers/admin/Konfigurasi.php */
