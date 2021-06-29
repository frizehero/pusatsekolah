<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ppdb_sekolah extends CI_Model {

	function tampil()
	{
		$this->db->select('*');
		$this->db->from('ppdb_sekolah');
		$query = $this->db->get();

		return $query->result();
	}

	function tampilpanitia()
	{
		$this->db->select('*');
		$this->db->from('ppdb_panitia');
		$query = $this->db->get();

		return $query->result();
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('foto_ppdb',$cari)->get('ppdb_sekolah')->result();
	}
}