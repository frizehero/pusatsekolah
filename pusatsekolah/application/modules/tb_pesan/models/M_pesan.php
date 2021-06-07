<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pesan extends CI_Model
{

	function tampil()
	{
		$this->db->from('tb_pesan');
		$query = $this->db->get();

		return $query->result();
	}


	function tambah()
	{
		$pesan		= $this->input->post('pesan');

		$data = array(
			'pesan'			=> $pesan,
		);
		$this->db->insert('tb_pesan', $data);
	}


	function hapus($id)
	{
		$this->db->where('tb_pesan', $id)->delete('tb_pesan');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('isi_pesan', $cari)->get('pesan')->result();
	}
}
