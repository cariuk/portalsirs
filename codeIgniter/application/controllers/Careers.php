<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends CI_Controller {
    public function index(){
        $this->load->model("Careers/ModelLowongan");
        $lowongan = $this->ModelLowongan->getData();
        $this->load->view('Careers/Home',compact('lowongan'));
    }

    public function formlowongan(){
        echo json_encode([
            'status' => 200,
            'title' => 'Form Lamaran',
            'html' => $this->load->view('Careers/Form',["id_lowongan" => $this->input->post('id_lowongan')],true)
        ]);
    }

    public function addlamaran(){
        $this->load->model("Careers/ModelPelamar");
        $check = $this->ModelPelamar->getdata($this->input->post('no_tlp'));
        if (!empty($check)){
            echo json_encode([
                "status" => 200,
                "message" => "Kami Sudah Menerima Data Anda, Silahkan Update Data Anda Jika Ada Yang Berubah"
            ]);
        }else{
            $result = $this->ModelPelamar->SetData([
                "id_lowongan" => $this->input->post('id_lowongan'),
                "foto" => $_FILES['foto']['name'],
                "nama_depan" => $this->input->post('nama_depan'),
                "nama_belakang" => $this->input->post('nama_belakang'),
                "tempat_lahir" => $this->input->post('tempat_lahir'),
                "tanggal_lahir" => $this->input->post('tanggal_lahir'),
                "alamat" => $this->input->post('alamat'),
                "no_tlp" => str_replace(" ","",$this->input->post('no_tlp')),
                "email" => $this->input->post('email'),
                "pengalaman_kerja" => $this->input->post('pengalaman_kerja'),
                "status" => 1,
                "berkas" => 0,
            ]);
            $prefix = "-".$this->input->post('nama_depan')." ".$this->input->post('nama_belakang');
            $this->do_upload($result.$prefix,"foto",'jpg|png');

            echo json_encode([
                "status" => 200,
                "message" => "Data Anda Telah Kami Terima, Silahkan Menunggu Informasi Pengumpulan Berkas"
            ]);
        }
    }

    public function changephoto(){
    }

    public function uploadberkas(){
        $prefix = $this->input->post("id");
        $result = $this->do_upload($prefix,"berkas",'pdf');
        $this->load->model("Careers/ModelPelamar");
        $this->ModelPelamar->UpdateData(
            explode("-",$prefix)[0], [
                "berkas" => 1,
                "file" => $_FILES['berkas']['name']
            ]
        );

        echo json_encode([
            "status" => 200,
            "message" => "Berkas Anda Telah Kami Terima",
            "StatusUpload" =>$result,
            "UrlBerkas" => base_url('assets/careers/uploads/'.$prefix.'/'.$_FILES['berkas']['name'])
        ]);
    }

    public function do_upload($folder,$file,$extension){
        $config['upload_path']          = './assets/careers/uploads/'.$folder;
        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, true);
        }
        $config['allowed_types']= $extension;
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload($file)) {
            $error = array('error' => $this->upload->display_errors());
            return $error;
        }
        else {
           return true;
        }
    }

    public function datapelamar($lowongan=null){
        $this->load->model("Careers/ModelPelamar");
        $result["datapelamar"] = $this->ModelPelamar->getdata(null,$lowongan);
        $data["html"] = $this->load->view("Careers/datatable",$result,true);
        $this->load->view('Careers/template',$data);
    }

    public function datalolosberkas(){
        $this->load->model("Careers/ModelPelamar");
        $result["datapelamar"] = $this->ModelPelamar->getdata(null,null,2);
        $data["html"] = $this->load->view("Careers/datatable",$result,true);
        $this->load->view('Careers/template',$data);
    }

    public function caripelamar(){
        $this->load->model("Careers/ModelPelamar");
        if ($this->input->post('cari')==""){
            $data["html"] = "<center>Maaf Data Tidak Di Temukan</center>";
        }else{
            $result["datapelamar"] = $this->ModelPelamar->getdata($this->input->post('cari'));
            if ((count($result["datapelamar"])==0)){
                $data["html"] = "<center>Maaf Data Tidak Di Temukan</center>";
            }else{
                $data["html"] = $this->load->view("Careers/DataPelamar",$result,true);
            }
        }

        echo json_encode([
            "status" => 200,
            'title' => 'Data Lamaran',
            "html" => $data["html"],
        ]);
    }
    public function lolosberkas(){
        $this->load->model("Careers/ModelPelamar");
        $this->ModelPelamar->UpdateData($this->input->post("id"),["status" => 2]);
        echo json_encode([
           'status' => 200,
            'id'=> $this->input->post("id")
        ]);
    }

    public function sendemail(){
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'admin@anandahospital.com',
            'smtp_pass' => 'm4k4554r',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );
        $this->load->library('email', $config);
        $this->load->model("Careers/ModelPelamar");
        $datapelamar = $this->ModelPelamar->getdata("08114442662");
        foreach ($datapelamar as $row){
            $this->email->from('admin@anandahospital.com', 'RSIA Ananda Makassar');
            $this->email->to("hademopilie@gmail.com");
            $this->email->subject('Pengumuman Pengumpulan Berkas Secara Online');
            $this->email->message('Hi '.$row->nama_depan.' Here is the info you requested.');
            $this->email->send();
            echo $this->email->print_debugger();
        }
    }
}
