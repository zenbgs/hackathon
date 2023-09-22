<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	//Laod Model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('video_model');
	}

	//Main Page Video
	public function index()
	{
		$video = $this->video_model->listing();

		//validasi
		$this->form_validation->set_rules('link_video', 'Link Video', 'required',
				array(	'required'	=>	'%s Harus Diisi',));

		if($this->form_validation->run() === FALSE) {
		//End Validasi

		$data = array(	'title'		=>	'Data Video ('.count($video).')',
						'video'	=>	$video,
						'isi'		=>	'admin/video/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//Masuk Database
		}else {
			$i = $this->input;

			$data = array(	'link_video'	=>	$i->post('link_video'),
							'judul' => $i->post('judul'),
                                'tanggal' => date('Y-m-d H:i:s')
					);
			$this->video_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data Telah ditambah');
			redirect(base_url('index.php/admin/video'),'refresh');
		}
		//End masuk database
	}

	//Edit Video
	public function edit($id_video)
	{
			$i = $this->input;

			$data = array(	'id_video'	=>	$id_video,
							'judul' => $i->post('judul'),
							'link_video'		=>	$i->post('link_video')
					);
			$this->video_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data Telah Diupdate!');
			redirect(base_url('index.php/admin/video'),'refresh');
	}


	//Delete
	public function delete($id_video)
	{
		//Proteksi Delete
		$this->check_login->check();
		$data = array(	'id_video'	=>	$id_video);
		$this->video_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Telah Dihapus');
		redirect(base_url('index.php/admin/video'),'refresh');
	}

}

/* End of file Video.php */
/* Location: ./application/controllers/admin/Video.php */