<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	//load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pegawai_model');
	}

	//Listing data pegawai
	public function index()
	{
		$pegawai = $this->pegawai_model->listing();

		$data = array(	'title'	=>	'Data Pegawai ('.count($pegawai).')',
						'pegawai'	=>	$pegawai,
						'isi'	=>	'admin/pegawai/list'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//Tambah
	public function tambah()
	{
		//valid
		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama','required',
				array('required'	=>	'%s harus diisi'));

		$valid->set_rules('nip','NIP','required',
				array('required'	=>	'%s harus diisi'));

		$valid->set_rules('jabatan','Jabatan','required',
				array('required'	=>	'%s harus diisi'));

		if($valid->run() === FALSE) {
		//End Validasi

		$data = array(	'title'	=>	'Tambah Data Pegawai',
						'isi'	=>	'admin/pegawai/tambah'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//Masuk database
		}else{
			$i = $this->input;
			$data = array(	'nama_pegawai'			=>	$i->post('nama'),
							'nip_pegawai'			=>	$i->post('nip'),
							'jabatan_pegawai'		=>	$i->post('jabatan'),
							'status_pegawai'		=>	$i->post('status'),
						);
			$this->pegawai_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data Telah Ditambah');
			redirect(base_url('index.php/admin/pegawai'),'refresh');
		}
		//End Masuk Database
	}

	//Edit Pegawai
	public function edit($id_pegawai)
	{
		$pegawai = $this->pegawai_model->detail($id_pegawai);

		//valid
		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama','required',
				array('required'	=>	'%s harus diisi'));

		$valid->set_rules('nip','NIP','required',
				array('required'	=>	'%s harus diisi'));

		$valid->set_rules('jabatan','Jabatan','required',
				array('required'	=>	'%s harus diisi'));
		if($valid->run() === FALSE) {
		//End Validasi

		$data = array(	'title'	=>	'Edit Pegawai: '.$pegawai->nama_pegawai,
						'pegawai'	=>	$pegawai,
						'isi'	=>	'admin/pegawai/edit'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//Masuk database
		}else{
			$i = $this->input;
			$data = array(	'id_pegawai' => $id_pegawai,
							'nama_pegawai'			=>	$i->post('nama'),
							'nip_pegawai'			=>	$i->post('nip'),
							'jabatan_pegawai'		=>	$i->post('jabatan'),
							'status_pegawai'		=>	$i->post('status'),
						);
			$this->pegawai_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
			redirect(base_url('index.php/admin/pegawai'),'refresh');
		}
		//End Masuk Database
	}

	//Delete
	public function delete($id_pegawai)
	{
		//Proteksi delete
		$this->check_login->check();

		$pegawai = $this->pegawai_model->detail($id_pegawai);

		$data = array(	'id_pegawai'	=>	$pegawai->id_pegawai);
		$this->pegawai_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Telah dihapus');
		redirect(base_url('index.php/admin/pegawai'),'refresh');
	}

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/admin/Pegawai.php */
