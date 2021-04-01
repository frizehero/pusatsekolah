<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

// Popup

function tampilnotif(){

	$CI = get_instance();

	if( $CI->session->flashdata('msg')=="sukseshapus"){

		echo ' 	<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="close" aria-label="Close" data-dismiss="alert">
                    	<span aria-hidden="true">×</span>
                	</button>			
					Data anda telah berhasil dihapus.
				</div>';
	}

	if( $CI->session->flashdata('msg')=="suksestambah"){

		echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" aria-label="Close" data-dismiss="alert">
                    	<span aria-hidden="true">×</span>
                	</button>
					Data anda telah berhasil ditembahkan.
				</div>';
	}

	if( $CI->session->flashdata('msg')=="suksesedit"){

		echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" aria-label="Close" data-dismiss="alert">
                    	<span aria-hidden="true">×</span>
                	</button>
					Data anda telah berhasil di ubah.
				</div>';
	}



}
