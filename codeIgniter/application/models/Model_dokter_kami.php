<?php
class model_dokter_kami extends CI_Model {
	function __construct() {
        $this->load->database();
    }

	function get_data_limit($limit){
		$this->db->order_by('id', 'RANDOM');
		if ($limit>0)
			$this->db->limit($limit);

		$this->db->where('status','1');
		$query = $this->db->get('tb_dokter_kami');
		return $query->result();
	}

	function get_data_by_name($nama){
		$this->db->where("nama",$nama);
		$this->db->where('status','1');
		$query = $this->db->get('tb_dokter_kami');
		return $query->result();
	}
}
?>
