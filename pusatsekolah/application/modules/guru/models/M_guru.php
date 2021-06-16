<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_guru extends CI_Model
{

	function cari ($guru)
	{

		 $this->db->select('*')
		->from ('data_guru')
		->like('nama_guru',$data_guru);
	
		$query = $this->db->get();
		return $query->result();
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_guru', $id)->delete('data_guru');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

	function fetch_filter_type($type)
	{
		$this->db->distinct();
		$this->db->select($type);
		$this->db->from('data_guru');
		$this->db->where('guru_status', '1');
		$this->db->order_by('id_guru', 'DESC');
		return $this->db->get();
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
