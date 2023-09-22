<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

	//load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
		$this->load->model('kategori_model');
	}

	//Listing data berita
	public function index()
	{
		$berita = $this->berita_model->listing();

		$data = array(
			// 'title'	=>	'Data Berita ('.count($berita).')',
			'berita'	=>	$berita,
			'breadcrumb' => 'Berita',
			'sub_breadcrumb' => 'Data Berita',
			'isi'	=>	'admin/berita/list',
			'activator' => 'berita',
			'sub_activator' => 'data_berita'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function detail_single($id_berita)
	{
		$berita = $this->berita_model->detail_admin($id_berita);
		$data = array(
			// 'title'	=>	'Data Berita ('.count($berita).')',
			'berita'	=>	$berita,
			'breadcrumb' => 'Berita',
			'sub_breadcrumb' => 'Detail Berita',
			'judul' => 'Berita',
			'sub_judul' => 'Detail Berita',
			'isi'	=>	'admin/berita/detail',
			'activator' => 'berita',
			'sub_activator' => 'data_berita'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//Tambah
	public function tambah_single()
	{
		$kategori = $this->kategori_model->listing();

		//valid
		$valid = $this->form_validation;

		$valid->set_rules(
			'judul_berita',
			'Judul Berita',
			'required',
			array('required'	=>	'%s harus diisi')
		);

		$valid->set_rules(
			'isi_berita',
			'Isi Berita',
			'required',
			array('required'	=>	'%s harus diisi')
		);

		if ($valid->run()) {
			$config['upload_path']          = './assets/upload/image/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 5000;
			$config['max_width']            = 5000;
			$config['max_height']           = 5000;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				//End Validasi

				$data = array(
					// 'title'			=>	'Tambah data berita',
					'kategori'		=>	$kategori,
					'error_upload'	=>	 $this->upload->display_errors(),
					'isi'			=>	'admin/berita/tambah_single'
				);
				$this->load->view('admin/layout/wrapper', $data, FALSE);
				//Masuk database
			} else {
				$upload_data	= array('uploads'	=> $this->upload->data());
				$config['image_library']  	= 'gd2';
				$config['source_image']   	= './assets/upload/image/' . $upload_data['uploads']['file_name'];
				
				$config['new_image']		= './assets/upload/image/thumbs/' . $upload_data['uploads']['file_name'];
				$config['create_thumb']   	= TRUE;
				$config['maintain_ratio'] 	= TRUE;
				$config['width']          	= 200;
				$config['height']         	= 200;
				$config['thumb_marker']		= '';

				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$i = $this->input;
				$data = array(
					'id_user'		=>	$this->session->userdata('id_user'),
					'id_kategori'	=>	$i->post('kategori_berita'),
					'slug_berita'	=>	url_title($this->input->post('judul_berita'), 'dash', TRUE),
					'judul_berita'	=>	$i->post('judul_berita'),
					'isi_berita'	=>	$i->post('isi_berita'),
					'gambar'		=>	$upload_data['uploads']['file_name'],
					'status_berita'	=>	$i->post('status_berita'),
                  'tanggal_post' => $i->post('tanggal'),
					//'tanggal_post'	=>	date('Y-m-d H:i:s'),
					//'activator' => 'berita',
					//'sub_activator' => 'data_berita'
				);
				$this->berita_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Data Telah Ditambah');
				redirect(base_url('admin/berita'), 'refresh');
			}
		}
		//End Masuk Database
		$data = array(
			// 'title'			=>	'Tambah data berita',
			'kategori'		=>	$kategori,
			'breadcrumb' => 'Berita',
			'sub_breadcrumb' => 'Tambah Berita',
			'judul' => 'Berita',
			'sub_judul' => 'Tambah Berita',
			'isi'			=>	'admin/berita/tambah',
			'activator' => 'berita',
			'sub_activator' => 'data_berita'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//Edit
	public function edit_single($id_berita)
	{
		$berita = $this->berita_model->detail($id_berita);
		$kategori = $this->kategori_model->listing();

		//valid
		$valid = $this->form_validation;

		$valid->set_rules(
			'judul_berita',
			'Judul Berita',
			'required',
			array('required'	=>	'%s harus diisi')
		);

		$valid->set_rules(
			'isi_berita',
			'Isi Berita',
			'required',
			array('required'	=>	'%s harus diisi')
		);

		if ($valid->run()) {
			//Kalo ga ganti gambar
			if (!empty($_FILES['gambar']['name'])) {

				$config['upload_path']          = './assets/upload/image/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['max_size']             = 5000;
				$config['max_width']            = 5000;
				$config['max_height']           = 5000;

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')) {
					//End Validasi

					$data = array(
						'title'			=>	'Edit data berita ' . $berita->judul_berita,
						'kategori'		=>	$kategori,
						'berita'		=>	$berita,
						'error_upload'	=>	 $this->upload->display_errors(),
						'isi'			=>	'admin/berita/edit',
						'breadcrumb' => 'Berita',
						'sub_breadcrumb' => 'Edit Berita',
						'judul' => 'Berita',
						'sub_judul' => 'Edit Berita',
						'activator' => 'berita',
						'sub_activator' => 'data_berita'
					);
					$this->load->view('admin/layout/wrapper', $data, FALSE);
					//Masuk database
				} else {
					$upload_data	= array('uploads'	=> $this->upload->data());

					$config['image_library']  	= 'gd2';
					$config['source_image']   	= './assets/upload/image/' . $upload_data['uploads']['file_name'];
					//Gambar versi kecil dipindahkan
					$config['new_image']		= './assets/upload/image/thumbs/' . $upload_data['uploads']['file_name'];
					$config['create_thumb']   	= TRUE;
					$config['maintain_ratio'] 	= TRUE;
					$config['width']          	= 200;
					$config['height']         	= 200;
					$config['thumb_marker']		= '';

					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$i = $this->input;

					if ($berita->gambar != "") {
						unlink('./assets/upload/image/' . $berita->gambar);
						unlink('./assets/upload/image/thumbs/' . $berita->gambar);
					}

					$data = array(
						'id_berita'		=>	$id_berita,
						'id_user'		=>	$this->session->userdata('id_user'),
						'id_kategori'	=>	$i->post('kategori_berita'),
						'slug_berita'	=>	url_title($this->input->post('judul_berita'), 'dash', TRUE),
						'judul_berita'	=>	$i->post('judul_berita'),
						'isi_berita'	=>	$i->post('isi_berita'),
						'gambar'		=>	$upload_data['uploads']['file_name'],
						'status_berita'	=>	$i->post('status_berita'),
                      'tanggal_post' => $i->post('tanggal'),
					);
					$this->berita_model->edit($data);
					$this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
					redirect(base_url('admin/berita'), 'refresh');
				}
			} else {
				//Update berita tanpa gambar
				$i = $this->input;
				$data = array(
					'id_berita'		=>	$id_berita,
					'id_user'		=>	$this->session->userdata('id_user'),
					'id_kategori'	=>	$i->post('kategori_berita'),
					'slug_berita'	=>	url_title($this->input->post('judul_berita'), 'dash', TRUE),
					'judul_berita'	=>	$i->post('judul_berita'),
					'isi_berita'	=>	$i->post('isi_berita'),
					'status_berita'	=>	$i->post('status_berita'),
                  'tanggal_post' => $i->post('tanggal'),
				);
				$this->berita_model->edit($data);
				$this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
				redirect(base_url('admin/berita'), 'refresh');
			}
		}
		//End Masuk Database
		$data = array(
			// 'title'			=>	'Edit data berita ' . $berita->judul_berita,
			'kategori'		=>	$kategori,
			'breadcrumb' => 'Berita',
			'sub_breadcrumb' => 'Edit Berita',
			'judul' => 'Berita',
			'sub_judul' => 'Edit Berita',
			'berita'		=>	$berita,
			'isi'			=>	'admin/berita/edit',
			'activator' => 'berita',
			'sub_activator' => 'data_berita'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//Delete
	public function delete($id_berita)
	{
		//Proteksi delete
		$this->check_login->check();

		$berita = $this->berita_model->detail($id_berita);

		//Hapus Gambar
		if ($berita->gambar != "") {
			unlink('./assets/upload/image/' . $berita->gambar);
			unlink('./assets/upload/image/thumbs/' . $berita->gambar);
		}
		//End Hapus Gambar

		$data = array('id_berita'	=>	$berita->id_berita);
		$this->berita_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Telah dihapus');
		redirect(base_url('admin/berita'), 'refresh');
	}
}

/* End of file Berita.php */
/* Location: ./application/controllers/admin/Berita.php */