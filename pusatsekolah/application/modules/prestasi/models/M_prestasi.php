<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_prestasi extends CI_Model{

	function tampil($idsekolahx)
	{
		$this->db->where('id_sekolah', $idsekolahx);
		$query = $this->db->get('prestasi');
		return $query->result();
		
	}

	function tampilkan($limit, $start)
	{
		$query = $this->db->get('prestasi', $limit, $start);
		return $query->result();
		
	}

	function get_prestasi($limit, $start, $st = NULL)
	{
		
		if ($st == "NIL") $st = "";
		$this->db->select('*')
		->like('nama_prestasi',$st);
		$query = $this->db->get('prestasi',$limit, $start);
		return $query->result();
	}

	function get_prestasi_count($st = NULL)
	{

		if ($st == "NIL") $st = "";
		$this->db->select('*')
		->like('nama_prestasi',$st);
		$query = $this->db->get('prestasi');
		return $query->num_rows();
	}

	function filter ($prestasi)
	{

		 $this->db->select('*')
		->from ('prestasi')
		->like('nama_prestasi',$prestasi);
	
		$query = $this->db->get();
		return $query->result();
	}

	function tampiledit($id)
	{
		$idnya = decrypt_url($id);
		$this->db->where('id_prestasi', $idnya);
		return $this->db->get('prestasi')->row_array();
	}

	function tambah()
	{
		$nama_prestasi 		= $this->input->post('nama_prestasi');
		$jenis_prestasi		= $this->input->post('jenis_prestasi');
		$tingkat_prestasi	= $this->input->post('tingkat_prestasi');
		$juara				= $this->input->post('juara');
		$tgl_prestasi		= $this->input->post('tgl_prestasi');
		$id 			= $this->input->post('id');


		$this->load->library('upload');
		$nmfile = "file_" . time();
		$config['upload_path']		= 'assets/images/gambar_prestasi/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);

		if ($_FILES['gambar_prestasi']['name']) {
			if ($this->upload->do_upload('gambar_prestasi')) {
				$gbr = $this->upload->data();
				$data = array(
					'nama_prestasi'		=> $nama_prestasi,
					'jenis_prestasi'	=> $jenis_prestasi,
					'tingkat_prestasi'	=> $tingkat_prestasi,
					'juara'				=> $juara,
					'tgl_prestasi'		=> $tgl_prestasi,
					'id_sekolah'		=> $id,
					'gambar_prestasi' 	=> $gbr['file_name'],


				);
				$this->db->insert('prestasi', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
		} else {
			$data = array(
				'nama_prestasi'		=> $nama_prestasi,
				'jenis_prestasi'	=> $jenis_prestasi,
				'tingkat_prestasi'	=> $tingkat_prestasi,
				'juara'				=> $juara,
				'tgl_prestasi'		=> $tgl_prestasi,
				'id_sekolah'		=> $id,
				'gambar_prestasi'	=> 'kosong1.jpeg',
			);
			$this->db->insert('prestasi', $data);
			$this->session->set_flashdata('msg', 'suksestambah');
		}
	}

	function edit()
	{
		$id 			= $this->input->post('id');

		$nama_prestasi 			= $this->input->post('nama_prestasi');
		$jenis_prestasi			= $this->input->post('jenis_prestasi');
		$tingkat_prestasi		= $this->input->post('tingkat_prestasi');
		$juara					= $this->input->post('juara');
		$tgl_prestasi			= $this->input->post('tgl_prestasi');


		$this->load->library('upload');
		$nmfile = "file_" . time();
		$config['upload_path']		= 'assets/images/gambar_prestasi/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);

		if ($_FILES['gambar_prestasi']['name']) {
			if ($this->upload->do_upload('gambar_prestasi')) {
				$gbr = $this->upload->data();
				$data = array(
					'nama_prestasi'		=> $nama_prestasi,
					'jenis_prestasi'	=> $jenis_prestasi,
					'tingkat_prestasi'	=> $tingkat_prestasi,
					'juara'				=> $juara,
					'tgl_prestasi'		=> $tgl_prestasi,
					'gambar_prestasi' 	=> $gbr['file_name'],
				);
				$this->db->where('id_prestasi', $id)->update('prestasi', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			}
		} else {
			$data = array(
				'nama_prestasi'		=> $nama_prestasi,
				'jenis_prestasi'	=> $jenis_prestasi,
				'tingkat_prestasi'	=> $tingkat_prestasi,
				'juara'				=> $juara,
				'tgl_prestasi'		=> $tgl_prestasi,
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

	function ambilidsekolah($id)
	{
	
		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('id_admin',$id);
		$query = $this->db->get();


		
    	return $query->row_array();
	}
}
