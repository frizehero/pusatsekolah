<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beranda_nl extends CI_Model {

	function tampil()
	{
		return $this->db->get('beranda_nl')->result();
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah',$cari)->get('sekolah')->result();
	}
}