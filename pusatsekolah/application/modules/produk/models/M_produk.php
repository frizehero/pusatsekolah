<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {

	function tampil($idsekolahx)
	{
		$this->db->where('id_sekolah', $idsekolahx);
		$query = $this->db->get('produk');
		return $query->result();
	}
    
    function totaldata($idsekolahx)
	{
		$this->db->where('id_sekolah', $idsekolahx);
		$query = $this->db->get('produk');
		return $query->num_rows();
		
	}

	function tampilkan($idsekolahx,$limit, $start)
	{
		$this->db->where('id_sekolah', $idsekolahx);
		$query = $this->db->get('produk', $limit, $start);
		return $query->result();
		
	}

	function get_produk($limit, $start, $st = NULL)
	{
		
		if ($st == "NIL") $st = "";
		$this->db->select('*')
		->like('nama_produk',$st);
		$query = $this->db->get('produk',$limit, $start);
		return $query->result();
	}

	function get_produk_count($st = NULL)
	{

		if ($st == "NIL") $st = "";
		$this->db->select('*')
		->like('nama_produk',$st);
		$query = $this->db->get('produk');
		return $query->num_rows();
	}

	function filter ($limit, $start, $st = NULL)
	{
        if ($st == "NIL") $st = "";
		 $this->db->select('*')
		->from ('produk')
		->like('nama_produk',$st);
	    
		$query = $this->db->get('produk',$limit, $start);
		return $query->result();
	}

	function count_filter ($st = NULL)
	{
        if ($st == "NIL") $st = "";
		 $this->db->select('*')
		->from ('produk')
		->like('nama_produk',$st);
	    
		$query = $this->db->get();
		return $query->num_rows();
	}

	function tambah()
	{
		$nama 			= $this->input->post('nama');
		$kategori_produk		= $this->input->post('kategori_produk');
		$deskripsi 		= $this->input->post('deskripsi');
		$harga			= $this->input->post('harga');
		$id 			= $this->input->post('id');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/images/produk/';
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
					'nama_produk'		=> $nama,
					'kategori_produk'		=> $kategori_produk,
					'deskripsi_produk'	=> $deskripsi,
					'harga_produk'		=> $harga,
					'id_sekolah'		=> $id,
					'foto_produk' 		=> $gbr['file_name'],
					
					
				);
				$this->db->insert('produk', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
			}	 
		}
		else{
				$data = array(
					'nama_produk'		=> $nama,
					'kategori_produk'		=> $kategori_produk,
					'deskripsi_produk'	=> $deskripsi,
					'harga_produk'		=> $harga,
					'id_sekolah'		=> $id,
					'foto_produk' 		=> 'kosong1.jpeg',
				);
				$this->db->insert('produk', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_produk',$idnya);
    	return $this->db->get('produk')->row_array();
	}

	function edit()
	{
		$id 			= $this->input->post('id');
		$nama 			= $this->input->post('nama');
		$kategori_produk= $this->input->post('kategori_produk');
		$deskripsi 		= $this->input->post('deskripsi');
		$harga			= $this->input->post('harga');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/images/produk/';
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
					'nama_produk'		=> $nama,
					'kategori_produk'	=> $kategori_produk,
					'deskripsi_produk'	=> $deskripsi,
					'harga_produk'		=> $harga,
					'foto_produk' 		=> $gbr['file_name'],
				);
				$this->db->where('id_produk',$id)->update('produk', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			
			}	 
		}
		else{
				$data = array(
					'nama_produk'		=> $nama,
					'kategori_produk'	=> $kategori_produk,
					'deskripsi_produk'	=> $deskripsi,
					'harga_produk'		=> $harga,
				);
				$this->db->where('id_produk',$id)->update('produk', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			}

			return "kosong.jpeg";
	}

	function folter ($produk)
	{
		 $this->db->select('*')
		->from ('produk')
		->like('kategori_produk',$produk);
	
		$query = $this->db->get();
		return $query->result();
	}

	function tampil_produk($idsekolahx)
	{
		$this->db->select('kategori_produk, COUNT(kategori_produk) as total');
		$this->db->group_by('kategori_produk');
		$this->db->order_by('total', 'dsc');
		$this->db->where('id_sekolah', $idsekolahx);
		$this->db->from('produk');
		$query = $this->db->get();

		return $query->result();
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_produk', $id)->delete('produk');
		$this->session->set_flashdata('msg', 'sukseshapus');
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
