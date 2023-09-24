<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oops extends CI_Controller {

	//MainPage
	public function index()
	{
		$data = array('title'	=> 'Oops Web Company Profil',
					  'isi'		=> 'oops/list'	
					);

		$this->load->view('oops/list', $data, FALSE);
	}

}

/* End of file Oops.php */
/* Location: ./application/controllers/Oops.php */