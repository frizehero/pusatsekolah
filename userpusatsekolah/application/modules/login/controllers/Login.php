<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {


	function __construct()
	{
		parent:: __construct();

		//get model

		$this->load->model('M_master_userid');

		$this->load->model('M_session');


	}

	public function index()
	{
		$data_siswa=  $this->session->userdata('session_id');
		// blm login
		if ( empty( $this->session->userdata('session_id') ) )
		{
			$data = array (
				'getCek' => $this->M_session->getCek(),
				'cekAdmin' => $this->M_master_userid->cekAdmin(),
				'tampil'	=> $this->M_master_userid->tampil($data_siswa),
				
			);
			$this->load->view('v_login',$data);
		} else {

			// sudah login
			//redirect('beranda');
		}
	}


	function tambah()
	{
		$data_siswa=  $this->session->userdata('session_id');
		$this->M_master_userid->tambah();
		redirect('login');
		
	}

	//login proses
	function proses_login()
	{
		// POST
		$getUser = $this->input->post('username');
		$getPassword = sha1($this->input->post('password'));
		// Get Data
		$getData = $this->M_master_userid->getCredential($getUser, $getPassword);

		// check
		if ( ! empty($getData) )
		{
			// masukan ke  dalam session
			$this->M_session->store_session( $getData->id_admin );

			// flashdata
			$this->session->set_flashdata('msg', 'greeting');

			$iduser = $getData->id_admin;

			//echo "cekuseraaaaaa".$iduser;

			$tampunguserlevel = $this->M_master_userid->cekUser($iduser);

			//echo "cekuser".$tampunguserlevel;

			if($tampunguserlevel=='1'){
				redirect('beranda_ps');
			}else{
				redirect('beranda_user');
			}
			//redirect('beranda');
		} else { // gagal login

			$this->session->set_flashdata('msg', 'loginError');
			redirect('login');
		}

	}

	// function logout
	function logoutApp()
	{
		
		$this->session->unset_userdata('session_id');

		$this->session->set_flashdata('msg', 'logoutAplikasi');
		// redirect
		redirect('beranda_nl');
	}

	function register(){
		// POST
		$getUser = $this->input->post('username');
		$getPassword = sha1($this->input->post('password'));
		// Get Data
		$getData = $this->M_master_userid->getCredential($getUser, $getPassword);

		// check
		if ( ! empty($getData) )
		{
			// masukan ke  dalam session
			$this->M_session->store_session( $getData->id_admin );

			// flashdata
			$this->session->set_flashdata('msg', 'greeting');

			$iduser = $getData->id_admin;

			//echo "cekuseraaaaaa".$iduser;

			$tampunguserlevel = $this->M_master_userid->cekUser($iduser);

			//echo "cekuser".$tampunguserlevel;

			if($tampunguserlevel=='1'){
				redirect('login', 'beranda_user');
			}else{
				redirect('beranda_user');
			}
			//redirect('beranda');
		} else { // gagal login

			$this->session->set_flashdata('msg', 'loginError');
			redirect('login');

			$this->load->view('login',$data);
		}
	}

	function lupaPassword(){
		// POST
		$getUser = $this->input->post('username');
		$getEmail = $this->input->post('email');
		$getTelp = $this->input->post('no_telp');
		// Get Data
		$getData = $this->M_master_userid->getUser($getUser, $getEmail, $getTelp);

		if (!empty($getData))
		{
			$status = $getData->status;
			$id 	= $getData->id_admin;

			if ($status == 1 || $status == 2){
				echo json_encode($id);
			}
		}
	}

	function passwordBaru()
	{
		$this->M_master_userid->passwordBaru();
		
		echo json_encode("berhasil");
	}


}
