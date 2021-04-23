<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_p_sekolah extends CI_Model {

	function tampil()
	{
		return $this->db->get('p_sekolah')->result();
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_p_sekolah',$idnya);
    	return $this->db->get('p_sekolah')->row_array();
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
		$this->db->join('wilayah_provinsi','p_sekolah.provinsi_sekolah = wilayah_provinsi.id');
		$query = $this->db->get();
    	return $query->row_array();
	}
	
	function provinsi()
	{
		
		$get_prov = $this->db->select('*')->from('wilayah_provinsi')->get();
		return $get_prov->result();
	}

	function edit()
	{
		$id 		= $this->input->post('id');
		$jrsn1 		= $this->input->post('jrsn1');
		$jrsn2 		= $this->input->post('jrsn2');
		$jrsn3		= $this->input->post('jrsn3');
		$jrsn4		= $this->input->post('jrsn4');
		$jrsn5		= $this->input->post('jrsn5');
		$seninm		= $this->input->post('seninm');
		$seninp		= $this->input->post('seninp');
		$selasam	= $this->input->post('selasam');
		$selasap	= $this->input->post('selasap');
		$rabum		= $this->input->post('rabum');
		$rabup		= $this->input->post('rabup');
		$kamism		= $this->input->post('kamism');
		$kamisp		= $this->input->post('kamisp');
		$jumatm		= $this->input->post('jumatm');
		$jumatp		= $this->input->post('jumatp');
		$sabtum		= $this->input->post('sabutm');
		$sabtup		= $this->input->post('sabutp');
		$emails		= $this->input->post('emails');
		$tlps		= $this->input->post('tlps');
		$twitters	= $this->input->post('twitters');
		$igs		= $this->input->post('igs');
		$fbs		= $this->input->post('fbs');
		$lws		= $this->input->post('lws');
		$lvs		= $this->input->post('lvs');
		$jjgs		= $this->input->post('jjgs');
		$stts		= $this->input->post('stts');
		$npsns		= $this->input->post('npsns');
		$akres		= $this->input->post('akres');
		$desks		= $this->input->post('desks');
		$almtls		= $this->input->post('almtls');
		$provs		= $this->input->post('prov');
		$kokas		= $this->input->post('kab');
		$kels		= $this->input->post('des');
		$kecs		= $this->input->post('kec');
		$kposs		= $this->input->post('kposs');
		$sjrhs		= $this->input->post('sjrhs');
		$namas		= $this->input->post('namas');

				$data = array(
					'kompetensi1'		=> $jrsn1,
					'kompetensi2'		=> $jrsn2,
					'kompetensi3'		=> $jrsn3,
					'kompetensi4'		=> $jrsn4,
					'kompetensi5'		=> $jrsn5,
					'senin_m'			=> $seninm,
					'senin_p'			=> $seninp,
					'selasa_m'			=> $selasam,
					'selasa_p'			=> $selasap,
					'rabu_m'			=> $rabum,
					'rabu_p'			=> $rabup,
					'kamis_m'			=> $kamism,
					'kamis_p'			=> $kamisp,
					'jumat_m'			=> $jumatm,
					'jumat_p'			=> $jumatp,
					'sabtu_m'			=> $sabtum,
					'sabtu_p'			=> $sabtup,
					'email'				=> $emails,
					'telphone'			=> $tlps,
					'twitter'			=> $twitters,
					'instagram'			=> $igs,
					'facebook'			=> $fbs,
					'link_web'			=> $lws,
					'link_video'		=> $lvs,
					'jjg_sekolah'		=> $jjgs,
					'stt_sekolah'		=> $stts,
					'npsn_sekolah'		=> $npsns,
					'akre_sekolah'		=> $akres,
					'desk_sekolah'		=> $desks,
					'almtlengkap_sekolah'	=> $almtls,
					'provinsi_sekolah'		=> $provs,
					'kota_kab_sekolah'		=> $kokas,
					'kel_sekolah'		=> $kels,
					'kec_sekolah'		=> $kecs,
					'kpos_sekolah'		=> $kposs,
					'sejarah_sekolah'	=> $sjrhs,
					'nama_sekolah'		=> $namas,
					
				);
				$this->db->where('id_p_sekolah',$id)->update('p_sekolah', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}

	function hapus($id)
	{
		$this->db->where('id_p_sekolah', $id)->delete('p_sekolah');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah',$cari)->get('p_sekolah')->result();
	}
}