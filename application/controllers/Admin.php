	
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

// Menginisiasi hal hal default yang akan digunakan dalam Controller, pada kasus ini model ManageData
public function __construct() {
    		parent:: __construct();
    		$this->load->Model('ManageData');
		}

// Fungsi pemanggil halaman
	public function index(){
		
		$table = $this->session->userdata('table'); // Untuk memanggil tabel
		$role = $this->session->userdata('role'); // Untuk mengambil role user yang login

		if($role =='admin') //memastikan yang masuk halaman adalah admin
		{
			$data = $this->ManageData->getAllData($table);
			$this->load->view('Admin', array('data' => $data));	// Load view dengan membawa data dari database lewat model ManageData
			
		}else{
			redirect('login');}
	}

// Fungsi memanggil tabel histori
	public function getHistory(){

		$this->session->set_userdata('table', 'HISTORY'); // Agar halaman admin mengenal tabel mana yang harus diambil
		redirect('Admin');	

	}

// Fungsi memanggil tabel AP
	public function getAP(){

		$this->session->set_userdata('table', 'AP');
		redirect('Admin');	

	}

// Fungsi memanggil tabel temp_w
	public function getTempW(){

		$this->session->set_userdata('table', 'TEMP_W');
		redirect('Admin');	

	}

// Fungsi memanggil tabel temp_r
	public function getTempR(){

		$this->session->set_userdata('table', 'TEMP_R');
		redirect('Admin');	

	}

// Fungsi memanggil tabel userpass
	public function getUser(){

		$this->session->set_userdata('table', 'USERPASS');
		redirect('Admin');	

	}

// Fungsi mengedit user yang dipilih dari database
	public function editUser($id){	
		$where = array('ID_USER' => $id );

		$data = array('ID_USER' => $id,
							'NAMA' => $_POST['nama'],
							'USERNAME' => $_POST['user'],
							'PASSWORD' => $_POST['pass'],
							'ROLE' => $_POST['role'],
							'JABATAN' => $_POST['jabatan'],
							'WITEL' => $_POST['witel']
			 );

		$this->ManageData->editData('USERPASS', $where, $data);

		echo "<script type='text/javascript'>alert('Update telah berhasil dilakukan.');window.location.href='".base_url('Admin')."';</script>";

	}

// Fungsi menghapus user yang dipilih dari database
	public function deleteUser($id){
		$this->ManageData->DeleteData('USERPASS','ID_USER='.$id);
		echo "<script type='text/javascript'>alert('User telah berhasil dihapus.');window.location.href='".base_url('Admin')."';</script>";
		redirect('Admin');
	}

	public function add_user(){

			$data = array(
							'NAMA' => $_POST['nama'],
							'USERNAME' => $_POST['user'],
							'PASSWORD' => $_POST['pass'],
							'ROLE' => $_POST['role'],
							'JABATAN' => $_POST['jabatan'],
							'WITEL' => $_POST['witel']
			 );

			$this->ManageData->insertData('USERPASS', $data);
			redirect('Admin');
		}

	// public function search(){
	// 	$table=$this->session->userdata('table');
	// 	if($table=='USERPASS'){
	// 		$where = array(	'NAMA' => $this->input->post('key'), 
	// 					'USERNAME' => $this->input->post('key'),
	// 					'ROLE' => $this->input->post('key') );
	// 	} 
	// 		else {
	// 	$where = array(	'AP_SN' => $this->input->post('key'), 
	// 					'MAC_ADDRESS' => $this->input->post('key'),
	// 					'NO_SURATDO' => $this->input->post('key'),
	// 					'MERK' => $this->input->post('key'),
	// 					'MITRA' => $this->input->post('key'),
	// 					'TIPE' => $this->input->post('key'),
	// 					'TIPE_AP' => $this->input->post('key'),
	// 					'STATUS' => $this->input->post('key'),
	// 					'LOC_ID' => $this->input->post('key'),
	// 					'ALAMAT' => $this->input->post('key'),
	// 					'ALAMAT2' => $this->input->post('key'),
	// 					'ALAMAT3' => $this->input->post('key'),
	// 					'ALAMAT4' => $this->input->post('key'),
	// 					'MODIFIEDDATE' => $this->input->post('key'),
	// 					'PERUBAH' => $this->input->post('key')
	// 				); }
	// 	$hasil = $this->ManageData->search($where, $table);
	// 	$this->load->view('admin', array('data' => $hasil));	
	// }



// Fungsi logout
	public function logout(){
		
		unset(
        $_SESSION['id_user'],
        $_SESSION['nama'],
        $_SESSION['username'],
        $_SESSION['role'],
        $_SESSION['table'],
        $_SESSION['loc_id'],
        $_SESSION['jabatan'],
        $_SESSION['witel']
);
		redirect('Login');
	}

}
	?>