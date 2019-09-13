<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageRepair extends CI_Model {

// Fungsi mengambil semua data dari tabel
	public function getDataRepair($where){
		
		$this->db->select('*');
		$this->db->from('AP');
		$this->db->where($where);
		$data = $this->db->get();
		
		return $data->result_array();
	}

// Fungsi memasukkan data ke database
		public function insertData($table, $data){
		$data = $this->db->insert($table,$data);
		return $data;
	}

		public function editAll($table, $data){
		$i=0;
		foreach ($data as $key) {
				// $this->db->where('ID_TEMP_R', $data[$i]['ID_TEMP_R']);
				// $this->db->set('MODIFIEDDATE', );
				// $this->db->set('STATUS', );
				// $this->db->set('PERUBAH', );
				// $this->db->where($where);
				// $this->db->insert($table);

				$this->db->query("UPDATE ".$table." SET STATUS = '".$data[$i]['STATUS']."', MODIFIEDDATE = TO_DATE('".$data[$i]['MODIFIEDDATE']."' , 'fmDD-Mon-RRRR'), PERUBAH = '".$data[$i]['PERUBAH']."' WHERE ID_TEMP_R = '".$data[$i]['ID_TEMP_R']."'");

				$i++;
		}
		
		// $subquery=$this->db->update_batch($table, $data, $where);
		// REPLACE($subquery,
		//  "'", 
		//  "");
	}
// Fungsi mengupdate data dari database
	public function editData($table, $where, $data){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

// Fungsi menghapus data dari database
	public function DeleteData($table,$where){
		$this->db->where($where);
		$data = $this->db->delete($table);
		return $data;
	}

	public function checkStatus($table ,$where){
		
		$this->db->select('STATUS');
		$this->db->from($table);
		$this->db->where($where);
		$data = $this->db->get();
		
		return $data->row('STATUS');
	}

	
	} ?>