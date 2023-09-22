<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	//Update Profile
	public function index()
	{
		$id_user = $this->session->userdata('id_user');
		$user = $this->user_model->detail($id_user);
		$i = $this->input;
	
		$data = array(	
			// 'title'	=>	'Edit Profile: '.$user->nama,
						'user'	=>	$user,
						'breadcrumb' => 'Profil Saya',
						'sub_breadcrumb' => 'Profil Saya',
						'activator' => 'profile',
						'isi'	=>	'admin/profile/list'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//Masuk database
		if($i->post('username') != ''){
			$data = array(	'id_user'		=> $id_user,
							'nama' => $i->post('nama_depan') . " " . $i->post('nama_belakang'),
							'nama_depan'			=>	$i->post('nama_depan'),
							'nama_belakang' => $i->post('nama_belakang'),
							'email'			=>	$i->post('email'),
							'username'		=>	$i->post('username'),
							'no_telp' => $i->post('no_telp')
						);
			$this->user_model->edit($data);
			$this->session->set_flashdata('sukses', 'Profile Telah DiUpdate');
			redirect(base_url('admin/profile'),'refresh');
		}else if($i->post('pw_sekarang') != ''){
			$pw_sekarang = sha1($i->post('pw_sekarang'));
			$pw_baru = $i->post('pw_baru');
			$pw_konfirm = $i->post('pw_konfirm');
			if($pw_sekarang == $user->password){
				if($pw_baru != $pw_konfirm){
					$this->session->set_flashdata('gagal', 'Password tidak sama!');
					redirect(base_url('admin/profile'),'refresh');
					}else{
					$data = array(	'id_user'		=> $id_user,
									'password' => sha1($pw_baru),
								);
					$this->user_model->edit($data);
					$this->session->set_flashdata('sukses_pw', 'Password telah diperbarui!');
					redirect(base_url('admin/profile'),'refresh');
					}
			}else{
				$this->session->set_flashdata('gagal', 'Password salah!');
				redirect(base_url('admin/profile'),'refresh');
			}
		}
	}

	public function profil1_single()
	{
		$data = array(
			// 'title'		=> 'Halaman Dasbor Admin',
			// 'berita'	=> $berita,
			// 'galeri'	=> $galeri,
			// 'user'		=> $user,
			// 'program'	=> $program,
			'isi'    => 'admin/profile/profil1'
		  );
		  $this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function profil2_single()
	{

	}

	public function profil3_single()
	{

	}

}

/* End of file Profile.php */
/* Location: ./application/controllers/admin/Profile.php */