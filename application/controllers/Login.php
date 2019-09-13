<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

// Menginisiasi hal hal default yang akan digunakan dalam Controller, pada kasus ini model Loginuser
public function __construct() {
    		parent:: __construct();
    		 $this->load->Model('Loginuser'); 
		}

// Fungsi pemanggil halaman
	public function index(){
 
		$this->load->view('Login');	
	}

// Fungsi login
	public function aksi_login(){
		$user_login=array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password')
 		);	// Mengambil username dan password yang telah dipost
		
		$data=$this->Loginuser->login_user($user_login['username'],$user_login['password']); // Mengecek apakah user ada di database lewat model


		if($data){ // Jika datanya ada
			$session= array('id_user' => $data['ID_USER'],
							'nama' => $data['NAMA'],
							'username' => $data['USERNAME'],
							'role' => $data['ROLE'],
							'jabatan' => $data['JABATAN'],
							'witel' => $data['WITEL']); 
	
        	$this->session->set_userdata($session); // Session dibuat

	    	$role=$this->session->userdata('role');
        	switch ($role){ // Mengarahkan user menurut halamannya

	    	case "admin" : 
	    		$this->session->set_userdata('table','USERPASS');
				redirect('Admin');
				break;

				case 'repair' : 
				$this->session->set_userdata('identifier','');
				redirect('Repair');
				break;

				case 'witel' : 
				$this->session->set_userdata('table','AP');
				redirect('Witel');
				break;

				case 'regional' : 
				redirect('Region');
				break;

				default:
				echo "Something is wrong. Please try again.";}

        }	else {
                	$message = "Username / Password salah";
					echo "<script type='text/javascript'>alert('$message');window.location.href='".base_url('Login')."';</script>"; //jika salah kembali ke login

		}
	}


	
	
}
	?>