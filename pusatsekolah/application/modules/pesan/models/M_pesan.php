<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesan extends CI_Model {

	function tampil()
	{
		return $this->db->get('pesan')->result();
	}

	function tambah()
	{
		$isi_pesan		= $this->input->post('isi_pesan');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'isi_pesan'		=> $isi_pesan,
					'logo' 			=> $gbr['file_name'],
					
					
				);
				$this->db->insert('pesan', $data);
			
			}	 
		}
		else{
				$data = array(
					'isi_pesan'		=> $isi_pesan,
					'logo' 			=> 'kosong1.png',
				);
				$this->db->insert('pesan', $data);
			}
	}


	function hapus($id)
	{
		$this->db->where('id_pesan', $id)->delete('pesan');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('isi_pesan',$cari)->get('pesan')->result();
	}
}