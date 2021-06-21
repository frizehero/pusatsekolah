<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_alumni extends CI_Model {

	function tampil($idsekolahx)
	{
		$this->db->where('id_sekolah', $idsekolahx);
		$query = $this->db->get('data_alumni');
		return $query->result();
	}
    
    function totaldata($idsekolahx)
	{
		$this->db->where('id_sekolah', $idsekolahx);
		$query = $this->db->get('data_alumni');
		return $query->num_rows();
		
	}

	function tampilkan($idsekolahx,$limit, $start)
	{
		$this->db->where('id_sekolah', $idsekolahx);
		$query = $this->db->get('data_alumni', $limit, $start);
		return $query->result();
		
	}

	function get_alumni($limit, $start, $st = NULL)
	{
		
		if ($st == "NIL") $st = "";
		$this->db->select('*')
		->like('nama_alumni',$st);
		$query = $this->db->get('data_alumni',$limit, $start);
		return $query->result();
	}

	function get_alumni_count($st = NULL)
	{

		if ($st == "NIL") $st = "";
		$this->db->select('*')
		->like('nama_alumni',$st);
		$query = $this->db->get('data_alumni');
		return $query->num_rows();
	}

	function filter ($limit, $start, $st = NULL)
	{
		if ($st == "NIL") $st = "";
		 $this->db->select('*')
		->from ('data_alumni')
		->like('nama_alumni',$st);
	    
		$query = $this->db->get('data_alumni',$limit, $start);
		return $query->result();
	}

	function count_filter ($st = NULL)
	{
        if ($st == "NIL") $st = "";
		 $this->db->select('*')
		->from ('data_alumni')
		->like('nama_alumni',$st);
	    
		$query = $this->db->get();
		return $query->num_rows();
	}


	function tambah()
	{
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
		$id 					= $this->input->post('id');

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
					'id_sekolah'			=> $id,
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
		$id 		= $this->input->post('id');
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

	function cari ($data_alumni)
	{
		$this->db->select('*')
		->from ('data_alumni')
		->like('nama_alumni',$data_alumni);
	
		$query = $this->db->get();
		return $query->result();
	}

	function ambilidsekolah($id)
	{
	
		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('id_admin',$id);
		$query = $this->db->get();


		
    	return $query->row_array();
	}
}