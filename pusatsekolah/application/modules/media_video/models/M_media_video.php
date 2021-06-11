<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_media_video extends CI_Model {

	function tampil()
	{
		return $this->db->get('media_video')->result();
	}

	function tambah()
	{
		$video_media 					= $this->input->post('video_media');

		$data = array(
			'video_media'				=> $video_media,

		);

		$this->db->insert('media_video', $data);
		$this->session->set_flashdata('msg', 'suksestambah');
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_video',$idnya);
    	return $this->db->get('media_video')->row_array();
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_video', $id)->delete('media_video');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('vidio_media',$cari)->get('media_video')->result();
	}
}