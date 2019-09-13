<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<?php 

$this->load->library('Pdf');

class pdfbaru extends TCPDF {
		

  public function Header(){
  	$this->SetFont('Helvetica', '', 8);
     $html = '<table><tr><td align="left">BERITA ACARA '.$id_ba.'</td>  <td align="right"> <a href="'.$_SERVER['REQUEST_URI'].'" target="_blank" >'.$_SERVER['REQUEST_URI'].'</a></td></tr></table>';

     $this->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = 'top', $autopadding = true);
  }

  public function Footer(){
  	date_default_timezone_set("Asia/Bangkok");
  	$date1= date('d/m/Y h:i A');

  	$this->SetFont('Helvetica', '', 8);
     $html = '<p style="text-indent: 0pt;text-align: left;"><br/></p><p class="s1" style="padding-top: 3pt;text-indent: 0pt;text-align: left;">Page '.$this->getAliasNumPage().' of '.$this->getAliasNbPages().' '.$date1.'</p>';


     $this->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = 'top', $autopadding = true);
  }

 

}
	date_default_timezone_set("Asia/Bangkok");
	$strtotime = strtotime($timestamp);
  	$date2= date('d/m/Y', $strtotime);
  	$year= date('Y', $strtotime);
  	$role= $this->session->userdata('role');
	
      $pdf = new pdfbaru('P', 'mm', 'A4', true, 'UTF-8', false);
      $pdf->SetTitle('Berita Acara '.$id_ba);
      $pdf->SetHeaderMargin(10);
      $pdf->SetMargins(15, 15, 15, true);
      $pdf->setFooterMargin(30);
      $pdf->SetAutoPageBreak(true,21);
      $pdf->SetAuthor('$id_user');
      $pdf->SetDisplayMode('real', 'default');

      

      $html = '

     <!DOCTYPE  html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>BERITA ACARA</title>


<style type="text/css"> * {margin:0; padding:0; text-indent:0; }
 .s1 { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 10pt; }
 .a, a { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 10pt; }
 h1 { color: black; font-family:Tahoma, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 11.5pt; }
 p { color: black; font-family:Tahoma, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 8.5pt; margin:0pt; }
 h2 { color: black; font-family:Tahoma, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 8.5pt; }
 .s2 { color: black; font-family:Tahoma, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 9.5pt; }
