<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_sosmed_as extends CI_Model
{

	function tampil()
	{
		return $this->db->get('sosmed_as')->result();
	}

	/*function tambah()
	{
		$email 			= $this->input->post('email');
		$telephone		= $this->input->post('telephone');
		$twitter		= $this->input->post('twitter');
		$instagram		= $this->input->post('instagram');
		$facebook		= $this->input->post('facebook');
		$linkvideo		= $this->input->post('linkvideo');
		$linkwebsite	= $this->input->post('linkwebsite');
		{
			$data = array(
				'email_sekolah'		=> $email,
				'tlp_sekolah'		=> $telephone,
				'twitter_sekolah'	=> $twitter,
				'ig_sekolah'		=> $instagram,
				'fb_sekolah'		=> $facebook,
				'lvp_sekolah'		=> $linkvideo,
				'lw_sekolah'		=> $linkwebsite,
			);
			$this->db->insert('sekolah', $data);
			$this->session->set_flashdata('msg', 'suksestambah');
		}
	}*/

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_sosmed_sekolah',$idnya);
    	return $this->db->get('sekolah')->row_array();
	}

	function edit()
	{
		$id 			= $this->input->post('id');
		$email 			= $this->input->post('email');
		$telephone		= $this->input->post('telephone');
		$twitter		= $this->input->post('twitter');
		$instagram		= $this->input->post('instagram');
		$facebook		= $this->input->post('facebook');
		$linkvideo		= $this->input->post('linkvideo');
		$linkwebsite	= $this->input->post('linkwebsite');
		
				$data = array(
					'email_sekolah'		=> $email,
					'tlp_sekolah'		=> $telephone,
					'twitter_sekolah'	=> $twitter,
					'ig_sekolah'		=> $instagram,
					'fb_sekolah'		=> $facebook,
					'lvp_sekolah'		=> $linkvideo,
					'lw_sekolah'		=> $linkwebsite,
				);
				$this->db->where('id_sosmed_sekolah',$id)->update('sekolah', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
		
	}
	
	function hapus($id)
	{
		$this->db->where('id_sekolah', $id)->delete('sekolah');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah', $cari)->get('sekolah')->result();
	}
}
