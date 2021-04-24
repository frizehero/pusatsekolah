<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_event extends CI_Model {

	function tampil()
	{
		return $this->db->get('event_sekolah')->result();
	}

	function tambah()
	{
		$judul_event 	= $this->input->post('judul_event');
		$text_event 	= $this->input->post('text_event');

				$data = array(
					'judul_event'		=> $judul_event,
					'text_event'		=> $text_event,
				);
				$this->db->insert('event_sekolah', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_event',$idnya);
    	return $this->db->get('event_sekolah')->row_array();
	}

	function tampildetail($id)
	{
		$idnya = decrypt_url($id);
		$this->db->where('id_event', $idnya);
		return $this->db->get('event_sekolah')->row_array();
	}

	function edit()
	{
		$judul_event 	= $this->input->post('judul_event');
		$text_event 	= $this->input->post('text_event');

				$data = array(
					'judul_event'		=> $judul_event,
					'text_event'		=> $text_event,
				);
				$this->db->where('id_event',$id)->update('event_sekolah', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_event', $id)->delete('event_sekolah');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('judul_event',$cari)->get('event_sekolah')->result();
	}
}