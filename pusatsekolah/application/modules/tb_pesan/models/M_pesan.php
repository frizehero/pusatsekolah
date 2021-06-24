<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pesan extends CI_Model
{

	function tampil()
	{
		//$this->db->from('tb_pesan');
		//$query = $this->db->get();

		//$this->db->select('id_penerima,nama_penerima,pesan');
		//$this->db->distinct();
		//$query = $this->db->get('tb_pesans');

		//$this->db->select('id_penerima');
		//$this->db->distinct();
		//$this->db->get('tb_pesan');
		//$this->db->select('DISTINCT(id_penerima)');

		// $this->db->group_by('id_penerima');

		// $this->load->database();
		// $last = $this->db->order_by('id_pesan', "desc")
		// 	->limit(1)
		// 	->get('tb_pesan')
		// 	->row();
		// print_r($last);
		// $query = $this->db->get('tb_pesan');

		//$this->db->distinct('id_penerima');
		$this->db->select('DISTINCT(id_penerima),id_pesan,id_user,pesan,waktu,id_penerima,nama_penerima, tb_login.nama AS nama_penerima');
		$this->db->from('tb_pesan');
		$this->db->join('tb_login', 'tb_pesan.id_penerima = tb_login.id_admin');
		$this->db->order_by('id_pesan', "desc")->limit(1);
		$query = $this->db->get();

		return $query->result();
	}

	function tampilnamapenerima($id)
	{
		$nama_penerima = decrypt_url($id);
		$this->db->where('nama_penerima', $nama_penerima);
		return $this->db->get('tb_pesan')->row_array();
	}


	function tampilpesan($iduser)
	{
		$this->db->from('tb_pesan');
		$this->db->where('id_user', $iduser);
		$query = $this->db->get();

		return $query->result();
	}

	function tampildetail($id_penerima)
	{
		//$idnya = decrypt_url($id);
		//$this->db->select('*');
		//$this->db->from('tb_pesan');
		//$this->db->where('pesan', $id_penerima);

		//$query = $this->db->row_array();;

		//return $query;
		//return $this->db->get('tb_pesan')->row_array();

		$this->db->select('*,tb_login.nama AS nama_penerima');
		$this->db->from('tb_pesan');
		$this->db->join('tb_login', 'tb_pesan.id_penerima = tb_login.id_admin');
		$this->db->where('id_penerima', $id_penerima);
		$query = $this->db->get();
		return $query->result();
	}

	function tampilidpenerima($id)
	{
		$idpenerima = decrypt_url($id);
		$this->db->where('id_penerima', $idpenerima);
		return $this->db->get('tb_pesan')->row_array();
	}

	function tambahdetail()
	{
		$pesan				= $this->input->post('pesan');
		$id_user			= $this->input->post('id_user');
		$id_penerima		= $this->input->post('id_penerima');
		$nama_penerima		= $this->input->post('nama_penerima');

		$data = array(
			'id_user'			=> $id_user,
			'pesan'				=> $pesan,
			'id_penerima'		=> $id_penerima,
			'nama_penerima'		=> $nama_penerima,
		);

		$this->db->insert('tb_pesan', $data);

		//$last_id = $this->db->insert_id();
	}


	function hapus($id)
	{
		$this->db->where('tb_pesan', $id)->delete('tb_pesan');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('isi_pesan', $cari)->get('pesan')->result();
	}

	function ambilidsekolah($id)
	{

		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('id_admin', $id);
		$query = $this->db->get();



		return $query->row_array();
	}

	function ambilidpenerima($id)
	{

		$this->db->select('*');
		$this->db->from('tb_pesan');
		$this->db->where('id_penerima', $id);
		$query = $this->db->get();



		return $query->row_array();
	}

	function ambilnamapenerima($id)
	{

		$this->db->select('*, tb_login.nama AS nama_p');
		$this->db->from('tb_login');
		$this->db->where('nama', $id);
		$query = $this->db->get();



		return $query->row_array();
	}

	function tampilkompetensi($id)
	{

		$this->db->select('*,tb_login.id_admin AS id_user, tb_login.nama AS nama_user');
		$this->db->from('tb_pesan');
		$this->db->join('tb_login', 'tb_pesan.id_user = tb_login.id_admin');
		/*$this->db->join('tb_login', 'tb_pesan.nama_user = tb_login.nama');
		$this->db->join('tb_login', 'tb_pesan.nama_user = tb_login.nama');*/
		$this->db->where('id_pesan', $id);
		$query = $this->db->get();
		return $query->result();
	}
}
