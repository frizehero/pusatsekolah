<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ppdb_sekolah extends CI_Model {

	function tampil()
	{
		return $this->db->get('ppdb_sekolah')->result();
	}

	function tambah()
	{
		$deskripsi_ppdb 			= $this->input->post('deskripsi_ppdb');
		$fasilitas_sekolah			= $this->input->post('fasilitas_sekolah');
		$pendaftaran_ppdb	 		= $this->input->post('pendaftaran_ppdb');
		$validasi_pemberkasan	 	= $this->input->post('validasi_pemberkasan');
		$verifikasi_daftarulang		= $this->input->post('verifikasi_daftarulang');


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
					'deskripsi_ppdb'		 => $deskripsi_ppdb,
					'fasilitas_sekolah'		 => $fasilitas_sekolah,
					'pendaftaran_ppdb'		 => $pendaftaran_ppdb,
					'validasi_pemberkasan'	 => $validasi_pemberkasan,
					'verifikasi_daftarulang' => $verifikasi_daftarulang,
					'pamflet_ppdb'		 	 => $gbr['file_name'],


				);
				$this->db->insert('ppdb_sekolah', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
		} else {
			$data = array(
				'deskripsi_ppdb'		 => $deskripsi_ppdb,
				'fasilitas_sekolah'		 => $fasilitas_sekolah,
				'pendaftaran_ppdb'		 => $pendaftaran_ppdb,
				'validasi_pemberkasan'	 => $validasi_pemberkasan,
				'verifikasi_daftarulang' => $verifikasi_daftarulang,
				'pamflet_ppdb'		 	 => 'kosong1.jpeg',
				
			);
			$this->db->insert('ppdb_sekolah', $data);
			$this->session->set_flashdata('msg', 'suksestambah');
		}
	}

	function tampiledit($id)
	{
		$idnya = decrypt_url($id);
		$this->db->where('id_ppdb', $idnya);
		return $this->db->get('ppdb_sekolah')->row_array();
	}

	function edit()
	{
		$id 						= $this->input->post('id');
		$deskripsi_ppdb 			= $this->input->post('deskripsi_ppdb');
		$fasilitas_sekolah			= $this->input->post('fasilitas_sekolah');
		$pendaftaran_ppdb	 		= $this->input->post('pendaftaran_ppdb');
		$validasi_pemberkasan	 	= $this->input->post('validasi_pemberkasan');
		$verifikasi_daftarulang		= $this->input->post('verifikasi_daftarulang');


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
					'deskripsi_ppdb'		 => $deskripsi_ppdb,
					'fasilitas_sekolah'		 => $fasilitas_sekolah,
					'pendaftaran_ppdb'		 => $pendaftaran_ppdb,
					'validasi_pemberkasan'	 => $validasi_pemberkasan,
					'verifikasi_daftarulang' => $verifikasi_daftarulang,
					'pamflet_ppdb'		 	 => $gbr['file_name'],
				);
				$this->db->where('id_ppdb', $id)->update('ppdb_sekolah', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			}
		} else {
			$data = array(
				'deskripsi_ppdb'		 => $deskripsi_ppdb,
				'fasilitas_sekolah'		 => $fasilitas_sekolah,
				'pendaftaran_ppdb'		 => $pendaftaran_ppdb,
				'validasi_pemberkasan'	 => $validasi_pemberkasan,
				'verifikasi_daftarulang' => $verifikasi_daftarulang,
			);
			$this->db->where('id_ppdb', $id)->update('ppdb_sekolah', $data);
			$this->session->set_flashdata('msg', 'suksesedit');
		}

		return "kosong.jpeg";
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_ppdb', $id)->delete('ppdb_sekolah');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('foto_ppdb',$cari)->get('ppdb_sekolah')->result();
	}
}