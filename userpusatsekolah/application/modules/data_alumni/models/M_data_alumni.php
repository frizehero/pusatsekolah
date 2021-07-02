<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_alumni extends CI_Model {

	function tampil($idsekolahx)
	{
		$this->db->order_by('id_alumni', 'DESC');
		$this->db->where('id_sekolah', $idsekolahx);
		$query = $this->db->get('data_alumni');
		return $query->result();
	}

	function tampilberanda($idsekolahx)
	{
		$this->db->order_by('id_beranda_as', 'DESC');
		$this->db->where('id_sekolah', $idsekolahx);
		$query = $this->db->get('beranda_as');
		return $query->result();
	}

	function tampil_tahun($idsekolahx)
	{
		$this->db->select('thlulus_alumni, COUNT(thlulus_alumni) as total');
		$this->db->group_by('thlulus_alumni');
		$this->db->order_by('total', 'dsc');
		$this->db->where('id_sekolah', $idsekolahx);
		$this->db->from('data_alumni');
		
		$query = $this->db->get();
		return $query->result();
	}

	function tambah()
	{
		$username_alumni 		= $this->input->post('username_alumni');
		$nama_alumni 			= $this->input->post('nama_alumni');
		$thlulus_alumni			= $this->input->post('thlulus_alumni');
		$nisn					= $this->input->post('nisn');
		$tmplahir_alumni 		= $this->input->post('tmplahir_alumni');
		$tgllahir_alumni 		= $this->input->post('tgllahir_alumni');
		$jk_alumni 				= $this->input->post('jk_alumni');
		$status_alumni			= $this->input->post('status_alumni');
		$pekerjaan_fakultas 	= $this->input->post('pekerjaan_fakultas');
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
		$foto_alumni			= $this->input->post('foto_alumni');
		$id_sekolah 			= $this->input->post('id_sekolah');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/images/fotoprofil/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['foto']['name'])
        {
            if ($this->upload->do_upload('foto'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'username_alumni'		=> $username_alumni,
					'nama_alumni'			=> $nama_alumni,
					'thlulus_alumni'		=> $thlulus_alumni,
					'nisn'					=> $nisn,
					'tmplahir_alumni' 		=> $tmplahir_alumni,
					'tgllahir_alumni' 		=> $tgllahir_alumni,
					'jk_alumni'				=> $jk_alumni,
					'status_alumni'			=> $status_alumni,
					'pekerjaan_fakultas'	=> $pekerjaan_fakultas,
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
					'foto_alumni'		 	=> $gbr['file_name'],
					'id_sekolah'			=> $id_sekolah,
					'foto_alumni' 			=> $gbr['file_name'],
					
				);
				$this->db->insert('data_alumni', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
			}	 
		}
		else{
				$data = array(
					'username_alumni'		=> $username_alumni,
					'nama_alumni'			=> $nama_alumni,
					'thlulus_alumni'		=> $thlulus_alumni,
					'nisn'					=> $nisn,
					'tmplahir_alumni' 		=> $tmplahir_alumni,
					'tgllahir_alumni' 		=> $tgllahir_alumni,
					'jk_alumni'				=> $jk_alumni,
					'status_alumni'			=> $status_alumni,
					'pekerjaan_fakultas'	=> $pekerjaan_fakultas,
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
					'foto_alumni'		 	=> 'kosong1.jpeg',
					'id_sekolah'			=> $id_sekolah,
				);
				$this->db->insert('data_alumni', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
			
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

	function get_alumni($limit, $start, $st = NULL)
	{
		
		if ($st == "NIL") $st = "";
		$this->db->select('*')
		->like('nama_alumni',$st);
		$query = $this->db->get('data_alumni',$limit, $start);
		return $query->result();
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
		$this->db->where('id_p_sekolah', $id);
		$query = $this->db->get();
		return $query->result();
	}
}