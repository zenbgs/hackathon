<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kependudukan extends CI_Controller {

	//load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kependudukan_model');
		$this->load->model('berita_model');
	}

	//Listing data pegawai
	public function index()
	{
		$kependudukan = $this->kependudukan_model->listing();
		$berita = $this->berita_model->listing();
		$data = array(	'title'	=>	'Kependudukan ('.count($kependudukan).')',
						'penduduk'	=>	$kependudukan,
						'berita'	=>	$berita,
						'isi'	=>	'admin/kependudukan/list',
                        'breadcrumb' => 'Kependudukan',
			            'sub_breadcrumb' => 'Kependudukan',
                        'activator' => 'kependudukan',
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

		if($valid->run() === FALSE) {
		//End Validasi

		$data = array(	'title'	=>	'Tambah Data Penduduk',
						'isi'	=>	'admin/kependudukan/tambah',
                        'breadcrumb' => 'Kependudukan',
			            'sub_breadcrumb' => 'Tambah Data Penduduk',
                        'activator' => 'dasbor'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//Masuk database
		}else{
			$i = $this->input;
			$data = array(	'nama'			=>	$i->post('nama'),
                            'tgl_lapor'			=>	$i->post('tanggal_lapor'),
                            'nik'			=>	$i->post('nik'),
                            'no_kk_sebelum'			=>	$i->post('no_kk_sebelum'),
                            'hub_keluarga'			=>	$i->post('hub_keluarga'),
                            'jenis_kelamin'			=>	$i->post('jenis_kelamin'),
                            'agama'			=>	$i->post('agama'),
                            'status_penduduk'			=>	$i->post('status_penduduk'),
                            'akta_kelahiran'			=>	$i->post('akta_kelahiran'),
                            'tempat_lahir'			=>	$i->post('tempat_lahir'),
                            'tgl_lahir'			=>	$i->post('tanggal_lahir'),
                            'waktu_kelahiran'			=>	$i->post('waktu_kelahiran'),
                            'tempat_dilahirkan'			=>	$i->post('tempat_dilahirkan'),
                            'jenis_kelahiran'			=>	$i->post('jenis_kelahiran'),
                            'anak_ke'			=>	$i->post('anak_ke'),
                            'penolong_kelahiran'			=>	$i->post('penolong_kelahiran'),
                            'berat_lahir'			=>	$i->post('berat_lahir'),
                            'panjang_lahir'			=>	$i->post('panjang_lahir'),
                            'pendidikan_kk'			=>	$i->post('pendidikan_kk'),
                            'pendidikan_sedang_ditempuh'			=>	$i->post('menempuh_pendidikan'),
                            'pekerjaan'			=>	$i->post('pekerjaan'),
                            'suku'			=>	$i->post('suku'),
                            'warga_negara'			=>	$i->post('warga_negara'),
                            'no_paspor'			=>	$i->post('no_paspor'),
                            'tgl_berakhir_paspor'			=>	$i->post('tgl_berakhir_paspor'),
                            'nik_ayah'			=>	$i->post('nik_ayah'),
                            'nik_ibu'			=>	$i->post('nik_ibu'),
                            'nama_ayah'			=>	$i->post('nama_ayah'),
                            'nama_ibu'			=>	$i->post('nama_ibu'),
                            'dusun'			=>	$i->post('dusun'),
                            'rw'			=>	$i->post('rw'),
                            'rt'			=>	$i->post('rt'),
                            'alamat_sebelumnya'			=>	$i->post('alamat_sebelumnya'),
                            'alamat_sekarang'			=>	$i->post('alamat_sekarang'),
                            'no_telp'			=>	$i->post('no_telp'),
                            'email'			=>	$i->post('email'),
                            'telegram'			=>	$i->post('telegram'),
                            'cara_hubungi'			=>	$i->post('cara_hubungi'),
						);
			$this->kependudukan_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data Telah Ditambah');
			redirect(base_url('index.php/admin/kependudukan'),'refresh');
		}
		//End Masuk Database
	}

	//Edit Pegawai
	public function edit($id)
	{
		$penduduk = $this->kependudukan_model->detail($id);

		//valid
		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama','required',
				array('required'	=>	'%s harus diisi'));
		if($valid->run() === FALSE) {
		//End Validasi

		$data = array(	'title'	=>	'Edit Penduduk: '.$penduduk->nama,
						'penduduk'	=>	$penduduk,
						'isi'	=>	'admin/kependudukan/edit',
						'breadcrumb' => 'Kependudukan',
			            'sub_breadcrumb' => 'Edit Data Penduduk',
                        'activator' => 'dasbor'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		//Masuk database
		}else{
			$i = $this->input;
			$data = array(	'id' => $id,
							'nama'			=>	$i->post('nama'),
							'tgl_lapor'			=>	$i->post('tanggal_lapor'),
							'nik'			=>	$i->post('nik'),
							'no_kk_sebelum'			=>	$i->post('no_kk_sebelum'),
							'hub_keluarga'			=>	$i->post('hub_keluarga'),
							'jenis_kelamin'			=>	$i->post('jenis_kelamin'),
							'agama'			=>	$i->post('agama'),
							'status_penduduk'			=>	$i->post('status_penduduk'),
							'akta_kelahiran'			=>	$i->post('akta_kelahiran'),
							'tempat_lahir'			=>	$i->post('tempat_lahir'),
							'tgl_lahir'			=>	$i->post('tanggal_lahir'),
							'waktu_kelahiran'			=>	date('H:i',$i->post('waktu_kelahiran')),
							'tempat_dilahirkan'			=>	$i->post('tempat_dilahirkan'),
							'jenis_kelahiran'			=>	$i->post('jenis_kelahiran'),
							'anak_ke'			=>	$i->post('anak_ke'),
							'penolong_kelahiran'			=>	$i->post('penolong_kelahiran'),
							'berat_lahir'			=>	$i->post('berat_lahir'),
							'panjang_lahir'			=>	$i->post('panjang_lahir'),
							'pendidikan_kk'			=>	$i->post('pendidikan_kk'),
							'pendidikan_sedang_ditempuh'			=>	$i->post('menempuh_pendidikan'),
							'pekerjaan'			=>	$i->post('pekerjaan'),
							'suku'			=>	$i->post('suku'),
							'warga_negara'			=>	$i->post('warga_negara'),
							'no_paspor'			=>	$i->post('no_paspor'),
							'tgl_berakhir_paspor'			=>	$i->post('tgl_berakhir_paspor'),
							'nik_ayah'			=>	$i->post('nik_ayah'),
							'nik_ibu'			=>	$i->post('nik_ibu'),
							'nama_ayah'			=>	$i->post('nama_ayah'),
							'nama_ibu'			=>	$i->post('nama_ibu'),
							'dusun'			=>	$i->post('dusun'),
							'rw'			=>	$i->post('rw'),
							'rt'			=>	$i->post('rt'),
							'alamat_sebelumnya'			=>	$i->post('alamat_sebelumnya'),
							'alamat_sekarang'			=>	$i->post('alamat_sekarang'),
							'no_telp'			=>	$i->post('no_telp'),
							'email'			=>	$i->post('email'),
							'telegram'			=>	$i->post('telegram'),
							'cara_hubungi'			=>	$i->post('cara_hubungi'),
						);
			$this->kependudukan_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data Telah DiUpdate');
			redirect(base_url('index.php/admin/kependudukan'),'refresh');
		}
		//End Masuk Database
	}

	//Delete
	public function delete($id)
	{
		//Proteksi delete
		$this->check_login->check();

		$penduduk = $this->kependudukan_model->detail($id);

		$data = array(	'id'	=>	$penduduk->id);
		$this->kependudukan_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Telah dihapus');
		redirect(base_url('index.php/admin/kependudukan'),'refresh');
	}

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/admin/Pegawai.php */
