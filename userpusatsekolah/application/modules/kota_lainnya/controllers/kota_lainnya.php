<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kota_lainnya extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_kota_lainnya');
		$this->load->model('login/m_session');
	}

	function index()
	{
		//echo $this->session->userdata('session_id');
		if (empty($this->session->userdata('session_id'))) {
			redirect('login');
		} else {
			$iduser = $this->session->userdata('session_id');
			$idsekolahx = $this->M_kota_lainnya->ambilidsekolah($iduser);

			$data = array(
				'namamodule' 		=> "kota_lainnya",
				'namafileview' 		=> "V_kota_lainnya",
				'tampil'			=> $this->M_kota_lainnya->tampil($idsekolahx['id_sekolah']),
				'semuasekolah'		=> $this->M_kota_lainnya->semuasekolah(),
				'idkotalainnya'		=> $this->M_kota_lainnya->idkotalainnya(),
				'idnya' 			=> $iduser,
				'idsekolah' 		=> $idsekolahx,
				'tampilkompetensi'	=> $this->M_kota_lainnya->tampilkompetensi($idsekolahx['id_sekolah']),
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}

	function tambahkomen()
	{
		$this->M_beranda_as->tambahkomen();
		$idtampung 	= $this->input->post('tampungid');

		redirect('daftar_smk/detailsekolah/'. $idtampung);
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
