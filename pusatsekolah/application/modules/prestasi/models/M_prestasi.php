<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_prestasi extends CI_Model
{

	function tampil()
	{
		return $this->db->get('prestasi')->result();
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
		$config['upload_path']		= 'assets/img/';
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
					'logo' 				=> $gbr['file_name'],


				);
				$this->db->insert('sekolah', $data);
			}
		} else {
			$data = array(
				'nama_prestasi'		=> $namap,
				'jenis_prestasi'	=> $jenisp,
				'tingkat_prestasi'	=> $tingkatp,
				'juara'				=> $juara,
				'tgl_prestasi'		=> $tanggalp,
				'logo' 				=> 'kosong1.png',
			);
			$this->db->insert('prestasi', $data);
		}
	}

	function edit()
	{
		$id_prestasi 	= $this->input->post('id_sekolah');
		$namap 			= $this->input->post('nama_prestasi');
		$jenisp			= $this->input->post('jenis_prestasi');
		$tingkatp		= $this->input->post('tingkat_prestasi');
		$juara			= $this->input->post('juara');
		$tanggalp		= $this->input->post('tgl_prestasi');


		$this->load->library('upload');
		$nmfile = "file_" . time();
		$config['upload_path']		= 'assets/img/';
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
					'logo' 				=> $gbr['file_name'],
				);
				$this->db->where('id_prestasi', $id_prestasi)->update('prestasi', $data);
			}
		} else {
			$data = array(
				'nama_prestasi'		=> $namap,
				'jenis_prestasi'	=> $jenisp,
				'tingkat_prestasi'	=> $tingkatp,
				'juara'				=> $juara,
				'tgl_prestasi'		=> $tanggalp,
			);
			$this->db->where('id_prestasi', $id_prestasi)->update('prestasi', $data);
		}
	}

	function hapus($id)
	{
		$this->db->where('id_prestasi', $id_prestasi)->delete('prestasi');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_prestasi', $cari)->get('prestasi')->result();
	}
}
