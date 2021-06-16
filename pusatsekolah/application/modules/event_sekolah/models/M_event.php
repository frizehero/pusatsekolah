<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_event extends CI_Model {

	function tampil($idsekolahx)
	{
		$this->db->where('id_sekolah', $idsekolahx);
		$query = $this->db->get('event_sekolah');
		return $query->result();
	}

	function tampilkan($limit, $start)
	{
		$query = $this->db->get('event_sekolah', $limit, $start);
		return $query->result();
		
	}

	function totaldata($idsekolahx)
	{
		$this->db->where('id_sekolah', $idsekolahx);
		$query = $this->db->get('event_sekolah');
		return $query->num_rows();
		
	}

	function get_event($limit, $start, $st = NULL)
	{
		
		if ($st == "NIL") $st = "";
		$this->db->select('*')
		->like('nama_event',$st);
		$query = $this->db->get('event_sekolah',$limit, $start);
		return $query->result();
	}

	function get_event_count($st = NULL)
	{

		if ($st == "NIL") $st = "";
		$this->db->select('*')
		->like('nama_event',$st);
		$query = $this->db->get('event_sekolah');
		return $query->num_rows();
	}

	function tambah()
	{
		$judul_event 		= $this->input->post('judul_event');
		$text_event 		= $this->input->post('text_event');
		$dokumentasi_event 	= $this->input->post('dokumentasi_event');
		$id 				= $this->input->post('id');

		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/images/event/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['foto'] ['name'])
        {
            if ($this->upload->do_upload('foto'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'judul_event'		=> $judul_event,
					'text_event'		=> $text_event,
					'id_sekolah'		=> $id,
					'dokumentasi_event'	=> $gbr['file_name'],
				);
				$this->db->insert('event_sekolah', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}	
		}
		else{
				$data = array(
						'judul_event'	=> $judul_event,
						'text_event'	=> $text_event,
						'id_sekolah'	=> $id,
						'dokumentasi_event'	=> 'kosong.jpeg',
					);
					$this->db->insert('event_sekolah', $data);
					$this->session->set_flashdata('msg', 'suksestambah');
			}
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_event',$idnya);
    	return $this->db->get('event_sekolah')->row_array();
	}

	function tampildetail($id)
	{
		$idnya = decrypt_url($id);
		$this->db->where('id_event', $idnya);
		return $this->db->get('event_sekolah')->row_array();
	}

	function edit()
	{
		$id 			= $this->input->post('id');
		$judul_event 	= $this->input->post('judul_event');
		$text_event 	= $this->input->post('text_event');

				$data = array(
					'judul_event'		=> $judul_event,
					'text_event'		=> $text_event,
				);
				$this->db->where('id_event',$id)->update('event_sekolah', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_event', $id)->delete('event_sekolah');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('judul_event',$cari)->get('event_sekolah')->result();
	}


	function ambilidsekolah($id)
	{
	
		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('id_admin',$id);
		$query = $this->db->get();


		
    	return $query->row_array();
	}

	function filter ($event_sekolah)
	{

		 $this->db->select('*')
		->from ('event_sekolah')
		->like('judul_event',$event_sekolah);
	
		$query = $this->db->get();
		return $query->result();
	}


}


