<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ppdb_pendaftaran extends CI_Model {

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
					'deskripsi_ppdb'		=> $deskripsi_ppdb,
					'fasilitas_sekolah'		=> $fasilitas_sekolah,
					'ppdb'				 	=> $gbr['file_name'],


				);
				$this->db->insert('ppdb_pendaftaran', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
		} else {
			$data = array(
				'deskripsi_ppdb'		=> $deskripsi_ppdb,
				'fasilitas_sekolah'		=> $fasilitas_sekolah,
				'ppdb'				 	=> 'kosong1.jpeg',
				
			);
			$this->db->insert('ppdb_pendaftaran', $data);
			$this->session->set_flashdata('msg', 'suksestambah');
		}
	}

	function tampildetail($id)
	{
		$idnya = decrypt_url($id);
		$this->db->where('id_pendaftaran', $idnya);
		return $this->db->get('ppdb_pendaftaran')->row_array();
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_pendaftaran',$idnya);
    	return $this->db->get('ppdb_pendaftaran')->row_array();
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_pendaftaran', $id)->delete('ppdb_pendaftaran');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('foto_ppdb',$cari)->get('ppdb_pendaftaran')->result();
	}
}