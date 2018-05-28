<?php
defined('BASEPATH') OR exit('No direct script access allowed');
<<<<<<< HEAD
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
=======

class Newsfeed extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
     
	public function index()
	{
        $this->load->model('NewsFeedModel');
		$this->data['post_data'] = $this->NewsFeedModel->selectpost();
        $this->load->view('NewsFeedView', $this->data);

	}
    
}
>>>>>>> a805fb8f572a8ad3e2974aad305e9bf0284f837f
