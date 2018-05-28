<?php

class RequestModel extends CI_Model{

	

	function insertData($tablename, $data_arr) {
        try {
            $this->db->insert($tablename, $data_arr);

            $ret = $this->db->insert_id() + 0;
            return $ret;
        } catch (Exception $err) {
            return $err->getMessage();
        }
    }


    function getsysid($loggerid){

        $sysid = $this->db->query("SELECT reciepientid as resid FROM `reciepient` WHERE systemUser_systemUserId =$loggerid ")->row()->resid;

        return $sysid;
    }



}