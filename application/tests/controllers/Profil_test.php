<?php

class Profil_test extends TestCase {
	
		public function setUp()
        {
            $this->resetInstance();
            $this->CI->load->model('Model_futsal');
            // $this->objek = $this->CI->Model_futsal;
            $this->form_validation = new CI_Form_validation();
             
        }


	public function test_index(){
        $_SESSION['id_user'] = "3";
		$_SESSION['username'] = "bagus";
		$output = $this->request('GET', 'Profil/index');
		$this->assertContains('<title>FUTSAL.in</title>', $output);
        }
		
	public function test_index_notlogged(){
            $output = $this->request('GET', 'Profil/index');
            $this->assertFalse( isset($_SESSION['id_user'], $output) );
			$this->assertRedirect('login');
        }
		
	public function test_edit_profil(){
			$_SESSION['id_user'] = "3";
            $_SESSION['username'] = "bagus";
			
	

            $expected = array(
            	
				'alamat_user' => 'Kureksari' , 
				'ttl_user' =>'17 agustus 45', 
				'phone_user' => '08672916399', 
				'deskripsi'=>'Cogito ergo sum', 
				'quote' => 'aye'
				);

            

            $filename = 'profil_puji.jpg';
            $filepath = 'D:/'.$filename;
            $files = [
                            'file1' => [
                                    'name'     => $filename,
									'type'     => 'gif/png/jpg',
                                    'tmp_name' => $filepath,
                            ],
                    ];
        $this->request->setFiles($files);
		$this->request(
			'POST',
			'Profil/edit_profil', $expected
		);

// $this->assertTrue(isset(var);

		$updated = $this->CI->Model_futsal->tampil_profil(3);
		$actual = $expected['quote'];
		$actual2 = $expected['deskripsi'];
		

		foreach ($updated as $x) {
			$this->assertEquals($actual,$x['quote']);
			$this->assertEquals($actual2,$x['deskripsi']);
			
		}
			
	}
	


	public function test_edit_profil_nouploadfalse(){
			$_SESSION['id_user'] = "1";
            $_SESSION['username'] = "umar";
            
			$output = $this->request('POST', 'Profil/edit_profil',
									['id_user'=> '1']);
			$this->assertFalse( isset($_SESSION['id_user'], $output) );
			$this->assertRedirect('Profil');
	}
		
}