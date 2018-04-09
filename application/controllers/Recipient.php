<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recipient extends CI_Controller {



	 function __construct(){
        parent::__construct();
        $this->load->model('RequestModel');
        
    }

	public function Addproject()
	{
		
		$config['upload_path'] = './uploads';
        $config['allowed_types'] = '*';


        $this->load->library('upload',$config);


        $this->upload->do_upload('file_name');

        $file_name = $this->upload->data();


        $prjCat = $_POST["Category"];


        if($prjCat == 'infra'){
       
        $request_array = array(


            'projectTopic'                     => $_POST['projecttopic'],
            'description'                 => $_POST['description'],
            'requestdate'               => date('y-m-d'),
            'completiondate'                     => date('Y-m-d', strtotime($_POST['completiondate'])),
            'attachment'                     => $file_name['file_name'],
            'reciepient_reciepientid'               => 1,
            'reciepient_systemUser_systemUserId'               => 1,
            'request_category_request_categoryId'   => 1,
            'flag'   => 0



        );




        $this->RequestModel->insertData($tablename="request",$request_array);


    }elseif ($prjCat == 'other') {

    	 $request_array = array(


            'projectTopic'                     => $_POST['projecttopic'],
            'description'                 => $_POST['description'],
            'requestdate'               => date('y-m-d'),
            'completiondate'                     => date('Y-m-d', strtotime($_POST['completiondate'])),
            'attachment'                     => $file_name['file_name'],
            'reciepient_reciepientid'               => 1,
            'reciepient_systemUser_systemUserId'               => 1,
            'request_category_request_categoryId'   => 5,
            'flag'   => 0



        );
    	
    	  $this->RequestModel->insertData($tablename="request",$request_array);

    }elseif ($_POST['eqpCategory'] == 'Sports'){



    	 $request_array = array(


            'projectTopic'                     => $_POST['projecttopic'],
            'description'                 => $_POST['description'],
            'requestdate'               => date('y-m-d'),
            'completiondate'                     => date('Y-m-d', strtotime($_POST['completiondate'])),
            'attachment'                     => $file_name['file_name'],
            'reciepient_reciepientid'               => 1,
            'reciepient_systemUser_systemUserId'               => 1,
            'request_category_request_categoryId'   => 2,
            'flag'   => 0



        );

    	  $this->RequestModel->insertData($tablename="request",$request_array);

    }elseif ($_POST['eqpCategory'] == 'Electronics'){



    	 $request_array = array(


            'projectTopic'                     => $_POST['projecttopic'],
            'description'                 => $_POST['description'],
            'requestdate'               => date('y-m-d'),
            'completiondate'                     => date('Y-m-d', strtotime($_POST['completiondate'])),
            'attachment'                     => $file_name['file_name'],
            'reciepient_reciepientid'               => 1,
            'reciepient_systemUser_systemUserId'               => 1,
            'request_category_request_categoryId'   => 3,
            'flag'   => 0



        );

    	  $this->RequestModel->insertData($tablename="request",$request_array);
    }elseif ($_POST['eqpCategory'] == 'Stationary'){



    	 $request_array = array(


            'projectTopic'                     => $_POST['projecttopic'],
            'description'                 => $_POST['description'],
            'requestdate'               => date('y-m-d'),
            'completiondate'                     =>date('Y-m-d', strtotime($_POST['completiondate'])),
            'attachment'                     => $file_name['file_name'],
            'reciepient_reciepientid'               => 1,
            'reciepient_systemUser_systemUserId'               => 1,
            'request_category_request_categoryId'   => 4,
            'flag'   => 0


        );

    	  $this->RequestModel->insertData($tablename="request",$request_array);
    }

    redirect("Others/Godonate");

		
	}



}