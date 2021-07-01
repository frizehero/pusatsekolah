<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {

	function tampil()
	{
		return $this->db->get('produk')->result();
	}

	function tambah()
	{
		$nama 			= $this->input->post('nama');
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
					'deskripsi_produk'	=> $deskripsi,
					'harga_produk'		=> $harga,
					'foto_produk' 		=> $gbr['file_name'],
					
					
				);
				$this->db->insert('produk', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
			}	 
		}
		else{
				$data = array(
					'nama_produk'		=> $nama,
					'deskripsi_produk'	=> $deskripsi,
					'harga_produk'		=> $harga,
					'foto_produk' 		=> 'kosong.jpeg',
				);
				$this->db->insert('produk', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
	}

	function tampildetail($id)
	{
		$idnya = decrypt_url($id);
		$this->db->where('id_produk', $idnya);
		return $this->db->get('produk')->row_array();
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
					'deskripsi_produk'	=> $deskripsi,
					'harga_produk'		=> $harga,
				);
				$this->db->where('id_produk',$id)->update('produk', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			}
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_produk', $id)->delete('produk');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_produk',$cari)->get('produk')->result();
	}
}