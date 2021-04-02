<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sosmed_as extends CI_Model {

	function tampil()
	{
		return $this->db->get('sosmed_as')->result();
	}

	/*function tambah()
	{
		$kode 		= $this->input->post('kode');
		$nama 		= $this->input->post('nama');
		$pj			= $this->input->post('pj');
		$keterangan	= $this->input->post('ket');

				$data = array(
					'kode_room'		=> $kode,
					'nama_room'		=> $nama,
					'pj_room'		=> $pj,
					'ket_room'		=> $keterangan,
				);
				$this->db->insert('inventory_room', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}*/

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_sosmed_sekolah',$idnya);
    	return $this->db->get('sosmed_as')->row_array();
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
				$this->db->where('id_sosmed_sekolah',$id)->update('sosmed_as', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_sosmed_as', $id)->delete('sosmed_as');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}