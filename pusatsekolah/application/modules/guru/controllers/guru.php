<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_guru');
	}


	// index
	function index()
	{
		$data['mapel_data'] = $this->M_guru->fetch_filter_type('mapel_guru');
		$this->load->view('V_guru', $data);

		$data = array(
			'namamodule' 	=> "guru",
			'namafileview' 	=> "V_guru",
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function hapus()
	{
		$this->M_guru->hapus();
		redirect('data_guru');
	}

	function search()
	{
		$data_guru 	= $this->input->post('nama');
		$data = array(
			'namamodule' 	=> "guru",
			'namafileview' 	=> "V_guru",
			'tampil'		=> $this->M_guru->cari($guru),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function fetch_data()
	{
		sleep(2);
		$mapel = $this->input->post('mapel');
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = "#";
		$config["total_rows"] = $this->M_guru->count_all($mapel,);
		$config["per_page"] = 8;
		$config["uri_segment"] = 3;
		$config["use_page_numbers"] = TRUE;
		$config["full_tag_open"] = '<ul class="pagination">';
		$config["full_tag_close"] = '</ul>';
		$config["first_tag_open"] = '<li>';
		$config["first_tag_close"] = '</li>';
		$config["last_tag_open"] = '<li>';
		$config["last_tag_close"] = '</li>';
		$config['next_link'] = '&gt;';
		$config["next_tag_open"] = '<li>';
		$config["next_tag_close"] = '</li>';
		$config["prev_link"] = "&lt;";
		$config["prev_tag_open"] = "<li>";
		$config["prev_tag_close"] = "</li>";
		$config["cur_tag_open"] = "<li class='active'><a href='#'>";
		$config["cur_tag_close"] = "</a></li>";
		$config["num_tag_open"] = "<li>";
		$config["num_tag_close"] = "</li>";
		$config["num_links"] = 3;
		$this->pagination->initialize($config);
		$page = $this->uri->segment('3');
		$start = ($page - 1) * $config["per_page"];
		
		$output = array(
			'pagination_link'		=>	$this->pagination->create_links(),
			'product_list'			=>	$this->M_guru->fetch_data($config["per_page"], $start, $mapel,)
		);
		echo json_encode($output);
	}
}

?>