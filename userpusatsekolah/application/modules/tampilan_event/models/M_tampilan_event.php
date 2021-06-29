<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tampilan_event extends CI_Model {

	function tampil()
	{
		$this->db->order_by('id_event', 'DESC');
		$query = $this->db->get('event_sekolah');
		return $query->result();
	}
}