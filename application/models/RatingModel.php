<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of blogmodel
 *
 * @author http://roytuts.com
 */
class RatingModel extends CI_Model {



public function get_vote_per_blog($blog_id){


	$res = $this->db->query("SELECT SUM(blog_vote) as TotalVote,COUNT(vote_id) as votes FROM `blog_vote` WHERE blog_id = $blog_id")->row();

	return $res;

}

public function get_user_vote_per_blog($user_id,$blog_id){

  $res = $this->db->query("SELECT blog_vote as curr_vote FROM `blog_vote` WHERE ip_address = $user_id AND blog_id = $blog_id")->row();

	return $res;

}

public function get_Analyse_vote($user_id,$blog_id){


	$result = $this->get_vote_per_blog($blog_id);

	if($result){

	$total = $result->TotalVote;
	$votes = $result->votes;


	$results["vote_rows"] = $votes;
	$current_rate = $total/$votes;
	$results["vote_dec_rate"] = round($current_rate, 1);

	$userresult = $this->get_user_vote_per_blog($user_id,$blog_id);

	if($userresult){

		$results["vote_curr_rate"] = $userresult->curr_vote;
		$results['vote_rate'] = $userresult->curr_vote;

	}else{

		$results["vote_curr_rate"] = 0;

		$results['vote_rate'] =0;

	}


	}else{

		$results["vote_dec_rate"] = 0;


	}

	return $results;
	

}




public function insertRate($user_id,$blog_id,$rating){


	$rest = $this->get_user_vote_per_blog($user_id,$blog_id);



	if($rest){



		$resq = $this->db->query("SELECT vote_id as voteid FROM `blog_vote` WHERE ip_address = $user_id AND blog_id = $blog_id")->row();

		$voteid = $resq->voteid;



		$where_arr = array('vote_id' => $voteid);


		if($rating <= 5){

			$data_arr = array('blog_vote' => $rating);

		   $this->db->update('blog_vote', $data_arr, $where_arr);


		}else{

			$data_arr = array('blog_vote' => 5);

		   $this->db->update('blog_vote', $data_arr, $where_arr);

		}

		

		




	}else{

		$data = array(
                'blog_vote' => $rating,
                'blog_id' => $blog_id,
                'ip_address' => $user_id
            );
            $this->db->insert('blog_vote', $data);

         
	}

	$resultone = $this->get_Analyse_vote($user_id,$blog_id);


	return $resultone;


}

public function getAlldata(){


	
}







}