<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik extends CI_Controller {

	//load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('galeri_model');
	}

	//Listing data galeri
	public function index()
	{
		$galeri = $this->galeri_model->listing();

		$data = array(	
			// 'title'		=>	'Data Galeri ('.count($galeri).')',
						'galeri'	=>	$galeri,
						'isi'		=>	'admin/statistik/list',
						'breadcrumb' => 'Statistik',
						'sub_breadcrumb' => 'Statistik',
						'activator' => 'statistik'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//Tambah
	public function tambah()
	{
		
			$config['upload_path']          = './assets/upload/image/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        // $config['max_size']             = 5000;
	        // $config['max_width']            = 5000;
	        // $config['max_height']           = 5000;

	        $this->load->library('upload', $config);
			$this->upload->do_upload('gambar');
		
			//Proses Manipulasi Gambar
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

			$i = $this->input;
			$data = array(	
							'judul_galeri'	=>	$i->post('judul'),
							'gambar'		=>	$upload_data['uploads']['file_name'],
							'tanggal_post'	=>	date('Y-m-d H:i:s')
						);
			$this->galeri_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data Telah Ditambah');
			redirect(base_url('admin/galeri'),'refresh');
		
	}

	//Edit
	public function edit()
	{

		$i = $this->input;
		$id_galeri = $i->post('id');

		$galeri = $this->galeri_model->detail($id_galeri);

			if(!empty($_FILES['gambar']['name'])) {

			$config['upload_path']          = './assets/upload/image/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 5000;
	        $config['max_width']            = 5000;
	        $config['max_height']           = 5000;

	        $this->load->library('upload', $config);
			$this->upload->do_upload('gambar');
		
			//Proses Manipulasi Gambar
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


			if($galeri->gambar != "")
			{
				unlink('./assets/upload/image/'.$galeri->gambar);
				unlink('./assets/upload/image/thumbs/'.$galeri->gambar);
			}

			$data = array(	'id_galeri'		=>	$id_galeri,
							'judul_galeri'	=>	$i->post('judul'),
							'gambar'		=>	$upload_data['uploads']['file_name'],		
						);
			$this->galeri_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
			redirect(base_url('admin/galeri'),'refresh');
		}else {
			$data = array(	'id_galeri'		=>	$id_galeri,
							'judul_galeri'	=>	$i->post('judul'),			
						);
			$this->galeri_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
			redirect(base_url('admin/galeri'),'refresh');

		}
	}

	//Delete
	public function delete($id_galeri)
	{
		//Proteksi delete
		$this->check_login->check();
		
		$galeri = $this->galeri_model->detail($id_galeri);

		//Hapus Gambar
		if($galeri->gambar != "") {
			unlink('./assets/upload/image/'.$galeri->gambar);
			unlink('./assets/upload/image/thumbs/'.$galeri->gambar);
		}
		//End Hapus Gambar

		$data = array(	'id_galeri'	=>	$galeri->id_galeri);
		$this->galeri_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Telah dihapus');
		redirect(base_url('admin/galeri'),'refresh');
	}

}

/* End of file Galeri.php */
/* Location: ./application/controllers/admin/Galeri.php */