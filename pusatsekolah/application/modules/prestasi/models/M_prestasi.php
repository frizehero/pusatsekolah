<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_prestasi extends CI_Model
{

	function tampil()
	{
		return $this->db->get('prestasi')->result();
	}

	function tampiledit($id)
	{
		$idnya = decrypt_url($id);
		$this->db->where('id_prestasi', $idnya);
		return $this->db->get('prestasi')->row_array();
	}

	function tambah()
	{
		$namap 		= $this->input->post('nama_prestasi');
		$jenisp		= $this->input->post('jenis_prestasi');
		$tingkatp	= $this->input->post('tingkat_prestasi');
		$juara		= $this->input->post('juara');
		$tanggalp	= $this->input->post('tgl_prestasi');


		$this->load->library('upload');
		$nmfile = "file_" . time();
		$config['upload_path']		= 'assets/gambar-prestasi/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);

		if ($_FILES['gambar']['name']) {
			if ($this->upload->do_upload('gambar')) {
				$gambarp = $this->upload->data();
				$data = array(
					'nama_prestasi'		=> $namap,
					'jenis_prestasi'	=> $jenisp,
					'tingkat_prestasi'	=> $tingkatp,
					'juara'				=> $juara,
					'tgl_prestasi'		=> $tanggalp,
					'gambar_prestasi' 	=> $gambarp['file_name'],


				);
				$this->db->insert('prestasi', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
		} else {
			$data = array(
				'nama_prestasi'		=> $namap,
				'jenis_prestasi'	=> $jenisp,
				'tingkat_prestasi'	=> $tingkatp,
				'juara'				=> $juara,
				'tgl_prestasi'		=> $tanggalp,
				'gambar_prestasi'	=> 'kosong1.png',
			);
			$this->db->insert('prestasi', $data);
			$this->session->set_flashdata('msg', 'suksestambah');
		}
	}

	function edit()
	{
		$id 			= $this->input->post('id');

		$namap 			= $this->input->post('nama_prestasi');
		$jenisp			= $this->input->post('jenis_prestasi');
		$tingkatp		= $this->input->post('tingkat_prestasi');
		$juara			= $this->input->post('juara');
		$tanggalp		= $this->input->post('tgl_prestasi');


		$this->load->library('upload');
		$nmfile = "file_" . time();
		$config['upload_path']		= 'assets/gambar-prestasi/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);

		if ($_FILES['gambar']['name']) {
			if ($this->upload->do_upload('gambar')) {
				$gbr = $this->upload->data();
				$data = array(
					'nama_prestasi'		=> $namap,
					'jenis_prestasi'	=> $jenisp,
					'tingkat_prestasi'	=> $tingkatp,
					'juara'				=> $juara,
					'tgl_prestasi'		=> $tanggalp,
					'gambar_prestasi' 	=> $gbr['file_name'],
				);
				$this->db->where('id_prestasi', $id)->update('prestasi', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			}
		} else {
			$data = array(
				'nama_prestasi'		=> $namap,
				'jenis_prestasi'	=> $jenisp,
				'tingkat_prestasi'	=> $tingkatp,
				'juara'				=> $juara,
				'tgl_prestasi'		=> $tanggalp,
			);
			$this->db->where('id_prestasi', $id)->update('prestasi', $data);
			$this->session->set_flashdata('msg', 'suksesedit');
		}
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_prestasi', $id)->delete('prestasi');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_prestasi', $cari)->get('prestasi')->result();
	}
}
