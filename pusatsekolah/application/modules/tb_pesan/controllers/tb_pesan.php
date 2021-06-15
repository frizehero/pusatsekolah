<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tb_pesan extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_pesan');
		$this->load->model('login/m_session');
	}

	// index
	function index()
	{
		if (empty($this->session->userdata('session_id'))) {
			redirect('login');
		} else {
			$data = array(
				'namamodule' 	=> "tb_pesan",
				'namafileview' 	=> "V_pesan",
				'tampil'		=> $this->M_pesan->tampil(),
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}

	/*function tambah()
	{
		//echo $this->session->userdata('session_id');
		if (empty($this->session->userdata('session_id'))) {
			redirect('login');
		} else {
			$iduser = $this->session->userdata('session_id');
			$iduserx = $this->M_pesan->ambilidsekolah($iduser);

			$data = array(
				'namamodule' 		=> "tb_pesan",
				'namafileview' 		=> "V_pesan_detail",
				'tampil'			=> $this->M_pesan->tampilpesan($iduser),
				'idnya' 			=> $iduser,
				'tampilkompetensi'	=> $this->M_pesan->tampilkompetensi($iduserx['id_admin']),
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}*/

	function detailpesan($id)
	{
		//echo $this->session->userdata('session_id');
		{
			$iduser =$this->session->userdata('session_id');
			$iduserx = $this->M_pesan->ambilidsekolah($iduser);
			$idpenerima = decrypt_url($id);
			/*$nama_user = decrypt_url($id);*/


			$data = array(
				'namamodule' 		=> "tb_pesan",
				'namafileview' 		=> "V_pesan_detail",
				'tampil'			=> $this->M_pesan->tampildetail($id),
				'idnya' 			=> $iduser,
				'idpenerima'		=> $idpenerima,
				/*'nama_user'			=> $nama_user,*/
				'idsekolah' 		=> $iduserx,
				'tampilkompetensi'	=> $this->M_pesan->tampilkompetensi($iduserx['id_admin']),
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}

	/*function detailpesan($id)
	{
		$data = array(
			'namamodule' 	=> "tb_pesan",
			'namafileview' 	=> "V_pesan_detail",
			'tampil'		=> $this->M_pesan->tampildetail($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}*/

	/*function tambah()
	{
		$this->M_pesan->tambah();
		redirect('tb_pesan');
		//echo $this->session->userdata('session_id');
		{
			$iduser=$this->session->userdata('session_id');
			$idsekolahx = $this->M_pesan->ambilidsekolah($iduser);

			$data = array(
				'namamodule' 	=> "tb_pesan",
				'namafileview' 	=> "V_pesan_detail",
				'idnya' 		=> $iduser,
				'idsekolah' 	=> $idsekolahx,
				'tampilkompetensi'		=> $this->M_pesan->tampilkompetensi($idsekolahx['id_admin']),
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}*/


	function tambah()
	{
		$this->M_pesan->tambahdetail();
		redirect('tb_pesan');
	}

	function hapus($id)
	{
		$this->M_pesan->hapus($id);
		redirect('tb_pesan');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "pesan",
			'namafileview' 	=> "V_pesan",
			'tampil'		=> $this->M_pesan->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function userlain()
	{
		$data = array(
			'namamodule' 	=> "pesan",
			'namafileview' 	=> "V_pesan",
			'tampil'		=> $this->M_pesan->tampil(),
			'tb_pesan'		=> $this->M_pesan->tampil(),
			'tb_login'		=> $this->M_master_userid->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
