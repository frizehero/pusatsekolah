<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tampilan_berita extends CI_Model
{

	function tampil()
	{
		$this->db->order_by('id_beranda_as', 'DESC');
		$query = $this->db->get('beranda_as');
		return $query->result();
	}

	function filter ($tampilan_berita)
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

	
	function ambilidsekolah($id)
	{

		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('id_admin', $id);
		$query = $this->db->get();



		return $query->row_array();
	}

	function tampilkompetensi($id)
	{

		$this->db->select('*');
		$this->db->from('p_sekolah');
		$this->db->where('id_p_sekolah', $id);
		$query = $this->db->get();
		return $query->result();
	}
}
