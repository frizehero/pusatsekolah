<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tampilan_inbox extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_inbox');
		$this->load->model('login/m_session');
	}

	/*function index()
	{
		$data = array(
			'namamodule' 	=> "beranda_as",
			'namafileview' 	=> "V_beranda_as",
			'tampil'		=> $this->M_beranda_as->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}*/

	// index
	function index()
	{
		//echo $this->session->userdata('session_id');
		if (empty($this->session->userdata('session_id'))) {
			redirect('login');
		} else {
			$iduser = $this->session->userdata('session_id');
			$idsekolahx = $this->M_inbox->ambilidsekolah($iduser);

			$data = array(
				'namamodule' 		=> "tampilan_inbox",
				'namafileview' 		=> "V_inbox",
				'tampil'			=> $this->M_inbox->tampil(),
				'idnya' 			=> $iduser,
				'idsekolah' 		=> $idsekolahx,
				'tampilkompetensi'	=> $this->M_inbox->tampilkompetensi($idsekolahx['id_sekolah']),
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}

	function detailpesan($id)
	{
		//echo $this->session->userdata('session_id');
		{
			$iduser = $this->session->userdata('session_id');
			$iduserx = $this->M_inbox->ambilidsekolah($iduser);
			$idpenerima = decrypt_url($id);
			$nama_penerima = decrypt_url($id);


			$data = array(
				'namamodule' 		=> "tampilan_inbox",
				'namafileview' 		=> "V_detailinbox",
				'tampil'			=> $this->M_inbox->tampildetail($idpenerima),
				'idnya' 			=> $iduser,
				'idpenerima'		=> $idpenerima,
				'nama_penerima'		=> $nama_penerima,
				'idsekolah' 		=> $iduserx,
				'tampilkompetensi'	=> $this->M_inbox->tampilkompetensi($iduserx['id_admin']),
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}

	// halaman tambah
	/*function tambahview()
	{
		$data = array(
			'namamodule' 	=> "daftar_sd",
			'namafileview' 	=> "V_daftar_sd",
		);
		echo Modules::run('template/tampilCore', $data);
	}*/

	/*function tentangview()
	{
		//echo $this->session->userdata('session_id');
		{
			$iduser=$this->session->userdata('session_id');
			$idsekolahx = $this->M_beranda_as->ambilidsekolah($iduser);

			$data = array(
				'namamodule' 	=> "beranda_as",
				'namafileview' 	=> "V_tentang",
				'idnya' 		=> $iduser,
				'idsekolah' 	=> $idsekolahx,
				'tampilkompetensi'		=> $this->M_beranda_as->tampilkompetensi($idsekolahx['id_sekolah']),
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}*/

	function tambah()
	{
		$this->M_pesan->tambahdetail();
		redirect('tb_pesan');
	}

	function edit()
	{
		$this->M_p_sekolah->edit();
		redirect('p_sekolah');
	}

	function hapus()
	{
		$this->M_beranda_as->hapus();
		redirect('beranda_as');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "beranda_as",
			'namafileview' 	=> "V_beranda_as",
			'tampil'		=> $this->M_beranda_as->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
