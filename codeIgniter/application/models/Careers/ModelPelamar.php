<?php
class ModelPelamar extends CI_Model {
    function __construct() {
        $this->load->database();
    }
    function GetData($where=null,$pelamar=null,$status=1){
        $this->db->select("
            careers.pelamar.*,
            careers.lowongan.nama as jenis_lowongan
        ");
        if ($where!=null){
            $this->db->where("no_tlp",$where);
        }

        if ($pelamar!=null){
            $this->db->where("careers.pelamar.id_lowongan",$pelamar);
        }

        $this->db->join('careers.lowongan', 'careers.lowongan.id = careers.pelamar.id_lowongan');
        $this->db->where("careers.pelamar.status",$status);
        $this->db->order_by("berkas","desc");
        $query = $this->db->get("careers.pelamar");
        return $query->result();
    }
    function SetData($data){
        $this->db->insert("careers.pelamar", $data);
        return $this->db->insert_id();
    }

    function UpdateData($id,$data){
        $this->db->where('id', $id);
        $this->db->update('careers.pelamar', $data);
    }
}
?>
