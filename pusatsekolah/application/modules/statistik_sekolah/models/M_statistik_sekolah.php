<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_statistik_sekolah extends CI_Model
{

	function tampil($idsekolahx)
	{
		$this->db->where('id_sekolah', $idsekolahx);
		$this->db->from('data_alumni');
		$query = $this->db->get();

		return $query->result();
	}

	function totalpengajar()
	{
		return $this->db->get('data_guru')->num_rows();
	}

	function totalalumni()
	{
		return $this->db->get('data_alumni')->num_rows();
	}

	function totalevent()
	{
		return $this->db->get('event_sekolah')->num_rows();
	}

	function totalproduk()
	{
		return $this->db->get('produk')->num_rows();
	}

	function totalprestasi()
	{
		return $this->db->get('prestasi')->num_rows();
	}
	
	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_prestasi', $cari)->get('prestasi')->result();
	}

	function ambilidsekolah($id)
	{
	
		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('id_admin',$id);
		$query = $this->db->get();


		
    	return $query->row_array();
	}
}
