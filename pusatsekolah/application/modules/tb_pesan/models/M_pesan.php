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

	function tampilpesan($iduser)
	{
		$this->db->from('tb_pesan');
		$this->db->where('id_user', $iduser);
		$query = $this->db->get();

		return $query->result();
	}

	function tampildetail($id)
	{
		$idnya = decrypt_url($id);
		$this->db->where('id_user', $idnya);
		return $this->db->get('tb_pesan')->row_array();
	}


	function tambah()
	{
		$pesan		= $this->input->post('pesan');
		$iduser		= $this->input->post('iduser');
		$namauser		= $this->input->post('namauser');
		$data = array(
			'id_user'			=> $iduser,
			'nama_user'			=> $namauser,
			'pesan'				=> $pesan,
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

		$this->db->select('*,tb_login.id_admin AS id_user, tb_login.nama AS nama_user');
		$this->db->from('tb_pesan');
		$this->db->join('tb_login', 'tb_pesan.id_user = tb_login.id_admin');
		/*$this->db->join('tb_login', 'tb_pesan.nama_user = tb_login.nama');*/
		$this->db->where('id_pesan', $id);
		$query = $this->db->get();
		return $query->result();
	}
}
