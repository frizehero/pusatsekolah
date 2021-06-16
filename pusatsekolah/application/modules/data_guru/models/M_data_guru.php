<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data_guru extends CI_Model
{

	function tampil($idsekolahx)
	{
		$this->db->where('id_sekolah', $idsekolahx);
		$this->db->from('data_guru');
		$query = $this->db->get();

		return $query->result();
	}

	function cari ($data_guru)
	{

		 $this->db->select('*')
		->from ('data_guru')
		->like('nama_guru',$data_guru);
	
		$query = $this->db->get();
		return $query->result();
	}

	function tambah()
	{
		$nama_guru 			= $this->input->post('nama_guru');
		$tmplahir_guru		= $this->input->post('tmplahir_guru');
		$jk_guru 			= $this->input->post('jk_guru');
		$mapel_guru 		= $this->input->post('mapel_guru');
		$nip_guru 			= $this->input->post('nip_guru');
		$tgllahir_guru 		= $this->input->post('tgllahir_guru');
		$status_guru 		= $this->input->post('status_guru');
		$alamat_guru 		= $this->input->post('alamat_guru');
		$provinsi_guru 		= $this->input->post('provinsi_guru');
		$kotakab_guru 		= $this->input->post('kotakab_guru');
		$kecamatan_guru 	= $this->input->post('kecamatan_guru');
		$kelurahan_guru 	= $this->input->post('kelurahan_guru');
		$kodepos_guru 		= $this->input->post('kodepos_guru');
		$email_guru 		= $this->input->post('email_guru');
		$instagram_guru 	= $this->input->post('instagram_guru');
		$twitter_guru 		= $this->input->post('twitter_guru');
		$telepon_guru 		= $this->input->post('telepon_guru');
		$facebook_guru 		= $this->input->post('facebook_guru');
		$id 				= $this->input->post('id');

		$data = array(
			'nama_guru'				=> $nama_guru,
			'tmplahir_guru'			=> $tmplahir_guru,
			'jk_guru'		 		=> $jk_guru,
			'mapel_guru' 			=> $mapel_guru,
			'nip_guru'				=> $nip_guru,
			'tgllahir_guru'			=> $tgllahir_guru,
			'status_guru'			=> $status_guru,
			'alamat_guru'			=> $alamat_guru,
			'provinsi_guru'			=> $provinsi_guru,
			'kotakab_guru'			=> $kotakab_guru,
			'kecamatan_guru'		=> $kecamatan_guru,
			'kelurahan_guru'		=> $kelurahan_guru,
			'kodepos_guru'			=> $kodepos_guru,
			'email_guru'			=> $email_guru,
			'instagram_guru'		=> $instagram_guru,
			'twitter_guru'			=> $twitter_guru,
			'telepon_guru'			=> $telepon_guru,
			'facebook_guru'			=> $facebook_guru,
			'id_sekolah'			=> $id,

		);

		$this->db->insert('data_guru', $data);
		$this->session->set_flashdata('msg', 'suksestambah');
	}

	
	function tampildetail($id)
	{
		$idnya = decrypt_url($id);
		$this->db->where('id_guru', $idnya);
		return $this->db->get('data_guru')->row_array();
	}
	
	function tampiledit($id)
	{
		$idnya = decrypt_url($id);
		$this->db->where('id_guru', $idnya);
		return $this->db->get('data_guru')->row_array();
	}
	
	function edit()
	{
		$id					= $this->input->post('id');
		$nama_guru 			= $this->input->post('nama_guru');
		$tmplahir_guru		= $this->input->post('tmplahir_guru');
		$jk_guru 			= $this->input->post('jk_guru');
		$mapel_guru 		= $this->input->post('mapel_guru');
		$nip_guru 			= $this->input->post('nip_guru');
		$tgllahir_guru 		= $this->input->post('tgllahir_guru');
		$status_guru 		= $this->input->post('status_guru');
		$alamat_guru 		= $this->input->post('alamat_guru');
		$provinsi_guru 		= $this->input->post('provinsi_guru');
		$kotakab_guru 		= $this->input->post('kotakab_guru');
		$kecamatan_guru 	= $this->input->post('kecamatan_guru');
		$kelurahan_guru 	= $this->input->post('kelurahan_guru');
		$kodepos_guru 		= $this->input->post('kodepos_guru');
		$email_guru 		= $this->input->post('email_guru');
		$instagram_guru 	= $this->input->post('instagram_guru');
		$twitter_guru 		= $this->input->post('twitter_guru');
		$telepon_guru 		= $this->input->post('telepon_guru');
		$facebook_guru 		= $this->input->post('facebook_guru');

		$data = array(
			'nama_guru'				=> $nama_guru,
			'tmplahir_guru'			=> $tmplahir_guru,
			'jk_guru'		 		=> $jk_guru,
			'mapel_guru' 			=> $mapel_guru,
			'nip_guru'				=> $nip_guru,
			'tgllahir_guru'			=> $tgllahir_guru,
			'status_guru'			=> $status_guru,
			'alamat_guru'			=> $alamat_guru,
			'provinsi_guru'			=> $provinsi_guru,
			'kotakab_guru'			=> $kotakab_guru,
			'kecamatan_guru'		=> $kecamatan_guru,
			'kelurahan_guru'		=> $kelurahan_guru,
			'kodepos_guru'			=> $kodepos_guru,
			'email_guru'			=> $email_guru,
			'instagram_guru'		=> $instagram_guru,
			'twitter_guru'			=> $twitter_guru,
			'telepon_guru'			=> $telepon_guru,
			'facebook_guru'			=> $facebook_guru,
		);
		$this->db->where('id_guru', $id)->update('data_guru', $data);
		$this->session->set_flashdata('msg', 'suksesedit');
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_guru', $id)->delete('data_guru');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

	function ambilidsekolah($id)
	{
	
		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('id_admin',$id);
		$query = $this->db->get();


		
    	return $query->row_array();
	}

	function fetch_filter_type($type)
	{
		$this->db->distinct();
		$this->db->select($type);
		$this->db->from('data_guru');
		$this->db->where('guru_status', '1');
		$this->db->order_by('id_guru', 'DESC');
		return $this->db->get();
		return $query->result();
	}

	function make_query($mapel)
	{
		$query = "
		SELECT * FROM data_guru 
		WHERE guru_status = '1' 
		";

		if(isset($mapel))
		{
			$mapel_filter = implode("','", $mapel);
			$query .= "
			 AND mapel_guru IN('".$_filter."')
			";
		}
	}

	function fetch_data($limit, $start, $mapel)
	{
		$query = $this->make_query($mapel,);

		$query .= ' LIMIT '.$start.', ' . $limit;

		$data = $this->db->query($query);

		$output = '';
		if($data->num_rows() > 0)
		{
			foreach($data->result_array() as $row)
			{
				$output .= '
		        <div class="col-sm-4 col-lg-3 col-md-3">
					<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
					<p align="center"><strong><a href="#">'. $row['nama_guru'] .'</a></strong></p>
					<h4 style="text-align:center;" class="text-danger" >'. $row['mapel_guru'] .'</h4>
					Jenis kelamin : '. $row['jk_guru'] .' <br />					
					</div>
				</div>
				';
			}
		}
		else
		{
			$output = '<h3>No Data Found</h3>';
		}
		return $output;
	}

	function count_all($mapel)
	{
		$query = $this->make_query($mapel,);
		$data = $this->db->query($query);
		return $data->num_rows();
	}
}
