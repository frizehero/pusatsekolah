<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_sekolah extends MX_Controller {


	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_daftar_sekolah');
		$this->load->model('login/m_session');
		
	}

	function index()
	{
		$data = array(
			'namamodule' 	=> "daftar_sekolah",
			'namafileview' 	=> "V_daftar_sekolah",
			'tampil'		=> $this->M_daftar_sekolah->tampil(),
		);
		$this->load->view('V_daftar_sekolah',$data);
	}

    function tambah()
	{

		$this->M_daftar_sekolah->tambah();
		redirect('p_sekolah');
		
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
}
