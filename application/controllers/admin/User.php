<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	//load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	//Listing data user
	// public function index()
	// {
	// 	$user = $this->user_model->listing();

	// 	$data = array(	'title'	=>	'Data User Administrator ('.count($user).')',
	// 					'user'	=>	$user,
	// 					'breadcrumb' => 'User',
	// 					'sub_breadcrumb' => 'Kelola Pengguna',
	// 					'activator' => 'user',
	// 					'isi'	=>	'admin/user/list'
	// 			);
	// 	$this->load->view('admin/layout/wrapper', $data, FALSE);
	// }

	public function index()
	{
		$user = $this->user_model->listing();

		//validasi
		$this->form_validation->set_rules('nama','Nama','required',
				array('required'	=>	'%s harus diisi'));

		if($this->form_validation->run() === FALSE) {
		//End Validasi

		$data = array(	'title'		=>	'Data User ('.count($user).')',
						'user'	=>	$user,
						'breadcrumb' => 'User',
						'sub_breadcrumb' => 'Kelola Pengguna',
						'activator' => 'user',
						'isi'		=>	'admin/user/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//Masuk Database
		}else {
			$i = $this->input;

			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$hak_akses = $this->input->post('hak_akses');
			$email = $this->input->post('email');
			$no_telp = $this->input->post('no_telp');
			$password = sha1($this->input->post('password'));

			$data = array(	'nama'	=>	$nama,
							'nama_depan' => '-',
							'nama_belakang' => '-',
							'email' => $email,
							'no_telp' => $no_telp,
							'username'	=>	$username,
							'password' => $password,
							'akses_level' => $hak_akses,
					);
			$this->user_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data Telah ditambah');
			redirect(base_url('admin/user'),'refresh');
		}
		//End masuk database
	}

	//Tambah
	public function tambah()
	{
		//valid
		$valid = $this->form_validation;
		$user = $this->user_model->listing();

		$valid->set_rules('nama','Nama','required',
				array('required'	=>	'%s harus diisi'));

		if($valid->run() === FALSE) {
		//End Validasi

		$data = array(	'title'		=>	'Data User ('.count($user).')',
		'user'	=>	$user,
		'breadcrumb' => 'User',
		'sub_breadcrumb' => 'Kelola Pengguna',
		'activator' => 'user',
		'isi'	=>	'admin/user/tambah'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//Masuk database
		}else{
			$i = $this->input;
			$data = array(	'nama'			=>	$i->post('nama'),
							'email'			=>	$i->post('email'),
							'username'		=>	$i->post('username'),
							'password'		=>	sha1($i->post('password')),
							'akses_level'	=>	$i->post('akses_level'),
							'nik'	=>	$i->post('nik'),
							'no_telp' => $i->post('no_hp')
						);
			$this->user_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data Telah Ditambah');
			redirect(base_url('index.php/admin/user'),'refresh');
		}
		//End Masuk Database
	}

	//Edit
	public function edit($id_user)
	{
		$id_user = $this->input->post('id_user');
		$user = $this->user_model->detail($id_user);

		//valid
		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama','required',
				array('required'	=>	'%s harus diisi'));

		if($valid->run() === FALSE) {
		//End Validasi

		$data = array(	'title'		=>	'Data User ('.count($user).')',
		'user'	=>	$user,
		'breadcrumb' => 'User',
		'sub_breadcrumb' => 'Kelola Pengguna',
		'activator' => 'user',
		'isi'	=>	'admin/user/list'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//Masuk database
		}else{
			$i = $this->input;
			if(!empty($i->post('password'))){
				$data = array(	'id_user'		=> $id_user,
							'nama'			=>	$i->post('nama'),
							'email'			=>	$i->post('email'),
							'username'		=>	$i->post('username'),
							'password'		=>	sha1($i->post('password')),
							'no_telp'		=>	$i->post('no_telp'),
							'akses_level'	=>	$i->post('hak_akses'),
							'nik'	=>	$i->post('nik'),
						);
			}else{
				$data = array(	'id_user'		=> $id_user,
							'nama'			=>	$i->post('nama'),
							'email'			=>	$i->post('email'),
							'username'		=>	$i->post('username'),
							'akses_level'	=>	$i->post('hak_akses'),
							'no_telp'		=>	$i->post('no_telp'),
							'nik'	=>	$i->post('nik'),
						);
			}
			
			$this->user_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
			redirect(base_url('admin/user'),'refresh');
		}
		//End Masuk Database
	}

	//Delete
	public function delete($id_user)
	{
		//Proteksi delete
		$this->check_login->check();
		
		$user = $this->user_model->detail($id_user);

		$data = array(	'id_user'	=>	$user->id_user);
		$this->user_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Telah dihapus');
		redirect(base_url('admin/user'),'refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */