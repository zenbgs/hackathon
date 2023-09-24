<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Umkm extends CI_Controller
{

	//load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('umkm_model');
		$this->load->model('kategori_model');
	}

	//Listing data berita
	public function index()
	{
		$umkm = $this->umkm_model->listing();

		$data = array(
			'title'	=>	'Data UMKM ('.count($umkm).')',
			'umkm'	=>	$umkm,
			'breadcrumb' => 'UMKM',
			'sub_breadcrumb' => 'Data UMKM',
			'isi'	=>	'admin/umkm/list',
			'activator' => 'umkm',
			'sub_activator' => 'data_umkm'
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
		$umkm = $this->umkm_model->listing();

		//valid
		$valid = $this->form_validation;

		$valid->set_rules(
			'nama_pelapak',
			'Nama Pelapak',
			'required',
			array('required'	=>	'%s harus diisi')
		);


		if ($valid->run()) {
			//Kalo ga ganti gambar
			if (!empty($_FILES['photo_produk']['name'])) {

				$config['upload_path']          = './assets/upload/image/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['max_size']             = 5000;
				$config['max_width']            = 5000;
				$config['max_height']           = 5000;

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('photo_produk')) {
					//End Validasi

					$data = array(
						// 'title'			=>	'Edit data UMKM ' . $umkm->nama_pelapak,
						'umkm'		=>	$umkm,
						'error_upload'	=>	 $this->upload->display_errors(),
						'isi'			=>	'admin/umkm/tambah',
						'breadcrumb' => 'UMKM',
						'sub_breadcrumb' => 'Tambah UMKM',
						'judul' => 'UMKM',
						'sub_judul' => 'Tambah UMKM',
						'activator' => 'umkm',
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

					$data = array(
					'nama_pelapak'	=>	$i->post('nama_pelapak'),
					'nama_produk'	=>	$i->post('nama_produk'),
					'kategori_produk'	=>	$i->post('kategori_produk'),
					'harga_produk'	=>	$i->post('harga_produk'),
					'satuan_produk'	=>	$i->post('satuan_produk'),
					'tipe_potongan_harga'	=>	$i->post('tipe_potongan_harga'),
					'nominal_potongan_harga'	=>	$i->post('nominal_potongan_harga'),
					'desc_produk'	=>	$i->post('desc_produk'),
					'photo'		=>	$upload_data['uploads']['file_name'],
					);
					$this->umkm_model->tambah($data);
					$this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
					redirect(base_url('admin/umkm'), 'refresh');
				}
			} else {
				//Update berita tanpa gambar
				$i = $this->input;
				$data = array(
					'nama_pelapak'	=>	$i->post('nama_pelapak'),
					'nama_produk'	=>	$i->post('nama_produk'),
					'kategori_produk'	=>	$i->post('kategori_produk'),
					'harga_produk'	=>	$i->post('harga_produk'),
					'satuan_produk'	=>	$i->post('satuan_produk'),
					'tipe_potongan_harga'	=>	$i->post('tipe_potongan_harga'),
					'nominal_potongan_harga'	=>	$i->post('nominal_potongan_harga'),
					'desc_produk'	=>	$i->post('desc_produk'),
				);
				$this->umkm_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
				redirect(base_url('admin/umkm'), 'refresh');
			}
		}
		//End Masuk Database
		$data = array(
			// 'title'			=>	'Edit data berita ' . $berita->judul_berita,
			'umkm'		=>	$umkm,
			'breadcrumb' => 'UMKM',
			'sub_breadcrumb' => 'Tambah UMKM',
			'judul' => 'UMKM',
			'sub_judul' => 'Tambah UMKM',
			'isi'			=>	'admin/umkm/tambah',
			'activator' => 'umkm',
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//Edit
	public function edit_single($id)
	{
		$umkm = $this->umkm_model->detail($id);

		//valid
		$valid = $this->form_validation;

		$valid->set_rules(
			'nama_pelapak',
			'Nama Pelapak',
			'required',
			array('required'	=>	'%s harus diisi')
		);


		if ($valid->run()) {
			//Kalo ga ganti gambar
			if (!empty($_FILES['photo']['name'])) {

				$config['upload_path']          = './assets/upload/image/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['max_size']             = 5000;
				$config['max_width']            = 5000;
				$config['max_height']           = 5000;

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('photo')) {
					//End Validasi

					$data = array(
						'title'			=>	'Edit data UMKM ' . $umkm->nama_pelapak,
						'umkm'		=>	$umkm,
						'error_upload'	=>	 $this->upload->display_errors(),
						'isi'			=>	'admin/umkm/edit',
						'breadcrumb' => 'UMKM',
						'sub_breadcrumb' => 'Edit UMKM',
						'judul' => 'UMKM',
						'sub_judul' => 'Edit UMKM',
						'activator' => 'umkm',
						'sub_activator' => 'data_umkm'
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

					if ($umkm->photo != "") {
						unlink('./assets/upload/image/' . $umkm->photo);
						unlink('./assets/upload/image/thumbs/' . $umkm->photo);
					}

					$data = array(
						'id' => $id,
					'nama_pelapak'	=>	$i->post('nama_pelapak'),
					'nama_produk'	=>	$i->post('nama_produk'),
					'kategori_produk'	=>	$i->post('kategori_produk'),
					'harga_produk'	=>	$i->post('harga_produk'),
					'satuan_produk'	=>	$i->post('satuan_produk'),
					'tipe_potongan_harga'	=>	$i->post('tipe_potongan_harga'),
					'nominal_potongan_harga'	=>	$i->post('nominal_potongan_harga'),
					'desc_produk'	=>	$i->post('desc_produk'),
					'photo'		=>	$upload_data['uploads']['file_name'],
					);
					$this->umkm_model->edit($data);
					$this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
					redirect(base_url('admin/umkm'), 'refresh');
				}
			} else {
				//Update berita tanpa gambar
				$i = $this->input;
				$data = array(
                    'id' => $id,
					'nama_pelapak'	=>	$i->post('nama_pelapak'),
					'nama_produk'	=>	$i->post('nama_produk'),
					'kategori_produk'	=>	$i->post('kategori_produk'),
					'harga_produk'	=>	$i->post('harga_produk'),
					'satuan_produk'	=>	$i->post('satuan_produk'),
					'tipe_potongan_harga'	=>	$i->post('tipe_potongan_harga'),
					'nominal_potongan_harga'	=>	$i->post('nominal_potongan_harga'),
					'desc_produk'	=>	$i->post('desc_produk'),
					'photo'		=>	$upload_data['uploads']['file_name'],
				);
				$this->umkm_model->edit($data);
				$this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
				redirect(base_url('admin/umkm'), 'refresh');
			}
		}
		//End Masuk Database
		$data = array(
			// 'title'			=>	'Edit data berita ' . $berita->judul_berita,
			'umkm'		=>	$umkm,
			'breadcrumb' => 'UMKM',
			'sub_breadcrumb' => 'Edit UMKM',
			'judul' => 'UMKM',
			'sub_judul' => 'Edit UMKM',
			'isi'			=>	'admin/umkm/edit',
			'activator' => 'umkm',
			'sub_activator' => 'data_umkm'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//Delete
	public function delete($id)
	{
		//Proteksi delete
		$this->check_login->check();

		$umkm = $this->umkm_model->detail($id);

		//Hapus Gambar
		if ($umkm->photo != "") {
			unlink('./assets/upload/image/' . $umkm->photo);
			unlink('./assets/upload/image/thumbs/' . $umkm->photo);
		}
		//End Hapus Gambar

		$data = array('id'	=>	$umkm->id);
		$this->umkm_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Telah dihapus');
		redirect(base_url('admin/umkm'), 'refresh');
	}
}

/* End of file Berita.php */
/* Location: ./application/controllers/admin/Berita.php */