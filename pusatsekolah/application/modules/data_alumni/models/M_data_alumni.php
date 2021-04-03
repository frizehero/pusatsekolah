<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_alumni extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_alumni')->result();
	}

	function tambah()
	{
		$nama 				= $this->input->post('nama_alumni');
		$nisn				= $this->input->post('nisn');
		$tempat_lahir 		= $this->input->post('tmplahir_alumni');
		$tanggal_lahir 		= $this->input->post('tgllahir_alumni');
		$jenis_kelamin 		= $this->input->post('jk_alumni');
		$status 			= $this->input->post('status_alumni');
		$sekolah_bekerja	= $this->input->post('sekolah_bekerja');
		$alamat_lengkap		= $this->input->post('alamatlengkap_alumni');
		$provinsi 			= $this->input->post('provinsi_alumni');
		$kotakab 			= $this->input->post('kotakab_alumni');
		$kecamatan 			= $this->input->post('kec_alumni');
		$kelurahan 			= $this->input->post('kelurahan_alumni');
		$kodepos 			= $this->input->post('kodepos_alumni');
		$email 				= $this->input->post('email_alumni');
		$telephone 			= $this->input->post('telephone_alumni');
		$instagram 			= $this->input->post('instagram_alumni');
		$facebook 			= $this->input->post('facebook_alumni');
		$twitter 			= $this->input->post('twitter_alumni');

				$data = array(
					'nama_alumni'			=> $nama,
					'nisn'					=> $nisn,
					'tmplahir_alumni' 		=> $tempat_lahir,
					'tgllahir_alumni' 		=> $tanggal_lahir,
					'jk_alumni'				=> $jenis_kelamin,
					'status_alumni'			=> $status,
					'sekolah_bekerja'		=> $sekolah_bekerja,
					'alamatlengkap_alumni'	=> $alamat_lengkap,
					'provinsi_alumni'		=> $provinsi,
					'kotakab_alumni'		=> $kotakab,
					'kec_alumni'			=> $kecamatan,
					'kelurahan_alumni'		=> $kelurahan,
					'kodepos_alumni'		=> $kodepos,
					'email_alumni'			=> $email,
					'telephone_alumni'		=> $telephone,
					'instagram_alumni'		=> $instagram,
					'facebook_alumni'		=> $facebook,
					'twitter_alumni'		=> $twitter,
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
		$id_alumni		= $this->input->post('id_alumni');
		$nama 			= $this->input->post('nama_alumni');
		$nisn			= $this->input->post('nisn');
		$tempat_lahir 	= $this->input->post('tmplahir_alumni');
		$tanggal_lahir 	= $this->input->post('tgllahir_alumni');
		$jenis_kelamin 	= $this->input->post('jk_alumni');
		$status 		= $this->input->post('status_alumni');
		$mapel 			= $this->input->post('mapel_alumni');
		$alamat_lengkap = $this->input->post('alamatlengkap_alumni');
		$provinsi 		= $this->input->post('provinsi_alumni');
		$kotakab 		= $this->input->post('kotakab_alumni');
		$kecamatan 		= $this->input->post('kec_alumni');
		$kelurahan 		= $this->input->post('kelurahan_alumni');
		$kodepos 		= $this->input->post('kodepos_alumni');
		$email 			= $this->input->post('email_alumni');
		$telephone 		= $this->input->post('telephone_alumni');
		$instagram 		= $this->input->post('instagram_alumni');
		$facebook 		= $this->input->post('facebook_alumni');
		$twitter 		= $this->input->post('twitter_alumni');

				$data = array(
					'nama_alumni'			=> $nama,
					'nisn'					=> $nisn,
					'tmplahir_alumni' 		=> $tempat_lahir,
					'tgllahir_alumni' 		=> $tanggal_lahir,
					'jk_alumni'				=> $jenis_kelamin,
					'status_alumni'			=> $status,
					'sekolah_bekerja'		=> $sekolah_bekerja,
					'alamatlengkap_alumni'	=> $alamat_lengkap,
					'provinsi_alumni'		=> $provinsi,
					'kotakab_alumni'		=> $kotakab,
					'kec_alumni'			=> $kecamatan,
					'kelurahan_alumni'		=> $kelurahan,
					'kodepos_alumni'		=> $kodepos,
					'email_alumni'			=> $email,
					'telephone_alumni'		=> $telephone,
					'instagram_alumni'		=> $instagram,
					'facebook_alumni'		=> $facebook,
					'twitter_alumni'		=> $twitter,
				);
				$this->db->where('id_alumni',$id)->update('data_alumni', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}

	function hapus($id)
	{
		$this->db->where('id_alumni', $id)->delete('data_alumni');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_alumni',$cari)->get('data_alumni')->result();
	}
}