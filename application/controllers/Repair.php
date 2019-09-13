
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Repair extends CI_Controller{

public function __construct() {
    		parent:: __construct();
    		$this->load->Model('ManageData');
    		
		}

	public function index(){
		
		$role = $this->session->userdata('role');
		$witel = $this->session->userdata('witel');

		if($role =='repair')
		{
			$data = $this->ManageData->getDataWhere('AP', array('WITEL'=>'Repair'));
			$this->load->view('Home_repair', array('data' => $data));	
			
		}else{
			redirect('Login');}
	}

	public function action_repair(){	
		
		$id_user=$this->session->userdata('id_user');
		$date=date('d-M-Y');

		if (isset($_POST['btnupdate'])){
		
		$i=0;
		$data = array();

		foreach ($_POST['id'] as $key) :
			$check = $this->ManageData->checkStatus('AP', array('MAC_ADDRESS' => $_POST['id'][$i]));

				if($check==$_POST['status'][$i]) {
					// var_dump($_POST['id'][$i]); 	echo ", salah di ".$i."<br/> ";
					 $i++;
				}

				else { 
					$data[] = array('MAC_ADDRESS'=> $_POST['id'][$i], 'STATUS' => $_POST['status'][$i], 'MODIFIEDDATE' => $date, 'PERUBAH' => $id_user);

					$i++;
				 }
				
		endforeach;
		// var_dump($data);
		$this->ManageData->editAll('AP', $data);
		
		echo "<script type='text/javascript'>alert('Update telah berhasil dilakukan.');window.location.href='".base_url('Repair')."';</script>"; 	
		 } 
		

		else if (isset($_POST['btnba'])){
			$witel_tujuan = $this->input->post('witel_tujuan');
			if (isset($_POST['candidate'])){
			$j=0;
			$inputter = array();

			foreach ($_POST['candidate'] as $key) {
				$inputter[] = array('PENGIRIM'=>$id_user,
									'TANGGAL'=>$date,
									'AP'=>$_POST['candidate'][$j],
									'TIPE_BA'=>'Penyerahan');

				$this->ManageData->insertSelect($_POST['candidate'][$j]);

				$this->ManageData->editData('AP', array('MAC_ADDRESS'=>$_POST['candidate'][$j]), array('WITEL'=>$witel_tujuan,
												'MODIFIEDDATE'=>$date,
												'PERUBAH'=>$id_user));

				 $j++;


			}
			
			// $this->output->enable_profiler(TRUE);
			$this->ManageData->BAMasuk('BA',$inputter);
		
			
			echo "<script type='text/javascript'>alert('Berita acara telah berhasil dibuat.');window.location.href='".base_url('Repair')."';</script>"; 
			//view_ba
			}
			else {
			echo "<script type='text/javascript'>alert('Pilih AP terlebih dahulu.');window.location.href='".base_url('Repair')."';</script>"; 
}
		}

				else{ echo "<script type='text/javascript'>alert('Something is wrong, please try again.');window.location.href='".base_url('Repair')."';</script>"; }

		}



	

	public function logout(){
		
		unset(
        $_SESSION['id_user'],
        $_SESSION['nama'],
        $_SESSION['username'],
        $_SESSION['role'],
        $_SESSION['loc_id'],
        $_SESSION['jabatan'],
        $_SESSION['witel'],
        $_SESSION['identifier']
       
);
		redirect('Login');
	}

}
	?>




