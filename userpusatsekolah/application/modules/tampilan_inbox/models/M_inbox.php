<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_inbox extends CI_Model
{

	function tampil()
	{
		//$this->db->order_by('id_beranda_as', 'DESC');
		//$query = $this->db->get('beranda_as');
		//return $query->result();

		$this->db->select('DISTINCT(id_penerima),id_pesan,id_user,pesan,time,id_penerima,nama_penerima, tb_login.nama AS nama_penerima');
		$this->db->from('tb_pesan');
		$this->db->join('tb_login', 'tb_pesan.id_penerima = tb_login.id_admin');
		$this->db->order_by('id_pesan', "desc")->limit(1);
		$query = $this->db->get();

		return $query->result();
	}

	function tampilnamapenerima($id)
	{
		$nama_penerima = decrypt_url($id);
		$this->db->where('nama_penerima', $nama_penerima);
		return $this->db->get('tb_pesan')->row_array();
	}

	function tampilpesan($iduser)
	{
		$this->db->from('tb_pesan');
		$this->db->where('id_user', $iduser);
		$query = $this->db->get();

		return $query->result();
	}

	function tampildetail($id_penerima)
	{
		$this->db->select('*,tb_login.nama AS nama_penerima');
		$this->db->from('tb_pesan');
		$this->db->join('tb_login', 'tb_pesan.id_penerima = tb_login.id_admin');
		$this->db->where('id_penerima', $id_penerima);
		$query = $this->db->get();
		return $query->result();
	}

	function tampilidpenerima($id)
	{
		$idpenerima = decrypt_url($id);
		$this->db->where('id_penerima', $idpenerima);
		return $this->db->get('tb_pesan')->row_array();
	}

	function tambah()
	{
		$pesan				= $this->input->post('pesan');
		$id_user			= $this->input->post('id_user');
		$id_penerima		= $this->input->post('id_penerima');
		$nama_penerima		= $this->input->post('nama_penerima');
		$id_sekolah			= $this->input->post('id_sekolah');


		$data = array(
			'id_user'			=> $id_user,
			'pesan'				=> $pesan,
			'id_penerima'		=> $id_penerima,
			'nama_penerima'		=> $nama_penerima,
			'id_sekolah'		=> $id_sekolah,
		);
		$this->db->insert('tb_pesan', $data);
		//$last_id = $this->db->insert_id();
	}

	function tampiledit($id)
	{
		$idnya = decrypt_url($id);
		$this->db->where('id_p_sekolah', $idnya);
		return $this->db->get('p_sekolah')->row_array();
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_beranda_as', $id)->delete('beranda_as');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah', $cari)->get('sekolah')->result();
	}

	function ambilidsekolah($id)
	{

		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('id_admin', $id);
		$query = $this->db->get();



		return $query->row_array();
	}

	function ambilidpenerima($id)
	{

		$this->db->select('*');
		$this->db->from('tb_pesan');
		$this->db->where('id_penerima', $id);
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
