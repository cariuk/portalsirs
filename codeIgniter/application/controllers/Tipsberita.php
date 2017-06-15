<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipsberita extends CI_Controller {
    public function index(){
        //$this->load->view('view_tentang_kami');
        $this->load->view('halaman/view_page_undercontraction');
    }

    public function detail($berita){
        if ($berita=="pengumuman-lolos-berkas"){
            $this->load->model("model_lolos_berkas");

            $data["perawatbidan"]=$this->model_lolos_berkas->get_data("Perawat Bidan","1");
            $data["kasir"]=$this->model_lolos_berkas->get_data("Kasir","1");
            $this->load->view("halaman/view_detail_lolosberkas",$data);
        } if ($berita=="pengumuman-lolos-berkas-gelombang-2"){
            $this->load->model("model_lolos_berkas");

            $data["perawatbidan"]=$this->model_lolos_berkas->get_data("Perawat Bidan","2");
            $data["kasir"]=$this->model_lolos_berkas->get_data("Kasir","2");
            $this->load->view("halaman/view_detail_lolosberkas_gelombang2",$data);

        }else{
            $this->load->view('halaman/view_page_undercontraction');
        }
    }
}
