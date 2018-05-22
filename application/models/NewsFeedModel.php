<?php

class NewsFeedModel extends CI_Model{
    
public function selectpost() {
		try {
			$this->db->order_by("id", "DESC");
			$result = $this->db->get('advertisement');
			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}
	

	



}