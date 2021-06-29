<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data_guru extends CI_Model
{


	function tampil($idsekolahx)
	{
		$this->db->order_by('id_guru', 'DESC');
		$this->db->where('id_sekolah', $idsekolahx);
		$query = $this->db->get('data_guru');
		return $query->result();
	}


	function get_guru($limit, $start, $st = NULL)
	{
		
		if ($st == "NIL") $st = "";
		$this->db->select('*')
		->like('nama_guru',$st);
		$query = $this->db->get('data_guru',$limit, $start);
		return $query->result();
	}
	
	function cari ($data_guru, $idsekolahx)
	{
		$this->db->select('*');
		$this->db->from('data_guru');
		$this->db->where('id_sekolah', $idsekolahx);
		$this->db->like('nama_guru',$data_guru);
	
		$query = $this->db->get();
		return $query->result();
	}
	
	function filter ($data_guru, $idsekolahx)
	{

		$this->db->select('*');
		$this->db->from('data_guru');
		$this->db->where('id_sekolah', $idsekolahx);
		$this->db->like('mapel_guru',$data_guru);
	
		$query = $this->db->get();
		return $query->result();
	}
	
	function tampil_mapel($idsekolahx)
	{
		
		$this->db->select('*');
		$this->db->order_by('mapel_guru', 'DESC'); 
		$this->db->group_by('mapel_guru'); 
		$this->db->where('id_sekolah', $idsekolahx);
		$this->db->from('data_guru');
		$query = $this->db->get();

		return $query->result();
	}

	
	function tampildetail($id)
	{
		$idnya = decrypt_url($id);
		$this->db->where('id_guru', $idnya);
		return $this->db->get('data_guru')->row_array();
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
