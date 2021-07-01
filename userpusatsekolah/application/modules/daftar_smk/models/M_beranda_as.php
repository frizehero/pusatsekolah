<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_beranda_as extends CI_Model
{

	function tampil($idsekolahx)
	{
		$this->db->order_by('id_beranda_as', 'DESC');
		$this->db->where('id_sekolah', $idsekolahx);
		$query = $this->db->get('beranda_as');
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

	function semuasekolah()
	{
	
		$this->db->select('*');
		$this->db->from('p_sekolah');
		$this->db->where('jjg_sekolah','SMK');
		$query = $this->db->get();


		
    	return $query->result();
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
	
		function cari()
		{
			$cari 		= $this->input->post('cari');
			return $this->db->like('nama_sekolah', $cari)->get('sekolah')->result();
		}
}
