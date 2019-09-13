<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BA_model extends CI_Model {

// Fungsi mengambil data yang dibutuhkan untuk membuat BA sesuai tanggal
	public function getDataBA($id){
		
		$this->db->select('AP_SN, MAC_ADDRESS, MERK, TIPE, ALASAN, KETERANGAN');
		$this->db->from('BA');
		$this->db->join('AP', 'MAC_ADDRESS=AP');
		$this->db->where('ID_BA',$id);
		// $this->db->where("MODIFIEDDATE BETWEEN (TO_DATE('".$min."', 'YYYY-MM-DD')) AND (TO_DATE('".$max."', 'YYYY-MM-DD'))");
		$data = $this->db->get();
		
		return $data->result_array();
	}


	public function getUserBA($id){
		$this->db->select('S.ID_USER AS NIK_PENGIRIM, S.NAMA AS NAMA_PENGIRIM, S.WITEL AS WITEL_PENGIRIM, S.JABATAN AS JABATAN_PENGIRIM,
			R.ID_USER AS NIK_PENERIMA, R.NAMA AS NAMA_PENERIMA, R.WITEL AS WITEL_PENERIMA, R.JABATAN AS JABATAN_PENERIMA');
		$this->db->distinct();
		$this->db->from('BA');
		$this->db->join('USERPASS S', 'S.ID_USER = BA.PENGIRIM');
		$this->db->join('USERPASS R', 'R.ID_USER = BA.PENERIMA');
		$this->db->where('BA.ID_BA', $id);
		$data = $this->db->get();
		return $data->result_array();
	}

	public function getUserWitelBA($id){
		$this->db->select('ID_USER AS NIK_PENGIRIM, NAMA AS NAMA_PENGIRIM, WITEL AS WITEL_PENGIRIM, JABATAN AS JABATAN_PENGIRIM');
		$this->db->distinct();
		$this->db->from('BA');
		$this->db->join('USERPASS', 'ID_USER = BA.PENGIRIM');
		$this->db->where('BA.ID_BA', $id);
		$data = $this->db->get();
		return $data->result_array();
	}

	public function getTgl($id){
		$this->db->select('TANGGAL');
		$this->db->distinct();
		$this->db->from('BA');
		$this->db->where('ID_BA', $id);
		$data=$this->db->get();
		
		return $data->row('TANGGAL');

	}

	// public function getRepairBA($table, $where){
		
	// 	$this->db->select('*');
	// 	$this->db->from($table);
	// 	$this->db->where_in('MAC_ADDRESS', $where);
	// 	$data = $this->db->get();
		
	// 	return $data->result_array();
	// }

	
	}

