
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Make_ba extends CI_Controller{

public function __construct() {
    		parent:: __construct();
    		$this->load->Model('BA_model');
    		$this->load->Model('ManageData');
		}

	public function index(){
		
		$role = $this->session->userdata('role');
		if($role == 'repair' || $role == 'witel'){
		redirect('Make_ba');}
		else {redirect('Login');}
	}

	public function pelaporan(){
		$role = $this->session->userdata('role');
		$witel = $this->session->userdata('witel');
		if ($role == 'witel')
		{
			$data = $this->ManageData->getBAList('ID_BA, PENGIRIM, PENERIMA, TANGGAL','BA', 
				array('AP.WITEL'=>$witel, 
					'ROLE'=>'witel', 
					'TIPE_BA'=>'Pelaporan'));
			$this->load->view('Pelaporan', array('data' => $data));	
			
			
		}else{
			redirect('Login');}

	}

	public function penyerahan_masuk(){
		$role = $this->session->userdata('role');
		$witel = $this->session->userdata('witel');
		if ($role == 'witel' || $role =='repair')
		{
			$data = $this->ManageData->getBAList('ID_BA, PENGIRIM, PENERIMA, TANGGAL, ROLE','BA', 
				array('AP.WITEL'=>$witel, 
					'ROLE'=>'repair', 
					'TIPE_BA'=>'Penyerahan'));
			// $this->output->enable_profiler(TRUE);
			$this->load->view('Penyerahan', array('data' => $data));	
			
			
		}else{
			redirect('Login');}
	}	

	public function penyerahan_keluar(){
		$role = $this->session->userdata('role');
		$witel = $this->session->userdata('witel');
		if ($role == 'witel' || $role =='repair')
		{
			$data = $this->ManageData->getBAList('ID_BA, PENGIRIM, PENERIMA, TANGGAL, ROLE','BA', 
				array('USERPASS.WITEL'=>$witel, 
					'ROLE'=>'witel', 
					'TIPE_BA'=>'Penyerahan'));
			// $this->output->enable_profiler(TRUE);
			$this->load->view('Penyerahan', array('data' => $data));	
			
			
		}else{
			redirect('Login');}
	}	

	public function penyerahan(){
		$role = $this->session->userdata('role');
		if ($role == 'witel' || $role =='repair')
		{
			$data = $this->ManageData->getBAList('ID_BA, PENGIRIM, PENERIMA, TANGGAL','BA', 
				array('ROLE'=>'repair'));

			$this->load->view('Penyerahan', array('data' => $data));	
			
			
		}else{
			redirect('Login');}
	}	

	public function validate(){
		
		$role = $this->session->userdata('role');
		$id_user=$this->session->userdata('id_user');
		$id_ba=$this->input->get('id_ba');

		if($role=='witel'){

		$id_user=$this->session->userdata('id_user');
		$this->ManageData->editData('BA', array('ID_BA'=>$id_ba), array('PENERIMA'=>$id_user));

		echo "<script type='text/javascript'>alert('Anda telah menyatakan penerimaan berita acara No. ".$id_ba.".');window.location.href='".base_url('Make_ba/penyerahan_masuk')."';</script>"; 

	}

else if($role=='repair'){

		$id_user=$this->session->userdata('id_user');
		$this->ManageData->editData('BA', array('ID_BA'=>$id_ba), array('PENERIMA'=>$id_user));

		echo "<script type='text/javascript'>alert('Anda telah menyatakan penerimaan berita acara No. ".$id_ba.".');window.location.href='".base_url('Make_ba/penyerahan_keluar')."';</script>"; 

	}
	else {redirect('Login');}
		//update insert di penerima
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