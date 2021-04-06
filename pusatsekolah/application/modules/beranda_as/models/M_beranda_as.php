<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beranda_as extends CI_Model {

	function tampil()
	{
		return $this->db->get('p_sekolah')->result();
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_p_sekolah',$idnya);
    	return $this->db->get('p_sekolah')->row_array();
	}

	function hapus($id)
	{
		$this->db->where('id_sekolah', $id)->delete('sekolah');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah',$cari)->get('sekolah')->result();
	}
}