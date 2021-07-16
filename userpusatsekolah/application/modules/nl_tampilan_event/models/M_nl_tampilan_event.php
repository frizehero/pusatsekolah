<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_nl_tampilan_event extends CI_Model
{

	function tampil()
	{
		$this->db->order_by('id_event', 'DESC');
		$query = $this->db->get('event_sekolah');
		return $query->result();
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah', $cari)->get('sekolah')->result();
	}
}
