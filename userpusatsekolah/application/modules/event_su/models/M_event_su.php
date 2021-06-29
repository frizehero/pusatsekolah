<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_event_su extends CI_Model {

	function tampil()
	{
		$this->db->order_by('id_event', 'DESC');
		$query = $this->db->get('event_sekolah');
		return $query->result();
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