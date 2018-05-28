<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('UserModel');
        
    }

	function RegisterUser(){

			   if(isset($_POST['togbutton'])){

				 $person = "don";

				}else{

						$person = "res";

				}

				$config['upload_path'] = './uploads';
		        $config['allowed_types'] = '*';


		        $this->load->library('upload',$config);


		        $this->upload->do_upload('file_name');

		        $file_name = $this->upload->data();

		        $roleCat = $_POST["rolecategory"];
		       
		        




		        if($person == "res"){






				$user_array = array(

		            
		            'firstname'                  => $_POST['firstname'],
		            'lastname'               => $_POST['lastname'],
		            'addresslineone'               => $_POST['addresslineone'],
		            'addresslinetwo'               => $_POST['addresslinetwo'],
		            'contactno'            =>$_POST['contactnumber'],
		            'role' 					=>$roleCat

		        );

		        $this->UserModel->insertData($tablename="systemuser", $user_array);

		        $userId = $this->UserModel->getmaxsystemuserid();

		        $login_array = array(

		            
		            'email'                  => $_POST['email'],
		            'password'               => md5($_POST['password']),
		            'systemUser_systemUserId'=> $userId

		        );


		        $this->UserModel->insertData($tablename="login", $login_array);

		        
		        if( $roleCat == 'Principle'){








		        
		        $recipient_array = array(

		            
		            'recommendation'                  => $file_name['file_name'],
		            'role'                  => 5,
		            'systemUser_systemUserId'=> $userId

		        );

		        $this->UserModel->insertData($tablename="reciepient", $recipient_array);


		    }
		    else if( $roleCat == 'Other Academic'){
		        
		        $recipient_array = array(

		            
		            'recommendation'                  => $file_name['file_name'],
		            'role'                  => 2,
		            'systemUser_systemUserId'=> $userId

		        );

		        $this->UserModel->insertData($tablename="reciepient", $recipient_array);


		    }
		    else if( $roleCat == 'Student'){
		        
		        $recipient_array = array(

		            
		            'recommendation'                  => $file_name['file_name'],
		            'role'                  => 1,
		            'systemUser_systemUserId'=> $userId

		        );

		        $this->UserModel->insertData($tablename="reciepient", $recipient_array);


		    }

		}else if($person == "don"){




				$user_array = array(

		            
		            'firstname'                  => $_POST['firstname'],
		            'lastname'               => $_POST['lastname'],
		            'addresslineone'               => $_POST['addresslineone'],
		            'addresslinetwo'               => $_POST['addresslinetwo'],
		            'contactno'            =>$_POST['contactnumber'],
		            'role' 					=>'Donor'

		        );

		        $this->UserModel->insertData($tablename="systemuser", $user_array);

		        $userId = $this->UserModel->getmaxsystemuserid();

		        $login_array = array(

		            
		            'email'                  => $_POST['email'],
		            'password'               => md5($_POST['password']),
		            'systemUser_systemUserId'=> $userId

		        );


		        $this->UserModel->insertData($tablename="login", $login_array);






				$donor_array = array(

		            
		            'rate'                  => 0,
		            'systemUser_systemUserId'=> $userId

		        );

		        $this->UserModel->insertData($tablename="donor", $donor_array);

		}



		$res = $this->UserModel->verifylog($_POST['email'],$_POST['password']);



        if($res !== false){

            $loggerbit = $res[0]->validBit;

            if($loggerbit == 0){



                $name = $res[0]->firstname;
                $id = $res[0]->systemUserId;
                $role = $res[0]->role;



                $the_session = array("loggername"=>$name,"loggerid"=>$id,"role"=>$role);
                $this -> session -> set_userdata($the_session);

                $this->load->view("home");


            }
            else{



            	echo "You login as a Admin";


            }


        }

        else{
            echo "
                <div>
                <center>
                    <h1 style='color: #9f191f'>Wrong Username or Password</h1>
                    <h3 style='color: #398439'>Try again!</h3>
                 </center>
                 </div>
                 ";
            //$this->load->view('login_view');
        }

		redirect("Welcome");

		        
}



 public function loginchk(){






        $res = $this->UserModel->verifylog($this->input->post('email'),$this->input->post('password'));



        if($res !== false){

            $loggerbit = $res[0]->validBit;

            if($loggerbit == 0){



                $name = $res[0]->firstname;
                $id = $res[0]->systemUserId;
                $role = $res[0]->role;



                $the_session = array("loggername"=>$name,"loggerid"=>$id,"role"=>$role);
                $this -> session -> set_userdata($the_session);

                $this->load->view("home");


            }
            else{



            	echo "You login as a Admin";


            }


        }

        else{
            echo "
                <div>
                <center>
                    <h1 style='color: #9f191f'>Wrong Username or Password</h1>
                    <h3 style='color: #398439'>Try again!</h3>
                 </center>
                 </div>
                 ";
            //$this->load->view('login_view');
        }




    }

    public function signout(){
        session_unset();
        redirect(base_url()); //redirect to login
    }


}