</style>
</head>

	<body>

	<h1 style="padding-top: 5pt;text-align: center;">BERITA ACARA <br>PENYERAHAN PERANGKAT ACCESS POINT <br> 
	
	TEL. '.$id_ba.'/LG.320/DWB-a1043000/'.$year.'

	</h1><p style="text-indent: 0pt;text-align: left;"><br/></p>

	';
	
	foreach ($user as $key) {
	$html .= '
	<p style="padding-left: 67pt;text-indent: 0pt;text-align: left;">Pada hari ini, '.$date.', saya yang bertanda tangan di bawah ini :</p>
	<p style="padding-top: 3pt;padding-left: 69pt;text-indent: 0pt;text-align: left;">NIK <b>: </b>'.$key['NIK_PENGIRIM'].'</p>
	<p style="padding-top: 3pt;padding-left: 69pt;text-indent: 0pt;text-align: left;">NAMA <b>:</b> '.$key['NAMA_PENGIRIM'].'</p>
	<p style="padding-top: 3pt;padding-left: 69pt;text-indent: 0pt;text-align: left;">WITEL <b>: </b>'.$key['WITEL_PENGIRIM'].'</p>';
}


	$html .= '
	<p style="padding-top: 6pt;padding-left: 67pt;text-indent: 0pt;text-align: left;">Telah melakukan serah terima perangkat Access Point dengan rincian sebagai berikut :</p>

	<p><br/></p>

	<table style="border-collapse:collapse;margin-left:68.055pt" cellspacing="0"><tr style="height:15pt"><td style="width:19pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7F7F7F;border-left-style:solid;border-left-width:1pt;border-left-color:#7F7F7F;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7F7F7F;border-right-style:solid;border-right-width:1pt;border-right-color:#7F7F7F"><p class="s2" style="padding-top: 1pt;padding-right: 2pt;text-indent: 0pt;text-align: right;">No</p></td><td style="width:76pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7F7F7F;border-left-style:solid;border-left-width:1pt;border-left-color:#7F7F7F;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7F7F7F;border-right-style:solid;border-right-width:1pt;border-right-color:#7F7F7F"><p class="s2" style="padding-top: 1pt;padding-left: 6pt;text-indent: 0pt;text-align: left;">Serial Number</p></td><td style="width:95pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7F7F7F;border-left-style:solid;border-left-width:1pt;border-left-color:#7F7F7F;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7F7F7F;border-right-style:solid;border-right-width:1pt;border-right-color:#7F7F7F"><p class="s2" style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;text-align: center;">Mac Address</p></td><td style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7F7F7F;border-left-style:solid;border-left-width:1pt;border-left-color:#7F7F7F;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7F7F7F;border-right-style:solid;border-right-width:1pt;border-right-color:#7F7F7F"><p class="s2" style="padding-top: 1pt;padding-left: 17pt;text-indent: 0pt;text-align: left;">Merk</p></td><td style="width:64pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7F7F7F;border-left-style:solid;border-left-width:1pt;border-left-color:#7F7F7F;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7F7F7F;border-right-style:solid;border-right-width:1pt;border-right-color:#7F7F7F"><p class="s2" style="padding-top: 1pt;padding-left: 21pt;text-indent: 0pt;text-align: left;">Type</p></td><td style="width:67pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7F7F7F;border-left-style:solid;border-left-width:1pt;border-left-color:#7F7F7F;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7F7F7F;border-right-style:solid;border-right-width:1pt;border-right-color:#7F7F7F"><p class="s2" style="padding-top: 1pt;padding-left: 8pt;text-indent: 0pt;text-align: left;">Alasan</p></td><td style="width:138pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7F7F7F;border-left-style:solid;border-left-width:1pt;border-left-color:#7F7F7F;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7F7F7F;border-right-style:solid;border-right-width:1pt;border-right-color:#7F7F7F"><p class="s2" style="padding-top: 1pt;padding-left: 44pt;text-indent: 0pt;text-align: left;">Keterangan</p></td></tr>
	';
	$i=1;
	foreach ($data as $key) {
		
	$html .='
	<tr style="height:15pt">
	<td style="width:19pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7F7F7F;border-left-style:solid;border-left-width:1pt;border-left-color:#7F7F7F;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7F7F7F;border-right-style:solid;border-right-width:1pt;border-right-color:#7F7F7F"><p class="s2" style="padding-top: 1pt;padding-right: 5pt;text-indent: 0pt;text-align: right;">'.$i++.'</p></td>
	<td style="width:76pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7F7F7F;border-left-style:solid;border-left-width:1pt;border-left-color:#7F7F7F;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7F7F7F;border-right-style:solid;border-right-width:1pt;border-right-color:#7F7F7F"><p class="s2" style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;text-align: left;">'.$key['AP_SN'].'</p></td>
	<td style="width:95pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7F7F7F;border-left-style:solid;border-left-width:1pt;border-left-color:#7F7F7F;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7F7F7F;border-right-style:solid;border-right-width:1pt;border-right-color:#7F7F7F"><p class="s2" style="padding-top: 1pt;padding-right: 1pt;text-indent: 0pt;text-align: center;">'.$key['MAC_ADDRESS'].'</p></td>
	<td style="width:55pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7F7F7F;border-left-style:solid;border-left-width:1pt;border-left-color:#7F7F7F;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7F7F7F;border-right-style:solid;border-right-width:1pt;border-right-color:#7F7F7F"><p class="s2" style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;text-align: left;">'.$key['MERK'].'</p></td>
	<td style="width:64pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7F7F7F;border-left-style:solid;border-left-width:1pt;border-left-color:#7F7F7F;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7F7F7F;border-right-style:solid;border-right-width:1pt;border-right-color:#7F7F7F"><p class="s2" style="padding-top: 1pt;padding-left: 2pt;text-indent: 0pt;text-align: left;">'.$key['TIPE'].'</p></td>
	<td style="width:67pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7F7F7F;border-left-style:solid;border-left-width:1pt;border-left-color:#7F7F7F;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7F7F7F;border-right-style:solid;border-right-width:1pt;border-right-color:#7F7F7F"><p class="s2" style="padding-top: 1pt;padding-left: 2pt;text-indent: 0pt;text-align: left;">'.$key['ALASAN'].'</p></td>
	<td style="width:138pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7F7F7F;border-left-style:solid;border-left-width:1pt;border-left-color:#7F7F7F;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7F7F7F;border-right-style:solid;border-right-width:1pt;border-right-color:#7F7F7F"><p class="s2" style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;text-align: left;">'.$key['KETERANGAN'].'</p></td></tr>
';
}
$html .='
	</table>

	<p><br/></p>

	<p style="padding-top: 7pt;padding-left: 67pt;text-indent: 0pt;text-align: left;">Demikian Berita Acara ini dibuat dengan sebenarnya untuk dipergunakan sebagaimana mestinya.</p>
	<p><br/></p>

	';
	
		foreach ($user as $x) {
		$html.= '<table style="font-size: 8.5;">
	<tr>
	<td align="center">Mengetahui,</td><td align="center">'.$x['WITEL_PENGIRIM'].', '.$date2.'</td></tr></table>	
		 <table style="font-size: 8.5;"><tr><td align="center" >MANAJER WITEL</td>
		 <td align="center">'.$x['JABATAN_PENGIRIM'].'</td></tr></table>
		 
		 <p><br/></p>
		 <p><br/></p>
		 <p><br/></p>

		 <table style="font-size: 8.5;">
		 <tr>
		 <td align="center">(<u>.................................</u>)</td> 
		 <td align="center">'.$x['NAMA_PENGIRIM'].'</td>
		 </tr></table>

		 <table style="font-size: 8.5;">
		 <tr>
		 <td align="center">NIK : ................</td>
		 <td align="center">NIK : '.$x['NIK_PENGIRIM'].'</td>
		 </tr> </table>'; 
}
		 $pdf->AddPage();
      // $pdf->Write(5, 'CodeIgniter TCPDF Integration');
      $pdf->writeHTML($html, true, false, true, false, '');
      ob_clean();
      $pdf->Output('pdfexample.pdf', 'I');

      // var_dump($data)
        ?>





</HTML>
