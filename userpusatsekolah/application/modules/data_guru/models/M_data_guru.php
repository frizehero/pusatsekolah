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

	function tampilberanda($idsekolahx)
	{
		$this->db->order_by('id_beranda_as', 'DESC');
		$this->db->where('id_sekolah', $idsekolahx);
		$query = $this->db->get('beranda_as');
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


	function ambilidsekolah($id)
	{
	
		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('id_admin',$id);
		$query = $this->db->get();


		
    	return $query->row_array();
	}

	function tampilkompetensi($id)
	{

		$this->db->select('*,wilayah_provinsi.nama AS provinsi, wilayah_kabupaten.nama AS kota_kab, wilayah_kecamatan.nama AS kecamatan, wilayah_desa.nama AS kelurahan');
		$this->db->from('p_sekolah');
		$this->db->join('wilayah_provinsi', 'p_sekolah.provinsi_sekolah = wilayah_provinsi.id');
		$this->db->join('wilayah_kabupaten', 'p_sekolah.kota_kab_sekolah = wilayah_kabupaten.id');
		$this->db->join('wilayah_kecamatan', 'p_sekolah.kec_sekolah = wilayah_kecamatan.id');
		$this->db->join('wilayah_desa', 'p_sekolah.kel_sekolah = wilayah_desa.id');
		$this->db->where('id_p_sekolah', $id);
		$query = $this->db->get();
		return $query->result();
	}

}
