<?php
<<<<<<< HEAD
=======

>>>>>>> a805fb8f572a8ad3e2974aad305e9bf0284f837f
class NewsFeedModel extends CI_Model{
    
public function selectpost() {
		try {
<<<<<<< HEAD
			$this->db->order_by("requestId", "DESC");
			$result = $this->db->get('request');
=======
			$this->db->order_by("id", "DESC");
			$result = $this->db->get('advertisement');
>>>>>>> a805fb8f572a8ad3e2974aad305e9bf0284f837f
			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}
<<<<<<< HEAD




	public function insertcomments_article()
{
$this->load->helper('date');
$name=$this->input->post('name');

$article_id=$this->input->post('article_id');
$comment=$this->input->post('comment');
$datestring = "%Y-%m-%d - %h:%i %a";
$time = time();
$date= mdate($datestring, $time);
$insertcomment=$this->db->insert('adver_comment',array('name'=>$name ,'comment'=>$comment,'time'=>$date,'cmt_article_id'=>$article_id));
return $insertcomment;       
}
//retrive comments
public function get_comments()
{
$article_id=$this->input->post('article_id');
$this->db->select('*');
$this->db->from('adver_comment');
$this->db->where('cmt_article_id',$article_id);
return $this->db->get();	
}
public function get_latestcomment()
{
$article_id=$this->input->post('article_id');
$this->db->select('*');
$this->db->from('adver_comment');
$this->db->where('cmt_article_id',$article_id);
$this->db->order_by('comment_id', 'DESC');
$this->db->limit('1');
return $this->db->get();	
}


	
	
=======
	

	



>>>>>>> a805fb8f572a8ad3e2974aad305e9bf0284f837f
}