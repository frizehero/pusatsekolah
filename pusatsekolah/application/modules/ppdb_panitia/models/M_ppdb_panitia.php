<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ppdb_panitia extends CI_Model {

	function tampil()
	{
		return $this->db->get('ppdb_panitia')->result();
	}

	function tambah()
	{
		$nama_panitia 			= $this->input->post('nama_panitia');
		$tugas_panitia			= $this->input->post('tugas_panitia');
		$email_panitia 			= $this->input->post('email_panitia');
		$telephone_panitia 		= $this->input->post('telephone_panitia');

		$this->load->library('upload');
		$nmfile = "file_" . time();
		$config['upload_path']		= 'assets/ppdb/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);

		if ($_FILES['foto']['name']) {
			if ($this->upload->do_upload('foto')) {
				$gbr = $this->upload->data();
		$data = array(
			'nama_panitia'			=> $nama_panitia,
			'tugas_panitia'			=> $tugas_panitia,
			'email_panitia'		 	=> $email_panitia,
			'telephone_panitia' 	=> $telephone_panitia,
			'foto_panitia'		 	=> $gbr['file_name'],


				);
				$this->db->insert('ppdb_panitia', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
		} else {
			$data = array(
				'deskripsi_ppdb'		 => $deskripsi_ppdb,
				'fasilitas_sekolah'		 => $fasilitas_sekolah,
				'pendaftaran_ppdb'		 => $pendaftaran_ppdb,
				'validasi_pemberkasan'	 => $validasi_pemberkasan,
				'verifikasi_daftarulang' => $verifikasi_daftarulang,
				'foto_panitia'		 	 => 'kosong1.jpeg',
				
			);
			$this->db->insert('ppdb_panitia', $data);
			$this->session->set_flashdata('msg', 'suksestambah');
		}
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_ppdb',$idnya);
    	return $this->db->get('ppdb_panitia')->row_array();
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_panitia', $id)->delete('ppdb_panitia');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('foto_ppdb',$cari)->get('ppdb_panitia')->result();
	}
}