<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ppdb extends CI_Model
{

	function tampil()
	{
		return $this->db->get('ppdb')->result();
	}

	function tambah()
	{
		$judul_ppdb 		= $this->input->post('judul_ppdb');
		$deskripsi_ppdb		= $this->input->post('deskripsi_ppdb');
		$tglawal_ppdb		= $this->input->post('tglawal_ppdb');
		$tglakhir_ppdb		= $this->input->post('tglakhir_ppdb');


		$this->load->library('upload');
		$nmfile = "file_" . time();
		$config['upload_path']		= 'assets/pamflet_ppdb/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);

		if ($_FILES['pamflet_ppdb']['name']) {
			if ($this->upload->do_upload('pamflet_ppdb')) {
				$gbr = $this->upload->data();
				$data = array(
					'judul_ppdb'		=> $judul_ppdb,
					'deskripsi_ppdb'	=> $deskripsi_ppdb,
					'tglawal_ppdb'		=> $tglawal_ppdb,
					'tglakhir_ppdb'		=> $tglakhir_ppdb,
					'pamflet_ppdb' 		=> $gbr['file_name'],


				);
				$this->db->insert('ppdb', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
		} else {
			$data = array(
				'judul_ppdb'		=> $judul_ppdb,
				'deskripsi_ppdb'	=> $deskripsi_ppdb,
				'tglawal_ppdb'		=> $tglawal_ppdb,
				'tglakhir_ppdb'		=> $tglakhir_ppdb,
				'pamflet_ppdb' 		=> 'kosong1.png',
			);
			$this->db->insert('ppdb', $data);
			$this->session->set_flashdata('msg', 'suksestambah');
		}
	}

	function tampiledit($id)
	{
		$idnya = decrypt_url($id);
		$this->db->where('id_ppdb', $idnya);
		return $this->db->get('ppdb')->row_array();
	}

	function edit()
	{
		$id = $this->input->post('id');
		
		$judul_ppdb 		= $this->input->post('judul_ppdb');
		$deskripsi_ppdb		= $this->input->post('deskripsi_ppdb');
		$tglawal_ppdb		= $this->input->post('tglawal_ppdb');
		$tglakhir_ppdb		= $this->input->post('tglakhir_ppdb');


		$this->load->library('upload');
		$nmfile = "file_" . time();
		$config['upload_path']		= 'assets/pamflet_ppdb/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);

		if ($_FILES['pamflet_ppdb']['name']) {
			if ($this->upload->do_upload('pamflet_ppdb')) {
				$gbr = $this->upload->data();
				$data = array(
					'judul_ppdb'		=> $judul_ppdb,
					'deskripsi_ppdb'	=> $deskripsi_ppdb,
					'tglawal_ppdb'		=> $tglawal_ppdb,
					'tglakhir_ppdb'		=> $tglakhir_ppdb,
					'pamflet_ppdb' 		=> $gbr['file_name'],
				);
				$this->db->where('id_ppdb', $id)->update('ppdb', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			}
		} else {
			$data = array(
				'judul_ppdb'		=> $judul_ppdb,
				'deskripsi_ppdb'	=> $deskripsi_ppdb,
				'tglawal_ppdb'		=> $tglawal_ppdb,
				'tglakhir_ppdb'		=> $tglakhir_ppdb,
				'pamflet_ppdb' 		=> 'kosong1.png',
			);
			$this->db->where('id_ppdb', $id)->update('ppdb', $data);
			$this->session->set_flashdata('msg', 'suksesedit');
		}
	}

	function hapus($id)
	{
		$this->db->where('id_ppdb', $id)->delete('ppdb');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('judul_ppdb', $cari)->get('ppdb')->result();
	}
}
