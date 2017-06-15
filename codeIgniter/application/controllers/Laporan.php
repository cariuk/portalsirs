<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {
    public function index(){
        $data['html']=$this->load->view("laporan/halaman/dashboard","",true);
        $this->load->view('laporan/template',$data);
    }

    function daerahoperasi(){
        $data['html']=$this->load->view("laporan/halaman/DaerahOperasi/view","",true);
        $this->load->view('laporan/template',$data);
    }
    function dataoperasi(){
        $this->load->model('model_operasi');

        $tanggal = explode("/",$this->input->get("tanggal"));
        $value["dataoperasi"]=$this->model_operasi->get_data($tanggal[0],$tanggal[2]);

        $html = $this->load->view("laporan/halaman/DaerahOperasi/datatable",$value,true);
        $output = array("success"	=>	"yes",
            "html" 		=>	$html);

        echo json_encode($output);
    }

    function salurankemih(){
        $data['html']=$this->load->view("laporan/halaman/SaluranKemih/view","",true);
        $this->load->view('laporan/template',$data);
    }
    function datasalurankemih(){
        $this->load->model('model_salurankemih');

        $tanggal = explode("/",$this->input->get("tanggal"));
        $value["dataoperasi"]=$this->model_salurankemih->get_data($tanggal[0],$tanggal[2]);

        $html = $this->load->view("laporan/halaman/SaluranKemih/datatable",$value,true);
        $output = array("success"	=>	"yes",
            "html" 		=>	$html);

        echo json_encode($output);
    }

    function phlebitis(){
        $data['html']=$this->load->view("laporan/halaman/Phlebitis/view","",true);
        $this->load->view('laporan/template',$data);
    }
    function dataphlebitis(){
        $this->load->model('model_phlebitis');

        $tanggal = explode("/",$this->input->get("tanggal"));
        $value["dataoperasi"]=$this->model_phlebitis->get_data($tanggal[0],$tanggal[2]);

        $html = $this->load->view("laporan/halaman/Phlebitis/datatable",$value,true);
        $output = array("success"	=>	"yes",
            "html" 		=>	$html);

        echo json_encode($output);
    }
}
