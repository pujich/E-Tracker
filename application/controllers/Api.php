<?php
require(APPPATH.'/libraries/REST_Controller.php');

 
class Api extends REST_Controller
{

     public function __construct() {
        header('Access-Control-Allow-Origin: *');
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
            parent:: __construct();
            $this->load->Model('User_model');
            
        }

        public function login_post(){
        $user_login=array(
            'username'=>$this->input->post('username'),
            'password'=>$this->input->post('password')
        );  
            
        $data=$this->User_model->login_user($user_login['username'],$user_login['password']); 


        if($data['ROLE']=='lapangan'){ 
          return $this->response($data); 
            
            

        }   else {
             return $this->response(NULL);   

        }
    }

   public function AP_post()
    {   
         $mac = $this->input->post('mac_address');
        $AP = $this->User_model->getAP($mac);
          
        if($AP)
        {
           return $this->response($AP);
        }
 
        else
        {
            $this->response(NULL);
        }
    }
     
    function Update_post()
    {       $mac = $this->input->post('mac');
            $date=date('d-M-Y');

            $this->User_model->insertSelect($mac);

            $result = $this->user_model->updateAP($mac , array(

            'STATUS' => $this->input->post('status'),
            'PERUBAH' => $this->input->post('perubah'),
            'ALASAN' => $this->input->post('alasan'),
            'TIPE' => $this->input->post('tipe'),
            'ALAMAT' => $this->input->post('alamat'),
            'ALAMAT2' => $this->input->post('alamat2'),
            'ALAMAT3' => $this->input->post('alamat3'),
            'ALAMAT4' => $this->input->post('alamat4'),
            'KETERANGAN' => $this->input->post('keterangan'),
            'MODIFIEDDATE' => $date

        ));

            if($result === FALSE){

                $this->response(NULL);

            } else{
                     
                $this->response($result);}
        }
         
    }



    



?>

 
       
                                   
                


                                       
           