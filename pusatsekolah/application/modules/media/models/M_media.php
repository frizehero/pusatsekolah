<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_media extends CI_Model {

	function tampil()
	{
		return $this->db->get('media')->result();
	}

	function tambah()
	{
		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/images/media/';
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
					'foto_media' 			=> $gbr['file_name'],
					'fasilitas_media' 		=> $gbr['file_name'],
					
				);
				$this->db->insert('media', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
			}	 
		}
		else{
				$data = array(
					'foto_media' 			=> 'kosong.jpeg',
					'fasilitas_media' 		=> 'kosong.jpeg',
				);
				$this->db->insert('media', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
	}

	function tambahvid()
	{
		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/images/media/';
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
					'vidio_media' 			=> $gbr['file_name'],
					
				);
				$this->db->insert('media', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
			}	 
		}
		else{
				$data = array(
					'vidio_media' 			=> 'kosong.jpeg',
				);
				$this->db->insert('media', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_media',$idnya);
    	return $this->db->get('media')->row_array();
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_media', $id)->delete('media');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('foto_media',$cari)->get('media')->result();
	}
}