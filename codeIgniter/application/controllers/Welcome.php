<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$this->load->model("model_dokter_kami");
		$data['dokter_kami'] = $this->model_dokter_kami->get_data_limit(4);
		$this->load->view('halaman/view_beranda',$data);
	}

	public function playvideo(){
		$this->load->view('view_video');
	}
}
