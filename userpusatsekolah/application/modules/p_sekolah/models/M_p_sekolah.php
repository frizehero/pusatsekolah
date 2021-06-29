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
	
		$this->db->select('*,wilayah_provinsi.nama AS provinsi, wilayah_kabupaten.nama AS kota_kab, wilayah_kecamatan.nama AS kecamatan, wilayah_desa.nama AS kelurahan');
		$this->db->from('p_sekolah');
		$this->db->join('wilayah_provinsi', 'p_sekolah.provinsi_sekolah = wilayah_provinsi.id');
		$this->db->join('wilayah_kabupaten', 'p_sekolah.kota_kab_sekolah = wilayah_kabupaten.id');
		$this->db->join('wilayah_kecamatan', 'p_sekolah.kec_sekolah = wilayah_kecamatan.id');
		$this->db->join('wilayah_desa', 'p_sekolah.kel_sekolah = wilayah_desa.id');
		$this->db->where('id_p_sekolah',$id);
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
		$lat		= $this->input->post('lat');
		$lng		= $this->input->post('lng');
		$namakepsek = $this->input->post('namakepsek');
		$akunkepsek = $this->input->post('akunkepsek');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/images/fotoprofil/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['fotoprofil']['name'])
        {
            if ($this->upload->do_upload('fotoprofil'))
            {
				$gbr = $this->upload->data();
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
					'latitude'			=> $lat,
					'longitude'			=> $lng,
					'nama_kepalasekolah'=> $namakepsek,
					'link_akunkepsek'	=> $akunkepsek,
					'foto_profil' 		=> $gbr['file_name'],
				);
				$this->db->where('id_p_sekolah',$id)->update('p_sekolah', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			
			}	 
		}
		elseif($_FILES['fotosampul']['name'])
        {
            if ($this->upload->do_upload('fotosampul'))
            {
				$gbr = $this->upload->data();
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
					'latitude'			=> $lat,
					'longitude'			=> $lng,
					'nama_kepalasekolah'=> $namakepsek,
					'link_akunkepsek'	=> $akunkepsek,
					'foto_sampul' 		=> $gbr['file_name'],
				);
				$this->db->where('id_p_sekolah',$id)->update('p_sekolah', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			
			}	 
		}
		elseif($_FILES['fotokepsek']['name'])
        {
            if ($this->upload->do_upload('fotokepsek'))
            {
				$gbr = $this->upload->data();
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
					'latitude'			=> $lat,
					'longitude'			=> $lng,
					'nama_kepalasekolah'=> $namakepsek,
					'link_akunkepsek'	=> $akunkepsek,
					'foto_kepsek' 		=> $gbr['file_name'],
				);
				$this->db->where('id_p_sekolah',$id)->update('p_sekolah', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			
			}	 
		}
		else{
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
					'provinsi_sekolah'	=> $provs,
					'kota_kab_sekolah'	=> $kokas,
					'kel_sekolah'		=> $kels,
					'kec_sekolah'		=> $kecs,
					'kpos_sekolah'		=> $kposs,
					'sejarah_sekolah'	=> $sjrhs,
					'nama_sekolah'		=> $namas,
					'latitude'			=> $lat,
					'longitude'			=> $lng,
					'nama_kepalasekolah'=> $namakepsek,
					'link_akunkepsek'	=> $akunkepsek,
				);
				$this->db->where('id_p_sekolah',$id)->update('p_sekolah', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			}
	}

	function hapus($id)
	{
		$this->db->where('id_p_sekolah', $id)->delete('p_sekolah');
	}

	function cari()
	{
		$cari = $this->input->post('cari');
		return $this->db->like('nama_sekolah',$cari)->get('p_sekolah')->result();
	}
}