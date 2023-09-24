<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {

	//load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('program_model');
	}

	//Listing data Program Unggulan
	public function index()
	{
		$program = $this->program_model->listing();

		$data = array(	'title'		=>	'Data Program ('.count($program).')',
						'program'	=>	$program,
						'isi'		=>	'admin/program/list'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//Tambah
	public function tambah()
	{

		//valid
		$valid = $this->form_validation;

		$valid->set_rules('judul_program','Judul Program','required',
				array('required'	=>	'%s harus diisi'));

		$valid->set_rules('isi_program','Isi Program','required',
				array('required'	=>	'%s harus diisi'));

		if($valid->run()) {
			$config['upload_path']          = './assets/upload/image/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 5000;
	        $config['max_width']            = 5000;
	        $config['max_height']           = 5000;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('gambar')) {
		//End Validasi

		$data = array(	'title'			=>	'Tambah data program',
						'error_upload'	=>	 $this->upload->display_errors(),
						'isi'			=>	'admin/program/tambah'
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
			$data = array(	'id_user'		=>	$this->session->userdata('id_user'),
							'slug_program'	=>	url_title($this->input->post('judul_program'), 'dash', TRUE),
							'judul_program'	=>	$i->post('judul_program'),
							'isi_program'	=>	$i->post('isi_program'),
							'gambar'		=>	$upload_data['uploads']['file_name'],
							'status_program'=>	$i->post('status_program'),
							'keywords'		=>	$i->post('keywords'),
							'tanggal_post'	=>	date('Y-m-d H:i:s')
						);
			$this->program_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data Telah Ditambah');
			redirect(base_url('index.php/admin/program'),'refresh');
		}}
		//End Masuk Database
		$data = array(	'title'			=>	'Tambah data program',
						'isi'			=>	'admin/program/tambah'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//Edit
	public function edit($id_program)
	{
		$program = $this->program_model->detail($id_program);

		//valid
		$valid = $this->form_validation;

		$valid->set_rules('judul_program','Judul Program','required',
				array('required'	=>	'%s harus diisi'));

		$valid->set_rules('isi_program','Isi Program','required',
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

		$data = array(	'title'			=>	'Edit data program '.$program->judul_program,
						'program'		=>	$program,
						'error_upload'	=>	 $this->upload->display_errors(),
						'isi'			=>	'admin/program/edit'
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
			if($program->gambar != "")
			{
				unlink('./assets/upload/image/'.$program->gambar);
				unlink('./assets/upload/image/thumbs/'.$program->gambar);
			}
			//End Hapus gambar

			$data = array(	'id_program'	=>	$id_program,
							'id_user'		=>	$this->session->userdata('id_user'),
							'slug_program'	=>	url_title($this->input->post('judul_program'), 'dash', TRUE),
							'judul_program'	=>	$i->post('judul_program'),
							'isi_program'	=>	$i->post('isi_program'),
							'gambar'		=>	$upload_data['uploads']['file_name'],
							'status_program'=>	$i->post('status_program'),
							'keywords'		=>	$i->post('keywords'),			
						);
			$this->program_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
			redirect(base_url('index.php/admin/program'),'refresh');
		}}else {
			//Update program tanpa gambar
			$i = $this->input;
			$data = array(	'id_program'	=>	$id_program,
							'id_user'		=>	$this->session->userdata('id_user'),
							'slug_program'	=>	url_title($this->input->post('judul_program'), 'dash', TRUE),
							'judul_program'	=>	$i->post('judul_program'),
							'isi_program'	=>	$i->post('isi_program'),
							//'gambar'		=>	$upload_data['uploads']['file_name'],
							'status_program'=>	$i->post('status_program'),
							'keywords'		=>	$i->post('keywords'),			
						);
			$this->program_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
			redirect(base_url('index.php/admin/program'),'refresh');

		}}
		//End Masuk Database
		$data = array(	'title'			=>	'Edit data program '.$program->judul_program,
						'program'		=>	$program,
						'isi'			=>	'admin/program/edit'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//Delete
	public function delete($id_program)
	{
		//Proteksi delete
		$this->check_login->check();
		
		$program = $this->program_model->detail($id_program);

		//Hapus Gambar
		if($program->gambar != "") {
			unlink('./assets/upload/image/'.$program->gambar);
			unlink('./assets/upload/image/thumbs/'.$program->gambar);
		}
		//End Hapus Gambar

		$data = array(	'id_program'	=>	$program->id_program);
		$this->program_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Telah dihapus');
		redirect(base_url('index.php/admin/program'),'refresh');
	}

}

/* End of file Program.php */
/* Location: ./application/controllers/admin/Program.php */