<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_guru extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_guru')->result();
	}

	function tambah()
	{
		$nama 			= $this->input->post('nama_guru');
		$nip			= $this->input->post('nip_guru');
		$tempat_lahir 	= $this->input->post('tmplahir_guru');
		$tanggal_lahir 	= $this->input->post('tgllahir_guru');
		$jenis_kelamin 	= $this->input->post('jk_guru');
		$status 		= $this->input->post('status_guru');
		$mapel 			= $this->input->post('mapel_guru');
		$alamat_lengkap = $this->input->post('alamatlengkap_guru');
		$provinsi 		= $this->input->post('provinsi_guru');
		$kotakab 		= $this->input->post('kotakab_guru');
		$kecamatan 		= $this->input->post('kec_guru');
		$kelurahan 		= $this->input->post('kelurahan_guru');
		$kodepos 		= $this->input->post('kodepos_guru');
		$email 			= $this->input->post('email_guru');
		$telephone 		= $this->input->post('telephone_guru');
		$instagram 		= $this->input->post('instagram_guru');
		$facebook 		= $this->input->post('facebook_guru');
		$twitter 		= $this->input->post('twitter_guru');

				$data = array(
					'nama_guru'				=> $nama,
					'nip_guru'				=> $nip,
					'tmplahir_guru' 		=> $tempat_lahir,
					'tgllahir_guru' 		=> $tanggal_lahir,
					'jk_guru'				=> $jenis_kelamin,
					'status_guru'			=> $status,
					'mapel_guru'			=> $mapel,
					'alamatlengkap_guru'	=> $alamat_lengkap,
					'provinsi_guru'			=> $provinsi,
					'kotakab_guru'			=> $kotakab,
					'kec_guru'				=> $kecamatan,
					'kelurahan_guru'		=> $kelurahan,
					'kodepos_guru'			=> $kodepos,
					'email_guru'			=> $email,
					'telephone_guru'		=> $telephone,
					'instagram_guru'		=> $instagram,
					'facebook_guru'			=> $facebook,
					'twitter_guru'			=> $twitter,
				);

				$this->db->insert('data_guru', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_guru',$idnya);
    	return $this->db->get('data_guru')->row_array();
    }

    function edit()
	{
		$id_guru		= $this->input->post('id_guru');
		$nama 			= $this->input->post('nama_guru');
		$nip			= $this->input->post('nip_guru');
		$tempat_lahir 	= $this->input->post('tmplahir_guru');
		$tanggal_lahir 	= $this->input->post('tgllahir_guru');
		$jenis_kelamin 	= $this->input->post('jk_guru');
		$status 		= $this->input->post('status_guru');
		$mapel 			= $this->input->post('mapel_guru');
		$alamat_lengkap = $this->input->post('alamatlengkap_guru');
		$provinsi 		= $this->input->post('provinsi_guru');
		$kotakab 		= $this->input->post('kotakab_guru');
		$kecamatan 		= $this->input->post('kec_guru');
		$kelurahan 		= $this->input->post('kelurahan_guru');
		$kodepos 		= $this->input->post('kodepos_guru');
		$email 			= $this->input->post('email_guru');
		$telephone 		= $this->input->post('telephone_guru');
		$instagram 		= $this->input->post('instagram_guru');
		$facebook 		= $this->input->post('facebook_guru');
		$twitter 		= $this->input->post('twitter_guru');

				$data = array(
					'nama_guru'				=> $nama,
					'nip_guru'				=> $nip,
					'tmplahir_guru' 		=> $tempat_lahir,
					'tgllahir_guru' 		=> $tanggal_lahir,
					'jk_guru'				=> $jenis_kelamin,
					'status_guru'			=> $status,
					'mapel_guru'			=> $mapel,
					'alamatlengkap_guru'	=> $alamat_lengkap,
					'provinsi_guru'			=> $provinsi,
					'kotakab_guru'			=> $kotakab,
					'kec_guru'				=> $kecamatan,
					'kelurahan_guru'		=> $kelurahan,
					'kodepos_guru'			=> $kodepos,
					'email_guru'			=> $email,
					'telephone_guru'		=> $telephone,
					'instagram_guru'		=> $instagram,
					'facebook_guru'			=> $facebook,
					'twitter_guru'			=> $twitter,
				);
				$this->db->where('id_guru',$id)->update('data_guru', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}

	function hapus($id)
	{
		$this->db->where('id_guru', $id)->delete('data_guru');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_guru',$cari)->get('data_guru')->result();
	}
}