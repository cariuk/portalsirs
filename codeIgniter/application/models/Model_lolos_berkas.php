<?php
class model_lolos_berkas extends CI_Model {
	function __construct() {
        $this->load->database();
    }

	function get_data($filter,$gel){
		$this->db->where("profesi",$filter);
		$this->db->where("gelombang",$gel);
		$query = $this->db->get('tb_lolos_berkas');
		return $query->result();
	}
}
?>
