<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beranda_as extends CI_Model {

	function tampil()
	{
		$this->db->order_by('id_beranda_as', 'DESC');
    	$query = $this->db->get('beranda_as');
    	return $query->result();
	}
			
	function tambah()
	{
		$posts 		= $this->input->post('posts');

		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/images/postsekolah/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['postfoto']['name'])
        {
            if ($this->upload->do_upload('postfoto'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'post_sekolah'		=> $posts,
					'post_foto_sekolah'	=> $gbr['file_name'],
					
					
				);
				$this->db->insert('beranda_as', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
			}	 
		}
		else{
				$data = array(
					'post_sekolah'		=> $posts,
				);
				$this->db->insert('beranda_as', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_p_sekolah',$idnya);
    	return $this->db->get('p_sekolah')->row_array();
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_beranda_as', $id)->delete('beranda_as');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah',$cari)->get('sekolah')->result();
	}

	function ambilidsekolah($id)
	{
	
		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('id_admin',$id);
		$query = $this->db->get();


		
    	return $query->row_array();
	}

	function tampilkompetensi($id)
	{
	
		$this->db->select('*');
		$this->db->from('p_sekolah');
		$this->db->where('id_p_sekolah',$id);
		$query = $this->db->get();
    	return $query->result();
	}

}
