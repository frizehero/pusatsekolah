<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ppdb_pendaftaran extends CI_Model
{

	function tampil()
	{
		return $this->db->get('ppdb_pendaftaran')->result();
	}

	function tambah()
	{
		$nama_lengkap 			= $this->input->post('nama_lengkap');
		$nisn					= $this->input->post('nisn');
		$tempat_lahir			= $this->input->post('tempat_lahir');
		$tanggal_lahir			= $this->input->post('tanggal_lahir');
		$jenis_kelamin			= $this->input->post('jenis_kelamin');
		$asal_sekolah			= $this->input->post('asal_sekolah');
		$provinsi				= $this->input->post('provinsi');
		$kabupaten_kota			= $this->input->post('kabupaten_kota');
		$kecamatan				= $this->input->post('kecamatan');
		$kelurahan				= $this->input->post('kelurahan');
		$alamat_lengkap			= $this->input->post('alamat_lengkap');
		$kode_pos				= $this->input->post('kode_pos');
		$no_telephone			= $this->input->post('no_telephone');
		$email					= $this->input->post('email');
		$namalengkap_wali		= $this->input->post('namalengkap_wali');
		$pekerjaan_wali			= $this->input->post('pekerjaan_wali');
		$alamatlengkap_wali		= $this->input->post('alamatlengkap_wali');
		$email_wali				= $this->input->post('email_wali');
		$telephone_wali			= $this->input->post('telephone_wali');


		$this->load->library('upload');
		$nmfile = "file_" . time();
		$config['upload_path']		= 'assets/images/ppdb/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);

		if ($_FILES['ppdb']['name']) {
			if ($this->upload->do_upload('ppdb')) {
				$gbr = $this->upload->data();
				$data = array(
					'nama_lengkap'			=> $nama_lengkap,
					'nisn'					=> $nisn,
					'tempat_lahir'			=> $tempat_lahir,
					'tanggal_lahir'			=> $tanggal_lahir,
					'jenis_kelamin'			=> $jenis_kelamin,
					'asal_sekolah'			=> $asal_sekolah,
					'provinsi'				=> $provinsi,
					'kabupaten_kota'		=> $kabupaten_kota,
					'kecamatan'				=> $kecamatan,
					'kelurahan'				=> $kelurahan,
					'alamat_lengkap'		=> $alamat_lengkap,
					'kode_pos'				=> $kode_pos,
					'no_telephone'			=> $no_telephone,
					'email'					=> $email,
					'namalengkap_wali'		=> $namalengkap_wali,
					'pekerjaan_wali'		=> $pekerjaan_wali,
					'alamatlengkap_wali'	=> $alamatlengkap_wali,
					'email_wali'			=> $email_wali,
					'telephone_wali'		=> $telephone_wali,
					'foto_kartupelajar'		=> $gbr['file_name'],


				);
				$this->db->insert('ppdb_pendaftaran', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
		} else {
			$data = array(
				'nama_lengkap'			=> $nama_lengkap,
				'nisn'					=> $nisn,
				'tempat_lahir'			=> $tempat_lahir,
				'tanggal_lahir'			=> $tanggal_lahir,
				'jenis_kelamin'			=> $jenis_kelamin,
				'asal_sekolah'			=> $asal_sekolah,
				'provinsi'				=> $provinsi,
				'kabupaten_kota'		=> $kabupaten_kota,
				'kecamatan'				=> $kecamatan,
				'kelurahan'				=> $kelurahan,
				'alamat_lengkap'		=> $alamat_lengkap,
				'kode_pos'				=> $kode_pos,
				'no_telephone'			=> $no_telephone,
				'email'					=> $email,
				'namalengkap_wali'		=> $namalengkap_wali,
				'pekerjaan_wali'		=> $pekerjaan_wali,
				'alamatlengkap_wali'	=> $alamatlengkap_wali,
				'email_wali'			=> $email_wali,
				'telephone_wali'		=> $telephone_wali,
				'foto_kartupelajar'		=> 'kosong1.jpeg',
				
			);
			$this->db->insert('ppdb_pendaftaran', $data);
			$this->session->set_flashdata('msg', 'suksestambah');
		}
	}

	function tampiledit($id)
	{
		$idnya = decrypt_url($id);
		$this->db->where('id_ppdb_pendaftaran', $idnya);
		return $this->db->get('ppdb_pendaftaran')->row_array();
	}

	function edit()
	{
		$id = $this->input->post('id');
		
		$judul_ppdb_pendaftaran 		= $this->input->post('judul_ppdb_pendaftaran');
		$deskripsi_ppdb_pendaftaran		= $this->input->post('deskripsi_ppdb_pendaftaran');
		$tglawal_ppdb_pendaftaran		= $this->input->post('tglawal_ppdb_pendaftaran');
		$tglakhir_ppdb_pendaftaran		= $this->input->post('tglakhir_ppdb_pendaftaran');


		$this->load->library('upload');
		$nmfile = "file_" . time();
		$config['upload_path']		= 'assets/pamflet_ppdb_pendaftaran/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);

		if ($_FILES['pamflet_ppdb_pendaftaran']['name']) {
			if ($this->upload->do_upload('pamflet_ppdb_pendaftaran')) {
				$gbr = $this->upload->data();
				$data = array(
					'judul_ppdb_pendaftaran'		=> $judul_ppdb_pendaftaran,
					'deskripsi_ppdb_pendaftaran'	=> $deskripsi_ppdb_pendaftaran,
					'tglawal_ppdb_pendaftaran'		=> $tglawal_ppdb_pendaftaran,
					'tglakhir_ppdb_pendaftaran'		=> $tglakhir_ppdb_pendaftaran,
					'pamflet_ppdb_pendaftaran' 		=> $gbr['file_name'],
				);
				$this->db->where('id_ppdb_pendaftaran', $id)->update('ppdb_pendaftaran', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			}
		} else {
			$data = array(
				'judul_ppdb_pendaftaran'		=> $judul_ppdb_pendaftaran,
				'deskripsi_ppdb_pendaftaran'	=> $deskripsi_ppdb_pendaftaran,
				'tglawal_ppdb_pendaftaran'		=> $tglawal_ppdb_pendaftaran,
				'tglakhir_ppdb_pendaftaran'		=> $tglakhir_ppdb_pendaftaran,
				'pamflet_ppdb_pendaftaran' 		=> 'kosong1.png',
			);
			$this->db->where('id_ppdb_pendaftaran', $id)->update('ppdb_pendaftaran', $data);
			$this->session->set_flashdata('msg', 'suksesedit');
		}
	}

	function hapus($id)
	{
		$this->db->where('id_ppdb_pendaftaran', $id)->delete('ppdb_pendaftaran');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('judul_ppdb_pendaftaran', $cari)->get('ppdb_pendaftaran')->result();
	}
}
