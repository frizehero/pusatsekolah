<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tb_login extends CI_Model {

	function tampil($data_siswa)
  	{
	    //$ee=1;
	    $this->db->select('*');
	    $this->db->from('tb_login');
		$this->db->where('id_admin', $data_siswa);
	    $query = $this->db->get();
	    return $query->row_array();
	}


	function edit()
	{
		$id 	 		= $this->input->post('id');
		$nama			= $this->input->post('nama');
		$username		= $this->input->post('username');
		$email_user 	= $this->input->post('email_user');
		$telepon_user 	= $this->input->post('telepon_user');
		$profesi_user 	= $this->input->post('profesi_user');
		$alamat_user	= $this->input->post('alamat_user');
		$deskripsi_user	= $this->input->post('deskripsi_user');
		$longitude_user	= $this->input->post('longitude_user');
		$latitude_user	= $this->input->post('latitude_user');
		$kota_user		= $this->input->post('kota_user');
		$kecamatan_user = $this->input->post('kecamatan_user');
		$kelurahan_user	= $this->input->post('kelurahan_user');
		$instagram_user	= $this->input->post('instagram_user');
		$twitter_user	= $this->input->post('twitter_user');
		$facebook_user	= $this->input->post('facebook_user');
		$whatsapp_user	= $this->input->post('whatsapp_user');

		$this->load->library('upload');
		$nmfile = "file_" . time();
		$config['upload_path']		= 'assets/images/fotouser/';
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
					'nama'				=> $nama,
					'username'			=> $username,
					'email_user' 		=> $email_user,
					'telepon_user'		=> $telepon_user,
					'profesi_user'		=> $profesi_user,
					'alamat_user'		=> $alamat_user,
					'deskripsi_user'	=> $deskripsi_user,
					'longitude_user'	=> $longitude_user,
					'latitude_user'		=> $latitude_user,
					'kota_user'			=> $kota_user,
					'kecamatan_user'	=> $kecamatan_user,
					'kelurahan_user'	=> $kelurahan_user,
					'instagram_user'	=> $instagram_user,
					'twitter_user'		=> $twitter_user,
					'facebook_user'	    => $facebook_user,
					'whatsapp_user'		=> $whatsapp_user,
					'fotop_user'		=> $gbr['file_name'],
				);
				$this->db->where('id_admin',$id)->update('tb_login', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama'				=> $nama,
					'username'			=> $username,
					'email_user' 		=> $email_user,
					'telepon_user'		=> $telepon_user,
					'profesi_user'		=> $profesi_user,
					'alamat_user'		=> $alamat_user,
					'deskripsi_user'	=> $deskripsi_user,
					'longitude_user'	=> $longitude_user,
					'latitude_user'		=> $latitude_user,
					'kota_user'			=> $kota_user,
					'kecamatan_user'	=> $kecamatan_user,
					'kelurahan_user'	=> $kelurahan_user,
					'instagram_user'	=> $instagram_user,
					'twitter_user'		=> $twitter_user,
					'facebook_user'	    => $facebook_user,
					'whatsapp_user'		=> $whatsapp_user,
				);
				$this->db->where('id_admin',$id)->update('tb_login', $data);
			}

			return "kosong.jpg";
				
	}
 
/*function tampil()
	{
		$this->db->select('*');
		$this->db->from('tb_login');
		$query = $this->db->get();

		return $query->result();
	}

	function tampiledit($id)
	{
		//$idnya=decrypt_url($id);

		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('id_admin',$id);
		$query = $this->db->get();

    	return $query->row_array();
	}*/

	/*function edit()
	{
		$id_admin 		= $this->input->post('id_admin');
		$nama			= $this->input->post('nama');
		$username		= $this->input->post('username');
		$email_user 	= $this->input->post('email_user');
		$telepon_user 	= $this->input->post('telepon_user');
		$profesi_user 	= $this->input->post('profesi_user');
		$alamat_user	= $this->input->post('alamat_user');
		$deskripsi_user	= $this->input->post('deskripsi_user');
		$longitude_user	= $this->input->post('longitude_user');
		$latitude_user	= $this->input->post('latitude_user');
		$kota_user		= $this->input->post('kota_user');
		$kecamatan_user = $this->input->post('kecamatan_user');
		$kelurahan_user	= $this->input->post('kelurahan_user');
		$instagram_user	= $this->input->post('instagram_user');
		$facebook_user	= $this->input->post('facebook_user');
		$twitter_user	= $this->input->post('twitter_user');
		$whatsapp_user	= $this->input->post('whatsapp_user');
		$fotop_user		= $this->input->post('fotop_user');
		$user_level		= $this->input->post('user_level');
		$id_sekolah		= $this->input->post('id_sekolah');

		$this->upload->initialize($config);

		if($_FILES['foto']['name']) 
		{
			if($this->upload->do_upload('foto')) 
			{
				$gbr = $this->upload->data();
				$data = array(
					'id_admin'			=> $id_admin,
					'nama'				=> $nama,
					'username'			=> $username,
					'password' 			=> $password,
					'email_user' 		=> $email_user,
					'telepon_user'		=> $telepon_user,
					'profesi_user'		=> $profesi_user,
					'alamat_user'		=> $alamat_user,
					'deskripsi_user'	=> $deskripsi_user,
					'longitude_user'	=> $longitude_user,
					'latitude_user'		=> $latitude_user,
					'kota_user'			=> $kota_user,
					'kecamatan_user'	=> $kecamatan_user,
					'kelurahan_user'	=> $kelurahan_user,
					'instagram_user'	=> $instagram_user,
					'twitter_user'		=> $twitter_user,
					'whatsapp_user'		=> $whatsapp_user,
					'fotop_user'		=> $fotop_user,
					'user_level'		=> $user_level,
					'id_admin'			=> $id_admin,

					);

				$this->db->where('id_admin',$id)->update('tb_login', $data);
			}
		} else {
			$data = array(
				'id_admin'			=> $id_admin,
					'nama'				=> $nama,
					'username'			=> $username,
					'password' 			=> $password,
					'email_user' 		=> $email_user,
					'telepon_user'		=> $telepon_user,
					'profesi_user'		=> $profesi_user,
					'alamat_user'		=> $alamat_user,
					'deskripsi_user'	=> $deskripsi_user,
					'longitude_user'	=> $longitude_user,
					'latitude_user'		=> $latitude_user,
					'kota_user'			=> $kota_user,
					'kecamatan_user'	=> $kecamatan_user,
					'kelurahan_user'	=> $kelurahan_user,
					'instagram_user'	=> $instagram_user,
					'twitter_user'		=> $twitter_user,
					'whatsapp_user'		=> $whatsapp_user,
					'fotop_user'		=> $fotop_user,
					'user_level'		=> $user_level,
					'id_admin'			=> $id_admin,
				
			);
			$this->db->where('id_admin',$id)->update('tb_login', $data);
		}		
	}*/

	function ambilidsekolah($id)
	{
	
		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('id_admin',$id);
		$query = $this->db->get();


		
    	return $query->row_array();
	}

	/*function tampilkompetensi($id)
	{

		$this->db->select('*');
		$this->db->from('p_sekolah');
		$this->db->where('id_p_sekolah', $id);
		$query = $this->db->get();
		return $query->result();
	}*/
}