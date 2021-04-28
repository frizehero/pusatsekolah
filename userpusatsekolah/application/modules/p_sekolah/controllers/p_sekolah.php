<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_sekolah extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_p_sekolah');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{

		$iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_p_sekolah->ambilidsekolah($iduser);

		$data = array(
			'namamodule' 		=> "p_sekolah",
			'namafileview' 		=> "V_p_sekolah",
			'tampilkompetensi'	=> $this->M_p_sekolah->tampilkompetensi($idsekolahx['id_sekolah']),
			'provinsi'			=> $this->M_p_sekolah->provinsi(),

		);
		echo Modules::run('template/tampilCore', $data);
	}

	function add_ajax_kab($id_prov)
	{
    	$query = $this->db->get_where('wilayah_kabupaten',array('provinsi_id'=>$id_prov));
    	$data = "<option value=''>- Pilih Kabupaten -</option>";
    	foreach ($query->result() as $value) {
        	$data .= "<option value='".$value->id."'>".$value->nama."</option>";
    	}
    	echo $data;
	}

	
	function add_ajax_kec($id_kab)
	{
    	$query = $this->db->get_where('wilayah_kecamatan',array('kabupaten_id'=>$id_kab));
    	$data = "<option value=''> - Pilih Kecamatan - </option>";
    	foreach ($query->result() as $value) {
        	$data .= "<option value='".$value->id."'>".$value->nama."</option>";
    	}
    	echo $data;
	}
  
	function add_ajax_des($id_kec)
	{
    	$query = $this->db->get_where('wilayah_desa',array('kecamatan_id'=>$id_kec));
    	$data = "<option value=''> - Pilih Desa - </option>";
    	foreach ($query->result() as $value) {
        	$data .= "<option value='".$value->id."'>".$value->nama."</option>";
    	}
    	echo $data;
	}
	
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "p_sekolah",
			'namafileview' 	=> "V_p_sekolah",
			'tampil'		=> $this->M_p_sekolah->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function edit()
	{
		$this->M_p_sekolah->edit();
		redirect('p_sekolah');
	}
	
}
 