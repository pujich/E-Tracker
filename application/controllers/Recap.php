<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recap extends CI_Controller{

// Menginisiasi hal hal default yang akan digunakan dalam Controller, pada kasus ini model Loginuser
public function __construct() {
    		parent:: __construct();
    		 $this->load->Model('ManageData'); 
		}

// Fungsi pemanggil halaman
	public function index(){
 		$data=$this->ManageData->recap();
 		$user=$this->session->userdata('id_user');
 		if($user){
		$this->load->view('Recap', array('data'=>$data));}
		else {redirect('Login');}
	}


	
	
}
	?>