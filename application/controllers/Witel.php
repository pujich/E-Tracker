
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Witel extends CI_Controller{

public function __construct() {
    		parent:: __construct();
    		$this->load->Model('ManageData');
    		
		}

	public function index(){
		$table = $this->session->userdata('table');
		$role = $this->session->userdata('role');
		$witel = $this->session->userdata('witel');

		if($role =='witel')
		{
			if($table=='AP'){
				$data = $this->ManageData->getDataWhere($table, array('WITEL'=>$witel));
				$count = $this->ManageData->countWitel($witel);
			$this->load->view('Witel', array('data' => $data,
												'count'=>$count));
			}
				else {
			$data = $this->ManageData->getAllData($table);
			$this->load->view('Witel', array('data' => $data));	}
			
		}else{
			redirect('Login');}
	}
// Fungsi memanggil tabel histori
	public function getHistory(){

		$this->session->set_userdata('table', 'HISTORY'); // Agar halaman admin mengenal tabel mana yang harus diambil
		redirect('witel');	

	}

// Fungsi memanggil tabel AP
	public function getAP(){

		$this->session->set_userdata('table', 'AP');
		redirect('Witel');	

	}

	public function getPart($where){
		
		// tambahi status

		$table = $this->session->userdata('table');
		$role = $this->session->userdata('role');
		$witel = $this->session->userdata('witel');

		if($role =='witel')
		{
		$data = $this->ManageData->getDataWhere($table, array('WITEL'=>$witel, 'STATUS'=>$where));
		$count = $this->ManageData->countWitel($witel);
		$this->load->view('Witel', array('data' => $data,
												'count'=>$count)); }

	}

	public function sort(){
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$witel = $this->session->userdata('witel');

		$data = $this->ManageData->sort('AP', array('WITEL'=>$witel),$from, $to);
		$this->load->view('Witel', array('data'=>$data));

		}

	public function action_witel(){
			$j=0;
			$inputter = array();
			$date=date('d-M-Y');
			$id_user=$this->session->userdata('id_user');

		if (isset($_POST['btnrepair'])){
			if (isset($_POST['candidate'])){

			foreach ($_POST['candidate'] as $key) {
				$inputter[] = array('PENGIRIM'=>$id_user,
									'TANGGAL'=>$date,
									'AP'=>$_POST['candidate'][$j],
									'TIPE_BA'=>'Penyerahan');

				$this->ManageData->insertSelect($_POST['candidate'][$j]);

				$this->ManageData->editData('AP', array('MAC_ADDRESS'=>$_POST['candidate'][$j]), array('WITEL'=>'Repair',
												'STATUS'=>'REPAIR',
												'MODIFIEDDATE'=>$date,
												'PERUBAH'=>$id_user));

				 $j++;


			}
			
			// $this->output->enable_profiler(TRUE);
			$id_ba=$this->ManageData->BAMasuk('BA',$inputter);
			redirect('Make_ba/penyerahan_keluar');

	} else { 
		echo "<script type='text/javascript'>alert('Pilih AP terlebih dahulu.');window.location.href='".base_url('Witel')."';</script>";  }
		}

		else if (isset($_POST['btnba'])){

		if (isset($_POST['candidate'])){

			foreach ($_POST['candidate'] as $key) {
				$inputter[] = array('PENGIRIM'=>$id_user,
									'TANGGAL'=>$date,
									'AP'=>$_POST['candidate'][$j],
									'TIPE_BA'=>'Pelaporan');
				 $j++;


			}
			
			// $this->output->enable_profiler(TRUE);
			$id_ba=$this->ManageData->BAMasuk('BA',$inputter);
			redirect('Ba/view_ba_pelaporan?id_ba='.$id_ba);

	} else { 
		echo "<script type='text/javascript'>alert('Pilih AP terlebih dahulu.');window.location.href='".base_url('Witel')."';</script>";  } }
}


	public function logout(){
		
		unset(
        $_SESSION['id_user'],
        $_SESSION['nama'],
        $_SESSION['username'],
        $_SESSION['role'],
        $_SESSION['loc_id'],
        $_SESSION['jabatan'],
        $_SESSION['witel']
       
);
		redirect('Login');
	}

}
	?>