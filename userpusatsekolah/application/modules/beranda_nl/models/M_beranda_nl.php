<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beranda_nl extends CI_Model {


	function tampil()
	{
		$this->db->order_by('id_p_sekolah', 'DESC');
		$query = $this->db->get('P_sekolah');
		return $query->result();
	}

	function totalakun()
	{
		return $this->db->get('tb_login')->num_rows();
	}

	function totalsekolah()
	{
		return $this->db->get('P_sekolah')->num_rows();
	}

	function totalkomentar()
	{
		return $this->db->get('komentar')->num_rows();
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah',$cari)->get('sekolah')->result();
	}
}