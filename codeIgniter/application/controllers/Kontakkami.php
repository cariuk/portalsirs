<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kontakkami extends CI_Controller {
    public function index(){
        $this->load->view('halaman/view_kontak_kami');
    }
}
