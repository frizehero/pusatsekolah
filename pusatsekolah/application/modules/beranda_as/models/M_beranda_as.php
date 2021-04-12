<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beranda_as extends CI_Model {

	function tampil()
	{
		return $this->db->get('beranda_as')->result();
	}

	function tampilkomentar()
	{
		return $this->db->get('beranda_as')->result();
	}

	function tambah()
	{
		$posts 		= $this->input->post('posts');

				$data = array(
					'post_sekolah'		=> $posts,

				);
				$this->db->insert('beranda_as', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_p_sekolah',$idnya);
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
		return $this->db->like('nama_sekolah',$cari)->get('sekolah')->result();
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
	
		$this->db->select('*');
		$this->db->from('p_sekolah');
		$this->db->where('id_p_sekolah',$id);
		$query = $this->db->get();
    	return $query->result();
	}

}
