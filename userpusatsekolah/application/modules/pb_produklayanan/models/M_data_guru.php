<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data_guru extends CI_Model
{

	function tampil()
	{
		$this->db->from('data_guru');
		$query = $this->db->get();



		return $query->result();
	}

	function tambah()
	{
		$nama_guru 			= $this->input->post('nama_guru');
		$tmplahir_guru		= $this->input->post('tmplahir_guru');
		$jk_guru 			= $this->input->post('jk_guru');
		$mapel_guru 		= $this->input->post('mapel_guru');
		$nip_guru 			= $this->input->post('nip_guru');
		$tgllahir_guru 		= $this->input->post('tgllahir_guru');
		$status_guru 		= $this->input->post('status_guru');
		$alamat_guru 		= $this->input->post('alamat_guru');
		$provinsi_guru 		= $this->input->post('provinsi_guru');
		$kotakab_guru 		= $this->input->post('kotakab_guru');
		$kecamatan_guru 	= $this->input->post('kecamatan_guru');
		$kelurahan_guru 	= $this->input->post('kelurahan_guru');
		$kodepos_guru 		= $this->input->post('kodepos_guru');
		$email_guru 		= $this->input->post('email_guru');
		$instagram_guru 	= $this->input->post('instagram_guru');
		$twitter_guru 		= $this->input->post('twitter_guru');
		$telepon_guru 		= $this->input->post('telepon_guru');
		$facebook_guru 		= $this->input->post('facebook_guru');

		$data = array(
			'nama_guru'				=> $nama_guru,
			'tmplahir_guru'			=> $tmplahir_guru,
			'jk_guru'		 		=> $jk_guru,
			'mapel_guru' 			=> $mapel_guru,
			'nip_guru'				=> $nip_guru,
			'tgllahir_guru'			=> $tgllahir_guru,
			'status_guru'			=> $status_guru,
			'alamat_guru'			=> $alamat_guru,
			'provinsi_guru'			=> $provinsi_guru,
			'kotakab_guru'			=> $kotakab_guru,
			'kecamatan_guru'		=> $kecamatan_guru,
			'kelurahan_guru'		=> $kelurahan_guru,
			'kodepos_guru'			=> $kodepos_guru,
			'email_guru'			=> $email_guru,
			'instagram_guru'		=> $instagram_guru,
			'twitter_guru'			=> $twitter_guru,
			'telepon_guru'			=> $telepon_guru,
			'facebook_guru'			=> $facebook_guru,

		);

		$this->db->insert('data_guru', $data);
		$this->session->set_flashdata('msg', 'suksestambah');
	}

	
	function tampildetail($id)
	{
		$idnya = decrypt_url($id);
		$this->db->where('id_guru', $idnya);
		return $this->db->get('data_guru')->row_array();
	}
	
	function tampiledit($id)
	{
		$idnya = decrypt_url($id);
		$this->db->where('id_guru', $idnya);
		return $this->db->get('data_guru')->row_array();
	}
	
	function edit()
	{
		$id					= $this->input->post('id');
		$nama_guru 			= $this->input->post('nama_guru');
		$tmplahir_guru		= $this->input->post('tmplahir_guru');
		$jk_guru 			= $this->input->post('jk_guru');
		$mapel_guru 		= $this->input->post('mapel_guru');
		$nip_guru 			= $this->input->post('nip_guru');
		$tgllahir_guru 		= $this->input->post('tgllahir_guru');
		$status_guru 		= $this->input->post('status_guru');
		$alamat_guru 		= $this->input->post('alamat_guru');
		$provinsi_guru 		= $this->input->post('provinsi_guru');
		$kotakab_guru 		= $this->input->post('kotakab_guru');
		$kecamatan_guru 	= $this->input->post('kecamatan_guru');
		$kelurahan_guru 	= $this->input->post('kelurahan_guru');
		$kodepos_guru 		= $this->input->post('kodepos_guru');
		$email_guru 		= $this->input->post('email_guru');
		$instagram_guru 	= $this->input->post('instagram_guru');
		$twitter_guru 		= $this->input->post('twitter_guru');
		$telepon_guru 		= $this->input->post('telepon_guru');
		$facebook_guru 		= $this->input->post('facebook_guru');

		$data = array(
			'nama_guru'				=> $nama_guru,
			'tmplahir_guru'			=> $tmplahir_guru,
			'jk_guru'		 		=> $jk_guru,
			'mapel_guru' 			=> $mapel_guru,
			'nip_guru'				=> $nip_guru,
			'tgllahir_guru'			=> $tgllahir_guru,
			'status_guru'			=> $status_guru,
			'alamat_guru'			=> $alamat_guru,
			'provinsi_guru'			=> $provinsi_guru,
			'kotakab_guru'			=> $kotakab_guru,
			'kecamatan_guru'		=> $kecamatan_guru,
			'kelurahan_guru'		=> $kelurahan_guru,
			'kodepos_guru'			=> $kodepos_guru,
			'email_guru'			=> $email_guru,
			'instagram_guru'		=> $instagram_guru,
			'twitter_guru'			=> $twitter_guru,
			'telepon_guru'			=> $telepon_guru,
			'facebook_guru'			=> $facebook_guru,
		);
		$this->db->where('id_guru', $id)->update('data_guru', $data);
		$this->session->set_flashdata('msg', 'suksesedit');
	}



	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_guru', $id)->delete('data_guru');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}
}
