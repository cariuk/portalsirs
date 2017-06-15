<?php
class ModelLowongan extends CI_Model {
	function __construct() {
        $this->load->database();
    }

    function getData(){
        $this->db->where("careers.lowongan.status",1);
		$query = $this->db->get('careers.lowongan');
		return $query->result();
	}

}
?>
