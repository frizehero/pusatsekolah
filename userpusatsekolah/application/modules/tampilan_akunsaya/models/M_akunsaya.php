<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_akunsaya extends CI_Model{

	function tampil()
	{
		return $this->db->get('tb_login')->result();
	}

	function tambah()
	{
		$nama_depan 		= $this->input->post('nama_depan');
		$nama_belakang		= $this->input->post('nama_belakang');
		$email_user 		= $this->input->post('email_user');
		$telepon_user 		= $this->input->post('telepon_user');
		$profesi_user 		= $this->input->post('profesi_user');
		$alamat_user 		= $this->input->post('alamat_user');
		$deskripsi_user 	= $this->input->post('deskripsi_user');
		$longitude_user 	= $this->input->post('longitude_user');
		$latitude_user		= $this->input->post('latitude_user');
		$kota_user 			= $this->input->post('kota_user');
		$kecamatan_user 	= $this->input->post('kecamatan_user');
		$kelurahan_user 	= $this->input->post('kelurahan_user');
		$instagram_user 	= $this->input->post('instagram_user');
		$twitter_user 		= $this->input->post('twitter_user');
		$whatsapp_user 		= $this->input->post('whatsapp_user');
		$facebook_user 		= $this->input->post('facebook_user');

		$this->load->library('upload');
		$nmfile = "file_" . time();
		$config['upload_path']		= 'assets/images/profil_user/';
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
					'nama_depan' 		=> $nama_depan,
					'nama_belakang'		=> $nama_belakang,
					'email_user' 		=> $email_user,
					'telepon_user' 		=> $telepon_user,
					'profesi_user' 		=> $profesi_user,
					'alamat_user' 		=> $alamat_user,
					'deskripsi_user' 	=> $deskripsi_user,
					'longitude_user' 	=> $longitude_user,
					'latitude_user'		=> $latitude_user,
					'kota_user' 		=> $kota_user,
					'kecamatan_user' 	=> $kecamatan_user,
					'kelurahan_user' 	=> $kelurahan_user,
					'instagram_user' 	=> $instagram_user,
					'twitter_user' 		=> $twitter_user,
					'whatsapp_user' 	=> $whatsapp_user,
					'facebook_user' 	=> $facebook_user,
					'fotop_user' 		=> $gbr['file_name'],


				);
				$this->db->insert('tb_login', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
		}
		else{
				$data = array(
					'nama_depan' 		=> $nama_depan,
					'nama_belakang'		=> $nama_belakang,
					'email_user' 		=> $email_user,
					'telepon_user' 		=> $telepon_user,
					'profesi_user' 		=> $profesi_user,
					'alamat_user' 		=> $alamat_user,
					'deskripsi_user' 	=> $deskripsi_user,
					'longitude_user' 	=> $longitude_user,
					'latitude_user'		=> $latitude_user,
					'kota_user' 		=> $kota_user,
					'kecamatan_user' 	=> $kecamatan_user,
					'kelurahan_user' 	=> $kelurahan_user,
					'instagram_user' 	=> $instagram_user,
					'twitter_user' 		=> $twitter_user,
					'whatsapp_user' 	=> $whatsapp_user,
					'facebook_user' 	=> $facebook_user,
					'fotop_user' 		=> 'kosong1.jpeg',
				);
				$this->db->insert('tb_login', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
	}

	function edit()
	{
		$id 				= $this->input->post('id');
		$nama_depan 		= $this->input->post('nama_depan');
		$nama_belakang		= $this->input->post('nama_belakang');
		$email_user 		= $this->input->post('email_user');
		$telepon_user 		= $this->input->post('telepon_user');
		$profesi_user 		= $this->input->post('profesi_user');
		$alamat_user 		= $this->input->post('alamat_user');
		$deskripsi_user 	= $this->input->post('deskripsi_user');
		$longitude_user 	= $this->input->post('longitude_user');
		$latitude_user		= $this->input->post('latitude_user');
		$kota_user 			= $this->input->post('kota_user');
		$kecamatan_user 	= $this->input->post('kecamatan_user');
		$kelurahan_user 	= $this->input->post('kelurahan_user');
		$instagram_user 	= $this->input->post('instagram_user');
		$twitter_user 		= $this->input->post('twitter_user');
		$whatsapp_user 		= $this->input->post('whatsapp_user');
		$facebook_user 		= $this->input->post('facebook_user');

		$this->load->library('upload');
		$nmfile = "file_" . time();
		$config['upload_path']		= 'assets/images/profil_user/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);

		if($_FILES['foto']['name'])
		{
			if($this->upload->do_upload('foto'))
			{
				$gbr = $this->upload->data();
				$data = array(
					'nama_depan' 		=> $nama_depan,
					'nama_belakang'		=> $nama_belakang,
					'email_user' 		=> $email_user,
					'telepon_user' 		=> $telepon_user,
					'profesi_user' 		=> $profesi_user,
					'alamat_user' 		=> $alamat_user,
					'deskripsi_user' 	=> $deskripsi_user,
					'longitude_user' 	=> $longitude_user,
					'latitude_user'		=> $latitude_user,
					'kota_user' 		=> $kota_user,
					'kecamatan_user' 	=> $kecamatan_user,
					'kelurahan_user' 	=> $kelurahan_user,
					'instagram_user' 	=> $instagram_user,
					'twitter_user' 		=> $twitter_user,
					'whatsapp_user' 	=> $whatsapp_user,
					'facebook_user' 	=> $facebook_user,
					'fotop_user' 		=> $gbr['file_name'],
				);
				$this->db->where('id_admin',$id)->update('tb_login',$data);
				$this->session->set_flashdata('msg', 'suksesedit');
			}
		}
		else{
				$data = array(
					'nama_depan' 		=> $nama_depan,
					'nama_belakang'		=> $nama_belakang,
					'email_user' 		=> $email_user,
					'telepon_user' 		=> $telepon_user,
					'profesi_user' 		=> $profesi_user,
					'alamat_user' 		=> $alamat_user,
					'deskripsi_user' 	=> $deskripsi_user,
					'longitude_user' 	=> $longitude_user,
					'latitude_user'		=> $latitude_user,
					'kota_user' 		=> $kota_user,
					'kecamatan_user' 	=> $kecamatan_user,
					'kelurahan_user' 	=> $kelurahan_user,
					'instagram_user' 	=> $instagram_user,
					'twitter_user' 		=> $twitter_user,
					'whatsapp_user' 	=> $whatsapp_user,
					'facebook_user' 	=> $facebook_user,
				);
				$this->db->where('id_admin',$id)->update('tb_login',$data);
				$this->session->set_flashdata('msg', 'suksesedit');
			}

			return "kosong.jpeg";
	}

	function tampiledit($id)
	{
		$idnya = decrypt_url($id);
		$this->db->where('id_admin', $idnya);
		return $this->db->get('tb_login')->row_array();
	}

	/*function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_beranda_as', $id)->delete('beranda_as');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah', $cari)->get('sekolah')->result();
	}

	function ambilidsekolah($id)
	{

		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('id_admin', $id);
		$query = $this->db->get();



		return $query->row_array();
	}

	function tampilkompetensi($id)
	{

		$this->db->select('*');
		$this->db->from('p_sekolah');
		$this->db->where('id_p_sekolah', $id);
		$query = $this->db->get();
		return $query->result();
	}*/
}
