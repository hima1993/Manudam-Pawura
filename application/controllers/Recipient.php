<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recipient extends CI_Controller {



	 function __construct(){
        parent::__construct();
        $this->load->model('RequestModel');
        
    }

	public function Addprojectwater()
	{
		$loggerid = $this->session->userData('loggerid');


        $sysuser = $this->RequestModel->getsysid($loggerid);




		$config['upload_path'] = './uploads';
        $config['allowed_types'] = '*';


        $this->load->library('upload',$config);


        $this->upload->do_upload('file_name');
       

      
        

        $file_name = $this->upload->data();

         $this->upload->do_upload('file_name1');

          $file_name1 = $this->upload->data();


        $prjCat = $_POST["watercategory"];


        if($prjCat == 'Drinking'){
       
        $request_array = array(


            'projectTopic'                     => $_POST['projecttopic'],
            'description'                 => $_POST['description'],
            'requestdate'               => date('y-m-d'),
            'completiondate'                     => date('Y-m-d', strtotime($_POST['completiondate'])),
            'attachment'                     => $file_name1['file_name'],
            'frontimage'                     => $file_name['file_name'],
            'reciepient_reciepientid'               => $sysuser,
            'reciepient_systemUser_systemUserId'               => $loggerid,
            'request_category_request_categoryId'   => 1,
            'flag'   => 0



        );




        $this->RequestModel->insertData($tablename="request",$request_array);


    }elseif ($prjCat == 'Other') {

    	 $request_array = array(


            'projectTopic'                     => $_POST['projecttopic'],
            'description'                 => $_POST['description'],
            'requestdate'               => date('y-m-d'),
            'completiondate'                     => date('Y-m-d', strtotime($_POST['completiondate'])),
            'attachment'                     => $file_name1['file_name'],
            'frontimage'                     => $file_name['file_name'],
            'reciepient_reciepientid'               => $sysuser,
            'reciepient_systemUser_systemUserId'               => $loggerid,
            'request_category_request_categoryId'   => 2,
            'flag'   => 0



        );
    	
    	  $this->RequestModel->insertData($tablename="request",$request_array);

    }

    redirect("Others/Godonate");

		
	}



    public function AddprojectStat()
    {



        $loggerid = $this->session->userData('loggerid');


        $sysuser = $this->RequestModel->getsysid($loggerid);

        
        $config['upload_path'] = './uploads';
        $config['allowed_types'] = '*';


        $this->load->library('upload',$config);


        $this->upload->do_upload('file_name');
       

      
        

        $file_name = $this->upload->data();

         $this->upload->do_upload('file_name1');

          $file_name1 = $this->upload->data();


        $prjCat = $_POST["eqpCategory1"];


        if($prjCat == 'Books'){
       
        $request_array = array(


            'projectTopic'                     => $_POST['projecttopic'],
            'description'                 => $_POST['description'],
            'requestdate'               => date('y-m-d'),
            'completiondate'                     => date('Y-m-d', strtotime($_POST['completiondate'])),
            'attachment'                     => $file_name1['file_name'],
            'frontimage'                     => $file_name['file_name'],
            'reciepient_reciepientid'               => $sysuser,
            'reciepient_systemUser_systemUserId'               => $loggerid,
            'request_category_request_categoryId'   => 3,
            'flag'   => 0



        );




        $this->RequestModel->insertData($tablename="request",$request_array);


    }elseif ($prjCat == 'Equipment') {

         $request_array = array(


            'projectTopic'                     => $_POST['projecttopic'],
            'description'                 => $_POST['description'],
            'requestdate'               => date('y-m-d'),
            'completiondate'                     => date('Y-m-d', strtotime($_POST['completiondate'])),
            'attachment'                     => $file_name1['file_name'],
            'frontimage'                     => $file_name['file_name'],
            'reciepient_reciepientid'               => $sysuser,
            'reciepient_systemUser_systemUserId'               => $loggerid,
            'request_category_request_categoryId'   => 4,
            'flag'   => 0



        );
        
          $this->RequestModel->insertData($tablename="request",$request_array);

    }elseif ($prjCat == 'Other') {

         $request_array = array(


            'projectTopic'                     => $_POST['projecttopic'],
            'description'                 => $_POST['description'],
            'requestdate'               => date('y-m-d'),
            'completiondate'                     => date('Y-m-d', strtotime($_POST['completiondate'])),
            'attachment'                     => $file_name1['file_name'],
            'frontimage'                     => $file_name['file_name'],
            'reciepient_reciepientid'               => $sysuser,
            'reciepient_systemUser_systemUserId'               => $loggerid,
            'request_category_request_categoryId'   => 6,
            'flag'   => 0



        );
        
          $this->RequestModel->insertData($tablename="request",$request_array);

    }

    redirect("Others/Godonate");

        
    }




    public function AddprojectInfra()
    {


        $loggerid = $this->session->userData('loggerid');


        $sysuser = $this->RequestModel->getsysid($loggerid);

        
        $config['upload_path'] = './uploads';
        $config['allowed_types'] = '*';


        $this->load->library('upload',$config);


        $this->upload->do_upload('file_name');
       

      
        

        $file_name = $this->upload->data();

         $this->upload->do_upload('file_name1');

          $file_name1 = $this->upload->data();


        $prjCat = $_POST["infracategory"];


        if($prjCat == 'Buildings'){
       
        $request_array = array(


            'projectTopic'                     => $_POST['projecttopic'],
            'description'                 => $_POST['description'],
            'requestdate'               => date('y-m-d'),
            'completiondate'                     => date('Y-m-d', strtotime($_POST['completiondate'])),
            'attachment'                     => $file_name1['file_name'],
            'frontimage'                     => $file_name['file_name'],
            'reciepient_reciepientid'               => $sysuser,
            'reciepient_systemUser_systemUserId'               => $loggerid,
            'request_category_request_categoryId'   => 7,
            'flag'   => 0



        );




        $this->RequestModel->insertData($tablename="request",$request_array);


    }elseif ($prjCat == 'Electricity') {

         $request_array = array(


            'projectTopic'                     => $_POST['projecttopic'],
            'description'                 => $_POST['description'],
            'requestdate'               => date('y-m-d'),
            'completiondate'                     => date('Y-m-d', strtotime($_POST['completiondate'])),
            'attachment'                     => $file_name1['file_name'],
            'frontimage'                     => $file_name['file_name'],
            'reciepient_reciepientid'               => $sysuser,
            'reciepient_systemUser_systemUserId'               => $loggerid,
            'request_category_request_categoryId'   => 8,
            'flag'   => 0



        );
        
          $this->RequestModel->insertData($tablename="request",$request_array);

    }elseif ($prjCat == 'Other') {

         $request_array = array(


            'projectTopic'                     => $_POST['projecttopic'],
            'description'                 => $_POST['description'],
            'requestdate'               => date('y-m-d'),
            'completiondate'                     => date('Y-m-d', strtotime($_POST['completiondate'])),
            'attachment'                     => $file_name1['file_name'],
            'frontimage'                     => $file_name['file_name'],
            'reciepient_reciepientid'               => $sysuser,
            'reciepient_systemUser_systemUserId'               => $loggerid,
            'request_category_request_categoryId'   => 9,
            'flag'   => 0



        );
        
          $this->RequestModel->insertData($tablename="request",$request_array);

    }

    redirect("Others/Godonate");

        
    }


 public function AddprojectOther()
    {


        $loggerid = $this->session->userData('loggerid');


        $sysuser = $this->RequestModel->getsysid($loggerid);

        
        $config['upload_path'] = './uploads';
        $config['allowed_types'] = '*';


        $this->load->library('upload',$config);


        $this->upload->do_upload('file_name');
       

      
        

        $file_name = $this->upload->data();

         $this->upload->do_upload('file_name1');

          $file_name1 = $this->upload->data();


       

       
        $request_array = array(


            'projectTopic'                     => $_POST['projecttopic'],
            'description'                 => $_POST['description'],
            'requestdate'               => date('y-m-d'),
            'completiondate'                     => date('Y-m-d', strtotime($_POST['completiondate'])),
            'attachment'                     => $file_name1['file_name'],
            'frontimage'                     => $file_name['file_name'],
            'reciepient_reciepientid'               => $sysuser,
            'reciepient_systemUser_systemUserId'               => $loggerid,
            'request_category_request_categoryId'   => 10,
            'flag'   => 0



        );




        $this->RequestModel->insertData($tablename="request",$request_array);


  }

}