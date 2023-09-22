<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	//Load Database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	//Load Login Page
	public function index()
	{

		//validasi
		$valid = $this->form_validation;

		$valid->set_rules('username','Username','required|trim',
				array('required'	=>	'%s harus diisi'));

		$valid->set_rules('password','Password','required|trim',
				array('required'	=>	'%s harus diisi'));
		if($valid->run()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$check_login = $this->user_model->login($username, $password);
			if(count($check_login) == 1) {
				$this->session->set_userdata('id_user',$check_login[0]->id_user);
				$this->session->set_userdata('username',$check_login[0]->username);
				$this->session->set_userdata('nama',$check_login[0]->nama);
				$this->session->set_userdata('akses_level',$check_login[0]->akses_level);
				$this->session->set_flashdata('sukses', 'Anda Berhasil Login');
				redirect(base_url('admin/dasbor'),'refresh');
			} else{
				$this->session->set_flashdata('gagal', 'Username atau Password salah');
				redirect(base_url('login'),'refresh');
			}
		}else{
			$data = array(	'title'	=>	'Login Administrator',
		);
	$this->load->view('admin/login/list', $data, FALSE);
		}

		//End Validasi
		
	}

	//Logout
	public function logout()
	{
		$this->check_login->logout();
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */