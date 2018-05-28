<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Newsfeed extends CI_Controller {
	
	public function __construct()
{
parent::__construct();
$this->load->model('NewsFeedModel');
}
     
	public function index()
	{
        
		$this->data['post_data'] = $this->NewsFeedModel->selectpost();
        $this->load->view('NewsFeedView', $this->data);
	}



	public function display_comments()
{


$data['query']=$this->NewsFeedModel->get_article();
$data['comments']=$this->NewsFeedModel->get_comments();
$this->load->view('NewsFeedView', $data);
}
public function insert_comments()
{
$insertinfo=$this->NewsFeedModel->insertcomments_article();
//$data['comments']=$this->ektreemodel->get_latestcomment();
$data['comments']=$this->NewsFeedModel->get_comments();
return $this->load->view('commentadvertise',$data);
}
public function displaycomments()
{

$data['comments']=$this->NewsFeedModel->get_comments();
return $this->load->view('commentadvertise',$data);
}
    
}