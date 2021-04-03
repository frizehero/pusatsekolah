<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beranda_as extends CI_Model {

	function tampil()
	{
		return $this->db->get('beranda_as')->result();
	}

	/*function tambah()
	{
		$nama 		= $this->input->post('nama_sekolah');
		$keterangan	= $this->input->post('keterangan');


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
					'nama_sekolah'		=> $nama,
					'keterangan'		=> $keterangan,
					'logo' 				=> $gbr['file_name'],
					
					
				);
				$this->db->insert('sekolah', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_sekolah'		=> $nama,
					'keterangan'		=> $keterangan,
					'logo' 				=> 'kosong1.png',
				);
				$this->db->insert('sekolah', $data);
			}
	}*/

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_beranda_as',$idnya);
    	return $this->db->get('beranda_as')->row_array();
	}

	function edit()
	{
		$id 		= $this->input->post('id');
		$jrsn1 		= $this->input->post('jrns1');
		$jrsn2 		= $this->input->post('jrsn2');
		$jrsn3		= $this->input->post('jrsn3');
		$jrsn4		= $this->input->post('jrsn4');
		$jrsn5		= $this->input->post('jrsn5');
		$seninm		= $this->input->post('seninm');
		$seninp		= $this->input->post('seninm');
		$selasam		= $this->input->post('seninm');
		$selasap		= $this->input->post('seninm');
		$rabum		= $this->input->post('rabum');
		$rabup		= $this->input->post('rabup');
		$kamism		= $this->input->post('kamism');
		$kamisp		= $this->input->post('kamisp');
		$jumatm		= $this->input->post('jumatm');
		$jumatp		= $this->input->post('jumatp');
		$sabtum		= $this->input->post('sabutm');
		$sabtup		= $this->input->post('sabutp');

				$data = array(
					'kompetensi1'		=> $jrsn1,
					'kompetensi2'		=> $jrsn2,
					'kompetensi3'		=> $jrsn3,
					'kompetensi4'		=> $jrsn4,
					'kompetensi5'		=> $jrsn5,
					'senin_m'			=> $seninm,
					'senin_p'			=> $seninp,
					'selasa_m'			=> $selasam,
					'selasa_p'			=> $selasap,
					'rabu_m'			=> $rabum,
					'rabu_p'			=> $rabup,
					'kamis_m'			=> $kamism,
					'kamis_p'			=> $kamisp,
					'jumat_m'			=> $jumatm,
					'jumat_p'			=> $jumatp,
					'sabtu_m'			=> $sabtum,
					'sabtu_p'			=> $sabtup,
				);
				$this->db->where('id_beranda_as',$id)->update('beranda_as', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}

	function hapus($id)
	{
		$this->db->where('id_sekolah', $id)->delete('sekolah');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah',$cari)->get('sekolah')->result();
	}
}