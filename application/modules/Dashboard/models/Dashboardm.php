<?php

class Dashboardm extends MY_Model {

    public function __construct() {
        $this->module = "Dashboard";
        parent::__construct();
    }

    // public function getdbData($table,$cond = array(),$in_cond = array(),$or_cond = array(),$group='',$order='',$select = '*'){
    //     $this->db->select($select);
    //     $this->db->where($cond);
        
    //     if(count($in_cond) > 0){
    //         $this->db->where_in($in_cond[0],$in_cond[1]);
    //     }
        
    //     if($or_cond != ''){
    //         $this->db->where($or_cond);
    //     }
        
    //     $this->db->group_by($group);
    //     $this->db->order_by($order);
    // 	$query = $this->db->get($table);
    //     $this->db->last_query();
    //     echo "<br><br>";
    //     echo $this->db->last_query();
           
    // 	return count($query->result());

    // }

}