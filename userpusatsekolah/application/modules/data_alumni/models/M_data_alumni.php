<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_alumni extends CI_Model {

	function tampil()
	{
		$this->db->from('data_alumni');
		$query = $this->db->get();



		return $query->result();
	}

	function tambah()
	{
		$nama_alumni 			= $this->input->post('nama_alumni');
		$username				= $this->input->post('username');
		$thlulus_alumni			= $this->input->post('thlulus_alumni');
		$nisn					= $this->input->post('nisn');
		$tmplahir_alumni 		= $this->input->post('tmplahir_alumni');
		$tgllahir_alumni 		= $this->input->post('tgllahir_alumni');
		$jk_alumni 				= $this->input->post('jk_alumni');
		$status_alumni			= $this->input->post('status_alumni');
		$sekolah_bekerja		= $this->input->post('sekolah_bekerja');
		$alamatlengkap_alumni	= $this->input->post('alamatlengkap_alumni');
		$provinsi_alumni		= $this->input->post('provinsi_alumni');
		$kotakab_alumni			= $this->input->post('kotakab_alumni');
		$kec_alumni 			= $this->input->post('kec_alumni');
		$kelurahan_alumni		= $this->input->post('kelurahan_alumni');
		$kodepos_alumni			= $this->input->post('kodepos_alumni');
		$email_alumni			= $this->input->post('email_alumni');
		$telephone_alumni		= $this->input->post('telephone_alumni');
		$instagram_alumni		= $this->input->post('instagram_alumni');
		$facebook_alumni		= $this->input->post('facebook_alumni');
		$twitter_alumni			= $this->input->post('twitter_alumni');
		$deskripsi_alumni		= $this->input->post('deskripsi_alumni');

				$data = array(
					'nama_alumni'			=> $nama_alumni,
					'username'				=> $username,
					'thlulus_alumni'		=> $thlulus_alumni,
					'nisn'					=> $nisn,
					'tmplahir_alumni' 		=> $tmplahir_alumni,
					'tgllahir_alumni' 		=> $tgllahir_alumni,
					'jk_alumni'				=> $jk_alumni,
					'status_alumni'			=> $status_alumni,
					'sekolah_bekerja'		=> $sekolah_bekerja,
					'alamatlengkap_alumni'	=> $alamatlengkap_alumni,
					'provinsi_alumni'		=> $provinsi_alumni,
					'kotakab_alumni'		=> $kotakab_alumni,
					'kec_alumni'			=> $kec_alumni,
					'kelurahan_alumni'		=> $kelurahan_alumni,
					'kodepos_alumni'		=> $kodepos_alumni,
					'email_alumni'			=> $email_alumni,
					'telephone_alumni'		=> $telephone_alumni,
					'instagram_alumni'		=> $instagram_alumni,
					'facebook_alumni'		=> $facebook_alumni,
					'twitter_alumni'		=> $twitter_alumni,
					'deskripsi_alumni'		=> $deskripsi_alumni,
				);

				$this->db->insert('data_alumni', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_alumni',$idnya);
    	return $this->db->get('data_alumni')->row_array();
    }

    function edit()
	{
		$id_alumni				= $this->input->post('id_alumni');
		$nama_alumni 			= $this->input->post('nama_alumni');
		$thlulus_alumni			= $this->input->post('thlulus_alumni');
		$nisn					= $this->input->post('nisn');
		$tmplahir_alumni 		= $this->input->post('tmplahir_alumni');
		$tgllahir_alumni 		= $this->input->post('tgllahir_alumni');
		$jk_alumni 				= $this->input->post('jk_alumni');
		$status_alumni			= $this->input->post('status_alumni');
		$sekolah_bekerja		= $this->input->post('sekolah_bekerja');
		$alamatlengkap_alumni	= $this->input->post('alamatlengkap_alumni');
		$provinsi_alumni		= $this->input->post('provinsi_alumni');
		$kotakab_alumni			= $this->input->post('kotakab_alumni');
		$kec_alumni 			= $this->input->post('kec_alumni');
		$kelurahan_alumni		= $this->input->post('kelurahan_alumni');
		$kodepos_alumni			= $this->input->post('kodepos_alumni');
		$email_alumni			= $this->input->post('email_alumni');
		$telephone_alumni		= $this->input->post('telephone_alumni');
		$instagram_alumni		= $this->input->post('instagram_alumni');
		$facebook_alumni		= $this->input->post('facebook_alumni');
		$twitter_alumni			= $this->input->post('twitter_alumni');

				$data = array(
					'nama_alumni'			=> $nama_alumni,
					'thlulus_alumni'		=> $thlulus_alumni,
					'nisn'					=> $nisn,
					'tmplahir_alumni' 		=> $tmplahir_alumni,
					'tgllahir_alumni' 		=> $tgllahir_alumni,
					'jk_alumni'				=> $jk_alumni,
					'status_alumni'			=> $status_alumni,
					'sekolah_bekerja'		=> $sekolah_bekerja,
					'alamatlengkap_alumni'	=> $alamatlengkap_alumni,
					'provinsi_alumni'		=> $provinsi_alumni,
					'kotakab_alumni'		=> $kotakab_alumni,
					'kec_alumni'			=> $kec_alumni,
					'kelurahan_alumni'		=> $kelurahan_alumni,
					'kodepos_alumni'		=> $kodepos_alumni,
					'email_alumni'			=> $email_alumni,
					'telephone_alumni'		=> $telephone_alumni,
					'instagram_alumni'		=> $instagram_alumni,
					'facebook_alumni'		=> $facebook_alumni,
					'twitter_alumni'		=> $twitter_alumni,
				);
				$this->db->where('id_alumni',$id)->update('data_alumni', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}

	function tampildetail($id)
	{
		$idnya = decrypt_url($id);
		$this->db->where('id_alumni', $idnya);
		return $this->db->get('data_alumni')->row_array();
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_alumni', $id)->delete('data_alumni');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

	function totalalumni()
	{
		return $this->db->get('data_alumni')->num_rows();
	}

	function totalperempuan()
	{
		$this->db->select('*');
		$this->db->from('data_alumni');
		$this->db->where('jk_alumni','Perempuan');
		$query = $this->db->get();
		
    	return $query->num_rows();
	}

	function totallaki()
	{
		$this->db->select('*');
		$this->db->from('data_alumni');
		$this->db->where('jk_alumni','laki-laki');
		$query = $this->db->get();
		
    	return $query->num_rows();
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_alumni',$cari)->get('data_alumni')->result();
	}
}