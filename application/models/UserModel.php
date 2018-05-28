<?php

class UserModel extends CI_Model{


function insertData($tablename, $data_arr) {
        try {
            $this->db->insert($tablename, $data_arr);

            $ret = $this->db->insert_id() + 0;
            return $ret;
        } catch (Exception $err) {
            return $err->getMessage();
        }
    }


function getmaxsystemuserid(){

	$max = $this->db->query("select max(systemUserId) as maxsysuserid from systemuser")->row()->maxsysuserid;

    return $max;
}


 public function verifylog($username,$password){


        $this->db->where('email', $username);
        $this->db->where('password',md5($password));
        $q = $this->db->get('login');

        if($q->num_rows() == 1){



            $res =$this->db->query("SELECT * FROM login,systemuser WHERE login.systemUser_systemUserId = systemuser.systemUserId AND login.email = '$username' ");

            return $res->result();




        }

        else{
        	echo "cameto";

            return false;

        }
    }



}