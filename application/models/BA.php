<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BA_model extends CI_Model {

// Fungsi mengambil data yang dibutuhkan untuk membuat BA sesuai tanggal
	public function getDataBA($min, $max, $id){
		
		$this->db->select('*');
		$this->db->from('TEMP_R');
		// $this->db->join('USERPASS', 'USERPASS.ID_USER='.$table.'.USER1', 'inner');
		$this->db->where('USER1',$id);
		$this->db->where("MODIFIEDDATE BETWEEN (TO_DATE('".$min."', 'YYYY-MM-DD')) AND (TO_DATE('".$max."', 'YYYY-MM-DD'))");
		$data = $this->db->get();
		
		return $data->result_array();
	}

	public function getRepairBA($table){
		// $data=$this->db->query('SELECT * FROM '.$table.' WHERE ID_TEMP_R IN ('.$where.')');
		// $where = array(1,2);
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where_in('ID_TEMP_R', $where);
		$data = $this->db->get();
		
		return $data->result_array();
	}

	
	}

