<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageData extends CI_Model {

// Fungsi mengambil semua data dari tabel
	public function getAllData($table){
		
		$this->db->select('*');
		$this->db->from($table);
		// $this->db->where($where);
		$data = $this->db->get();
		
		return $data->result_array();
	}

// Fungsi memasukkan data ke database
		public function insertData($table, $data){
		$data = $this->db->insert($table,$data);
		return $data;
	}

	public function insertSelect($id){
		
		$this->db->query("INSERT INTO HISTORY (AP_SN, MAC_ADDRESS, NO_SURATDO, MERK, MITRA, TIPE, TIPE_AP, STATUS, LOC_ID, ALAMAT, MODIFIEDDATE, PERUBAH, ALAMAT2, ALAMAT3, ALAMAT4, ALASAN, KETERANGAN, NO_SP, WITEL)
		SELECT AP_SN, MAC_ADDRESS, NO_SURATDO, MERK, MITRA, TIPE, TIPE_AP, STATUS, LOC_ID, ALAMAT, MODIFIEDDATE, PERUBAH, ALAMAT2, ALAMAT3, ALAMAT4, ALASAN, KETERANGAN, NO_SP, WITEL FROM AP where MAC_ADDRESS='".$id."'");


	}

	public function BAMasuk($table, $data){
		$i=0;
		$id= $this->db->query('SELECT MAX(ID_BA) AS ID_BA FROM BA')->row('ID_BA');
		$id++;
		foreach ($data as $key) {
			$this->db->query("INSERT INTO ".$table." (PENGIRIM, AP, TANGGAL, ID_BA, TIPE_BA) 
				VALUES 
				('".$data[$i]['PENGIRIM']."', '".$data[$i]['AP']."', '".$data[$i]['TANGGAL']."', '".$id."', '".$data[$i]['TIPE_BA']."')");
			$i++;
		}
		return $id;
	}

	// public function BAWitel($table, $data){
	// 	$i=0;
	// 	$id= $this->db->query('SELECT MAX(ID_BA) AS ID_BA FROM BA')->row('ID_BA');
	// 	$id++;
	// 	foreach ($data as $key) {
	// 		$this->db->query("INSERT INTO ".$table." (PENGIRIM, AP, TANGGAL, ID_BA) 
	// 			VALUES 
	// 			('".$data[$i]['PENGIRIM']."', '".$data[$i]['AP']."', '".$data[$i]['TANGGAL']."', '".$id."')");
	// 		$i++;
	// 	}
		
	public function getBAList($select, $table, $where){
		
		$this->db->select($select);
		$this->db->distinct();
		$this->db->from($table);
		$this->db->join('AP', 'AP=MAC_ADDRESS');
		$this->db->join('USERPASS', 'PENGIRIM=ID_USER');
		$this->db->where($where);
		$this->db->order_by('ID_BA','ASC');
		$data = $this->db->get();
		
		return $data->result_array();
	}

	public function getDataWhere($table, $where){
		
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$data = $this->db->get();
		
		return $data->result_array();
	}

	public function sort($table, $where, $from, $to){
		$this->db->select('*')->from($table);
		$this->db->where("MODIFIEDDATE BETWEEN (TO_DATE('".$from."', 'YYYY-MM-DD')) AND (TO_DATE('".$to."', 'YYYY-MM-DD'))");
		$this->db->where($where);
		$data = $this->db->get();
		return $data->result_array();
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

				$this->db->query("UPDATE ".$table." SET STATUS = '".$data[$i]['STATUS']."', MODIFIEDDATE = TO_DATE('".$data[$i]['MODIFIEDDATE']."' , 'fmDD-Mon-RRRR'), PERUBAH = '".$data[$i]['PERUBAH']."' WHERE MAC_ADDRESS = '".$data[$i]['MAC_ADDRESS']."'");

				$i++;
		}
		
	
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

	public function countWitel($witel){
		$this->db->select('STATUS, COUNT(*) AS TOTAL');
	 	$this->db->group_by('STATUS'); 
	 	$this->db->where('WITEL',$witel);
 		$data=$this->db->get('AP');

		return $data->result_array();
	}

	public function checkStatus($table ,$where){
		
		$this->db->select('STATUS');
		$this->db->from($table);
		$this->db->where($where);
		$data = $this->db->get();
		
		return $data->row('STATUS');
	}

	private $_batchImport;
 
    public function setBatchImport($batchImport) {
        $this->_batchImport = $batchImport;
    }
 
    // save data
    public function importData() {
        $data = $this->_batchImport;
        $this->db->insert_batch('import', $data);
    }

    public function recap(){
    	$this->db->select("
    		WITEL,sum(decode(STATUS,'HILANG',1,0)) hilang,
sum(decode(STATUS,'SCRAPPED',1,0)) scrapped,
sum(decode(STATUS,'ONAIR',1,0)) onair,
sum(decode(STATUS,'READY',1,0)) ready,
sum(decode(STATUS,'DISMANTLED',1,0)) dismantled,
sum(decode(STATUS,'REPAIR',1,0)) repair
    		");
    	$this->db->from('AP');
    	$this->db->group_by('WITEL');
    	$data=$this->db->get();
    	return $data->result_array();
    }

// // Fungsi mencari data dari database
// 	public function search($where, $table){
// 		$data = $this->db->select('*')
// 			->from($table)
// 			->or_like($where)
// 			->get();

// 		return ($data->num_rows() <= 0)? false : $data->result_array();
// 	}
		
// 	}



	
	}

