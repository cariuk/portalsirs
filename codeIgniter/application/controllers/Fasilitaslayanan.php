<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitaslayanan extends CI_Controller {
    public function index(){
        $this->load->view('halaman/view_page_undercontraction');
    }

    public function instalasirawatjalan(){
        $this->load->view('halaman/view_instalasirawatjalan');
    }

    public function instalasirawatinap($detail=null){
        if ($detail==null)
            $this->load->view('halaman/view_instalasirawatinap');
        else{
            $this->load->model('model_fasilitaslayanan');
            $data['detail']=$this->model_fasilitaslayanan->get_data(str_replace("-"," ",$detail));
            $data['class'] = strtolower(str_replace("-","",$detail));
            $this->load->view('halaman/rawatinap/detailkamar',$data);
        }
    }

    public function virtualtour(){
        $this->load->view('halaman/view_virtualtour');
    }
}
