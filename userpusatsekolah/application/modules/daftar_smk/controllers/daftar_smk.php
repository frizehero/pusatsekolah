<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_smk extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_beranda_as');
		$this->load->model('login/m_session');
	}
	
	function index()
	{
		//echo $this->session->userdata('session_id');
		if (empty($this->session->userdata('session_id'))) {
			redirect('login');
		} else {
			$iduser = $this->session->userdata('session_id');
			$idsekolahx = $this->M_beranda_as->ambilidsekolah($iduser);

			$data = array(
				'namamodule' 		=> "daftar_smk",
				'namafileview' 		=> "V_daftar_smk",
				'tampil'			=> $this->M_beranda_as->tampil($idsekolahx['id_sekolah']),
				'semuasekolah'		=> $this->M_beranda_as->semuasekolah(),
				'idnya' 			=> $iduser,
				'idsekolah' 		=> $idsekolahx,
				'tampilkompetensi'	=> $this->M_beranda_as->tampilkompetensi($idsekolahx['id_sekolah']),
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "beranda_su",
			'namafileview' 	=> "V_beranda_su",
			'tampil'		=> $this->M_beranda_as->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
