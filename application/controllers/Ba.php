
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ba extends CI_Controller{

public function __construct() {
    		parent:: __construct();
    		$this->load->Model('BA_model');
    		
		}

	public function index(){
		$role = $this->session->userdata('role');
		if($role == 'repair' || $role == 'witel'){
		redirect('Make_ba');}
		else {redirect('Login');}
		
	}

		

		public function view_ba_pelaporan(){
		$role = $this->session->userdata('role');
		$id_ba = $this->input->get('id_ba');
		$timestamp=$this->BA_model->getTgl($id_ba);
		$date= $this->indonesian_date($timestamp, 'l, j F Y', '');
				
		if ($role == 'witel') {
			$user = $this->BA_model->getUserWitelBA($id_ba);
			$data = $this->BA_model->getDataBA($id_ba);
			$this->load->view('ba_pelaporan', array('user'=>$user,
											'data'=>$data,
											'date'=>$date,
											'timestamp'=>$timestamp,
											'id_ba'=>$id_ba) );

		}
		else{
			redirect('Login');}
		}

		public function view_ba_penyerahan(){
		$role = $this->session->userdata('role');
		$id_ba = $this->input->get('id_ba');
		$timestamp=$this->BA_model->getTgl($id_ba);
		$date= $this->indonesian_date($timestamp, 'l, j F Y', '');
				
		if ($role == 'repair' || $role='witel') {
			$user = $this->BA_model->getUserBA($id_ba);
			$data = $this->BA_model->getDataBA($id_ba);
			$this->load->view('Ba_penyerahan', array('user'=>$user,
											'data'=>$data,
											'date'=>$date,
											'timestamp'=>$timestamp,
											'id_ba'=>$id_ba) );

		}
		else{
			redirect('Login');}
		}

		public function view_ba_unfinished(){
		$role = $this->session->userdata('role');
		$id_ba = $this->input->get('id_ba');
		$timestamp=$this->BA_model->getTgl($id_ba);
		$date= $this->indonesian_date($timestamp, 'l, j F Y', '');
				
		if ($role == 'witel' || $role == 'repair') {
			$user = $this->BA_model->getUserWitelBA($id_ba);
			$data = $this->BA_model->getDataBA($id_ba);
			$this->load->view('Ba_unfinished', array('user'=>$user,
											'data'=>$data,
											'date'=>$date,
											'timestamp'=>$timestamp,
											'id_ba'=>$id_ba) );

		}
		else{
			redirect('Login');}
		}

public function indonesian_date ($timestamp = '', $date_format = 'l, j F Y | H:i', $suffix = 'WIB') {
    if (trim ($timestamp) == '')
    {
            $timestamp = time ();
    }
    elseif (!ctype_digit ($timestamp))
    {
        $timestamp = strtotime ($timestamp);
    }
    # remove S (st,nd,rd,th) there are no such things in indonesia :p
    $date_format = preg_replace ("/S/", "", $date_format);
    $pattern = array (
        '/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
        '/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
        '/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
        '/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
        '/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
        '/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
        '/April/','/June/','/July/','/August/','/September/','/October/',
        '/November/','/December/',
    );
    $replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
        'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
        'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
        'Januari','Februari','Maret','April','Juni','Juli','Agustus','Sepember',
        'Oktober','November','Desember',
    );
    $date = date ($date_format, $timestamp);
    $date = preg_replace ($pattern, $replace, $date);
    $date = "{$date} {$suffix}";
    return $date;
} 

	
	
	// public function display_ba(){
	// 	$min = $this->input->post('from');
	// 	$max = $this->input->post('to');



	// 	$id_user=$this->session->userdata('id_user');
	// 	$dataBA = $this->BA->getDataBA($min, $max, $id_user);

	// 	$this->load->view('make_ba', array('dataBA' => $dataBA ));

	// }

	// public function validate(){}

	// public function makePdf() {
	//     $this->load->library('Pdf');
	//     $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
	//     $pdf->SetTitle('Berita Acara');
	//     $pdf->SetHeaderMargin(30);
	//     $pdf->SetTopMargin(20);
	//     $pdf->setFooterMargin(20);
	//     $pdf->SetAutoPageBreak(true);
	//     $pdf->SetAuthor($id_user);
	//     $pdf->SetDisplayMode('real', 'default');
	//     $pdf->Write(5, 'CodeIgniter TCPDF Integration');
	//     $pdf->Output('pdfexample.pdf', 'I'); 
	// }

	// public function view_iframeR(){
	// 	$min=$this->input->post('min');
	// 	$max=$this->input->post('max');

	// 	$this->load->Model('BA');
	// 	$dataBA = $this->BA->getDataBA('TEMP_R', $min, $max);
	// 	$this->load->view('ba', array('dataBA' => $dataBA));
	// }

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
		redirect('login');
	}

}
	?>