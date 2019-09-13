<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginuser extends CI_Model {

// Fungsi login, menagmbil data dari database
	  public function login_user($username,$pass) {
   
     // Query builder
      $this->db->select('*');
  		$this->db->from('USERPASS');
  		$this->db->where('USERNAME',$username);
  		$this->db->where('PASSWORD',$pass);
 
		if($query=$this->db->get()) { // Cek apakah data ada di database
			return $query->row_array();
		}
		else{
    		return false;
  		}
    }

// 	public function getKueBaru(){

// 		$data = $this->db->query('
//   SELECT * FROM kue 
//   ORDER BY id_kue DESC LIMIT 4
// ');
		
// 		return $data->result_array();	
// 	}

// 	public function getAllKue(){

// 		$data = $this->db->query('
//   SELECT * FROM kue 
//   -- ORDER BY id_kue DESC LIMIT 4
// ');

		
// 	}

// public function getKueK($kat){
// 	$this->db->where('kategori',$kat);
// 	$data = $this->db->get('kue');
		
// 		return $data->result_array();	}

// 	public function getPen(){

// 		$data = $this->db->query('
//   SELECT * FROM datapenjualan join kue on id_kueD=id_kue join user on id_userD=id_user 
//   ORDER BY date'
//   );
		
// 		return $data->result_array();	
// 	}


// 	public function getCart($id){

// 		$data = $this->db->query('
//   SELECT * FROM cart join kue on id_kueC=id_kue 
//   where id_userC='.$id);
// 		return $data->result_array();	
//   // -- ORDER BY id_kue DESC LIMIT 4
// }

// public function getAllCart(){

// 		$data = $this->db->query('
//   SELECT * FROM cart join kue on id_kueC=id_kue join user on id_userC=id_user'
//   );
// return $data->result_array();	
//   // -- ORDER BY id_kue DESC LIMIT 4
// }

// public function count($id){

// 	$count= $this->db->query('
// 		SELECT COUNT(id_cart) FROM cart WHERE id_cart='.$id);
// 	return $count->result();
// }
// 	public function getDetailBarang($item){
//   		// $this->db->where_in('id_barang', $item);
//   		$data=$this->db->query('select * from kue 
//   			where id_kue='.$item);

//   		return $data->result_array();
//   	}

// 	public function insertCart($data){
// 		$res = $this->db->insert('cart',$data);
// 		return $res;
// 	}

// 	public function insertData($data){
// 		$res = $this->db->insert('datapenjualan',$data);
// 		return $res;
// 	}

// 	public function lunas($id){
// 		// $user=$this->db->query('SELECT id_user FROM cart join kue on id_kueC=id_kue join user on id_userC=id_user');

		
// 			$this->db->where('id_cart',$id);
// 		$this->db->delete('cart');

// 	}

// 	// function login($username,$password) {
//  //        $this->db->where('username', $username);
//  //        $this->db->where('password', $password);
//  //        $query =  $this->db->get('user');
//  //        return $query->num_rows();
//  //    }
    
// //    untuk mengambil data hasil login
  

// 	public function updateCart($data,$where){
// 		$res = $this->db->update('cart',$data,'id_cart='.$where);
// 		return $res;
// 	}

// 	public function DeleteData($tableName,$data,$where){
// 		$res = $this->db->delete($tableName,$data,$where);
// 		return $res;
// 	}
	}

