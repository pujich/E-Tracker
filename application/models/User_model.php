<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function login_user($username,$pass) {
     
      $this->db->select('ID_USER, ROLE');
  		$this->db->from('USERPASS');
  		$this->db->where('USERNAME',$username);
  		$this->db->where('PASSWORD',$pass);
 
		if($query=$this->db->get()) { 
			return $query->row_array();
		}
		else{
    		return false;
  		}
    }


	public function getAP($where){
		
		$this->db->select('AP_SN, MAC_ADDRESS, MERK, TIPE, STATUS, ALAMAT, ALAMAT2, ALAMAT3, ALAMAT4, ALASAN, KETERANGAN');
		$this->db->from('AP');
		$this->db->where('MAC_ADDRESS', $where);
		$data = $this->db->get();
		
		return $data->result_array();
	}

	public function updateAP ($where, $data){
		$this->db->where('MAC_ADDRESS',$where);
		$right = $this->db->update('AP', $data);
		return $right;
	}

	public function insertSelect($id){
		$this->db->query("INSERT INTO HISTORY (AP_SN, MAC_ADDRESS, NO_SURATDO, MERK, MITRA, TIPE, TIPE_AP, STATUS, LOC_ID, ALAMAT, MODIFIEDDATE, PERUBAH, ALAMAT2, ALAMAT3, ALAMAT4, ALASAN, KETERANGAN, NO_SP, WITEL)
		SELECT AP_SN, MAC_ADDRESS, NO_SURATDO, MERK, MITRA, TIPE, TIPE_AP, STATUS, LOC_ID, ALAMAT, MODIFIEDDATE, PERUBAH, ALAMAT2, ALAMAT3, ALAMAT4, ALASAN, KETERANGAN, NO_SP, WITEL FROM AP where MAC_ADDRESS='".$id."'");
	}

}

?>