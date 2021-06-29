<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tampilan_event extends CI_Model {

	function tampil()
	{
		$this->db->order_by('id_event', 'DESC');
		$query = $this->db->get('event_sekolah');
		return $query->result();
	}

	function filter ($tampilan_event)
	{

		$this->db->select('*');
		$this->db->from('p_sekolah');
		$this->db->like('nama_sekolah',$P_sekolah);
	
		$query = $this->db->get();
		return $query->result();
	}

	function tampil_sekolah()
	{
		
		$this->db->select('*');
		$this->db->order_by('nama_sekolah', 'DESC'); 
		$this->db->group_by('nama_sekolah'); 
		$this->db->from('p_sekolah');
		$query = $this->db->get();

		return $query->result();
	}

	function tampil_jenjang()
	{
		
		$this->db->select('*');
		$this->db->order_by('jjg_sekolah', 'DESC'); 
		$this->db->group_by('jjg_sekolah'); 
		$this->db->from('p_sekolah');
		$query = $this->db->get();

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
}