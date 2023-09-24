<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bantuan extends CI_Controller
{

	//load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('bantuan_model');
	}

	//Listing data berita
	public function index()
	{
		$bantuan = $this->bantuan_model->listing();

		$data = array(
			// 'title'	=>	'Data Berita ('.count($berita).')',
			'bantuan'	=>	$bantuan,
			'breadcrumb' => 'Bantuan',
			'sub_breadcrumb' => 'Data Bantuan',
			'isi'	=>	'admin/bantuan/list',
			'activator' => 'bantuan',
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function detail_single($id_berita)
	{
		$bantuan = $this->bantuan_model->detail_admin($id_berita);
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
	public function tambah()
	{
		//valid
		$valid = $this->form_validation;

		$valid->set_rules(
			'nama_program',
			'Nama Program',
			'required',
			array('required'	=>	'%s harus diisi')
		);

		$valid->set_rules(
			'nama_program',
			'Nama Program',
			'required',
			array('required'	=>	'%s harus diisi')
		);

		if ($valid->run()) {
			if (empty($this->input->post('nama_program'))) {
				//End Validasi

				$data = array(
					// 'title'			=>	'Tambah data berita',
					'error_upload'	=>	 $this->upload->display_errors(),
					'isi'			=>	'admin/bantuan/tambah'
				);
				$this->load->view('admin/layout/wrapper', $data, FALSE);
				//Masuk database
			} else {
				$i = $this->input;
				$data = array(
					'nama_program'		=>	$i->post('nama_program'),
					'keterangan'	=>	$i->post('keterangan'),
					'asal_dana'	=>	$i->post('asal_dana'),
					'tgl_mulai'	=>	$i->post('tgl_mulai'),
					'tgl_akhir'	=>	$i->post('tgl_akhir'),
				);
				$this->bantuan_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Data Telah Ditambah');
				redirect(base_url('admin/bantuan'), 'refresh');
			}
		}
		//End Masuk Database
		$data = array(
			// 'title'			=>	'Tambah data berita',
			'breadcrumb' => 'Program Bantuan',
			'sub_breadcrumb' => 'Program Bantuan',
			'judul' => 'Program Bantuan',
			'sub_judul' => 'Program Bantuan',
			'isi'			=>	'admin/bantuan/tambah',
			'activator' => 'bantuan',
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//Edit
	public function edit($id)
	{
		//valid
		$valid = $this->form_validation;

		$bantuan_detail = $this->bantuan_model->detail($id);

		$valid->set_rules(
			'nama_program',
			'Nama Program',
			'required',
			array('required'	=>	'%s harus diisi')
		);

		if ($valid->run()) {
			//Kalo ga ganti gambar
				if (empty($this->input->post('nama_program'))) {
					//End Validasi
					$data = array(
						'title'			=>	'Edit data bantuan ' . $bantuan_detail->nama_program,
						'bantuan_detail' => $bantuan_detail,
						'isi'			=>	'admin/bantuan/edit',
						'breadcrumb' => 'Bantuan',
						'sub_breadcrumb' => 'Edit Bantuan',
						'judul' => 'Bantuan',
						'sub_judul' => 'Edit Bantuan',
						'activator' => 'bantuan',
					);
					$this->load->view('admin/layout/wrapper', $data, FALSE);
					//Masuk database
				} else {
					$i = $this->input;
					$data = array(
						'nama_program'	=>	$i->post('nama_program'),
						'keterangan'	=>	$i->post('keterangan'),
						'asal_dana'	=>	$i->post('asal_dana'),
            'tgl_mulai' => $i->post('tgl_mulai'),
						'tgl_akhir'	=>	$i->post('tgl_akhir'),
					);
					$this->bantuan_model->edit($data, $id);
					$this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
					redirect(base_url('admin/bantuan'), 'refresh');
				
			} 
		}
		//End Masuk Database
		$data = array(
			// 'title'			=>	'Edit data berita ' . $berita->judul_berita,
			'breadcrumb' => 'Berita',
			'bantuan_detail' => $bantuan_detail,
			'sub_breadcrumb' => 'Edit Berita',
			'judul' => 'Berita',
			'sub_judul' => 'Edit Berita',
			'isi'			=>	'admin/bantuan/edit',
			'activator' => 'bantuan',
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//Delete
	public function delete($id)
	{
		//Proteksi delete
		$this->check_login->check();
		$data = array('id'	=>	$id);
		$this->bantuan_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Telah dihapus');
		redirect(base_url('admin/bantuan'), 'refresh');
	}
}

/* End of file Berita.php */
/* Location: ./application/controllers/admin/Berita.php */