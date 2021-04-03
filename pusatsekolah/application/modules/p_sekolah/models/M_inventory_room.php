<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_inventory_room extends CI_Model {

	function tampil()
	{
		return $this->db->get('inventory_room')->result();
	}

	function tambah()
	{
		$kode 		= $this->input->post('kode');
		$nama 		= $this->input->post('nama');
		$pj			= $this->input->post('pj');
		$keterangan	= $this->input->post('ket');

				$data = array(
					'kode_room'		=> $kode,
					'nama_room'		=> $nama,
					'pj_room'		=> $pj,
					'ket_room'		=> $keterangan,
				);
				$this->db->insert('inventory_room', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_inv_room',$idnya);
    	return $this->db->get('inventory_room')->row_array();
	}



	function edit()
	{
		$id 		= $this->input->post('id');
		$jrsn1 		= $this->input->post('jrns1');
		$jrsn2 		= $this->input->post('jrsn2');
		$jrsn3		= $this->input->post('jrsn3');
		$jrsn4		= $this->input->post('jrsn4');
		$jrsn5		= $this->input->post('jrsn5');

				$data = array(
					'kompetensi1'		=> $jrsn1,
					'kompetensi2'		=> $jrsn2,
					'kompetensi3'		=> $jrsn3,
					'kompetensi4'		=> $jrsn4,
					'kompetensi5'		=> $jrsn5,
				);
				$this->db->where('id_inv_room',$id)->update('inventory_room', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_inv_room', $id)->delete('inventory_room');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}