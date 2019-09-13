<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Region extends CI_Controller{

public function __construct() {
    		parent:: __construct();
    		$this->load->Model('ManageData');
    		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
		}

	public function index(){

		$role = $this->session->userdata('role');
		$witel = $this->session->userdata('witel');

		if($role =='regional')
		{
			
				$data = $this->ManageData->getAllData('AP');
		
			$this->load->view('Region', array('data' => $data));
			}
				else{
			redirect('Login');}

			 

		} 

		// Fungsi mengedit AP yang dipilih dari database
	public function editAP(){	
		$where = array("MAC_ADDRESS"=> $_POST['mac']);

		if($this->session->userdata('role')=='regional'){
		$data = array( "AP_SN"=> $_POST['serial'],
                    "MAC_ADDRESS"=> $_POST['mac'],
                    "NO_SURATDO"=> $_POST['no_suratdo'],
                    "MERK"=> $_POST['merk'],
                    "MITRA"=> $_POST['mitra'],
                    "TIPE"=> $_POST['tipe'],
                    "STATUS"=> $_POST['status'],
                    "MODIFIEDDATE"=> $_POST['moddate'],
                    "PERUBAH"=> $_POST['perubah'],
                    "ALASAN"=> $_POST['alasan'],
                    "KETERANGAN"=> $_POST['ket'],
                    "NO_SP"=> $_POST['no_sp'],
                    "WITEL"=> $_POST['witel']
			 );
		$this->ManageData->insertSelect($_POST['mac']);
		$this->ManageData->editData('AP', $where, $data);

		echo "<script type='text/javascript'>alert('Update telah berhasil dilakukan.');window.location.href='".base_url('Region')."';</script>";
	} else {redirect('Login');}

	}

	public function get_edit($id){
		if($this->session->userdata('role')=='regional'){
			
			$data = $this->ManageData->getDataWhere('AP', array('MAC_ADDRESS'=>$id));
			$this->load->view('Edit_ap', array('data'=>$data));
		}
		else {redirect('Login');}

	}

// Fungsi menghapus AP yang dipilih dari database
	public function deleteAP($id){
		$this->ManageData->insertSelect($id);
		if($this->session->userdata('role')=='regional'){
		$this->ManageData->DeleteData('AP', array('MAC_ADDRESS'=>$id));
		echo "<script type='text/javascript'>alert('AP telah berhasil dihapus.');window.location.href='".base_url('Region')."';</script>";
		}
		else {redirect('Login');}
	}

		public function upload(){

		if($this->session->userdata('role')=='regional'){	

        $fileName = time().$_FILES['file']['name'];
         
        $config['upload_path'] = './temp_dump/'; //buat folder dengan nama temp_dump di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;
         
        $this->load->helper('file');
        $this->load->library('upload');
        $this->upload->initialize($config);
         
        if(! $this->upload->do_upload('file') )
        $this->upload->display_errors();
             
        $media = $this->upload->data('file');
        $inputFileName = './temp_dump/'.$fileName;
         
        try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }
 
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();
             
            for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                                NULL,
                                                TRUE,
                                                FALSE);
                                                 
                //Sesuaikan sama nama kolom tabel di database                                
                 $data = array(
                    "AP_SN"=> $rowData[0][0],
                    "MAC_ADDRESS"=> $rowData[0][1],
                    "NO_SURATDO"=> $rowData[0][2],
                    "MERK"=> $rowData[0][3],
                    "MITRA"=> $rowData[0][4],
                    "MODIFIEDDATE"=> date('d-M-Y'),
                    "PERUBAH"=> $this->session->userdata('id_user'),
                    "NO_SP"=> $rowData[0][5],
                    "WITEL"=> $rowData[0][6]
                 
                );
                 
                //sesuaikan nama dengan nama tabel
                $insert = $this->db->insert("AP",$data);
                
                     
            } delete_files('./temp_dump/');
        echo "<script type='text/javascript'>alert('Data berhasil dimasukkan');window.location.href='".base_url('Region')."';</script>"; 
    } else {redirect('Login');}
    } 

    public function addAP(){

    	if ($this->session->userdata('role')=='regional') {
    	
    		$data=array("AP_SN"=> $_POST['serial'],
                    "MAC_ADDRESS"=> $_POST['mac'],
                    "NO_SURATDO"=> $_POST['no_suratdo'],
                    "MERK"=> $_POST['merk'],
                    "MITRA"=> $_POST['mitra'],                    
                    "PERUBAH"=>$_POST['perubah'],
                    "MODIFIEDDATE"=>$_POST['moddate'],                    
                    "NO_SP"=> $_POST['no_sp'],
                    "WITEL"=> $_POST['witel']
    );
    		if ($data) {
    			$this->ManageData->insertData('AP', $data);
    			echo "<script type='text/javascript'>alert('Data berhasil dimasukkan');window.location.href='".base_url('Region')."';</script>"; 
    		} else {
    			echo "<script type='text/javascript'>alert('Masukkan data terlebih dahulu');window.location.href='".base_url('Region')."';</script>"; 	
    		}
    	

    	

    } else {echo "Something is wrong";}

} }

		 ?>