<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_media_fasilitas extends CI_Model {

	function tampil()
	{
		return $this->db->get('media_fasilitas')->result();
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
					'fasilitas_media' 		=> $gbr['file_name'],
					
				);
				$this->db->insert('media_fasilitas', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
			}	 
		}
		else{
				$data = array(
					'fasilitas_media' 		=> 'kosong.jpeg',

				);
				$this->db->insert('media_fasilitas', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_fasilitas',$idnya);
    	return $this->db->get('media_fasilitas')->row_array();
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_fasilitas', $id)->delete('media_fasilitas');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('fasilitas_media',$cari)->get('media_fasilitas')->result();
	}
}