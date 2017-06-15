<?php
class model_fasilitaslayanan extends CI_Model {
	function __construct() {
        $this->load->database();
    }

	function get_kategori(){
		$query = $this->db->get("tb_kategori");
		return $query->result();
	}

	function get_data($kategori){
		$this->db->from("tb_fasilitaslayanan");
			$this->db->like('kategori', $kategori);
		$query = $this->db->get();
		return $query->result();
	}
}
?>
