<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dokterkami extends CI_Controller {
    public function index(){
        $this->load->model("model_dokter_kami");
        $data['dokter_kami'] = $this->model_dokter_kami->get_data_limit(0);
        $this->load->view('halaman/view_dokter_kami',$data);
    }

    public function profildokter($namadokter){
        $this->load->model("model_dokter_kami");
        $data['profildokter'] = $this->model_dokter_kami->get_data_by_name(rawurldecode($namadokter));
        $this->load->view('halaman/view_profil_dokter',$data);
    }
}
