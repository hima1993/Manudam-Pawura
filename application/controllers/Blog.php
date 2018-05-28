<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends CI_Controller {
public $data;
public function __construct()
{//Core controller constructor
parent::__construct();
$this->load->model('Blogmodel');
}
public function display_comments()
{


$data['query']=$this->Blogmodel->get_article();
$data['comments']=$this->Blogmodel->get_comments();
$this->load->view('blog', $data);
}
public function insert_comments()
{
$insertinfo=$this->Blogmodel->insertcomments_article();
//$data['comments']=$this->ektreemodel->get_latestcomment();
$data['comments']=$this->Blogmodel->get_comments();
return $this->load->view('commentdisplay',$data);
}
public function displaycomments()
{

$data['comments']=$this->Blogmodel->get_comments();
return $this->load->view('commentdisplay',$data);
}
}
