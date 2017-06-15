<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tentangkami extends CI_Controller {
    public function index(){
        $this->load->view('halaman/view_tentang_kami');
    }
}
