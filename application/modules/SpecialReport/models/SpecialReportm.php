<?php

class SpecialReportm extends MY_Model {

    public function __construct() {
        $this->module = "SpecialReport";
        parent::__construct();
    }

    public function getResultByDate($cond,$table){
    	$this->db->where($cond);
    	$query = $this->db->get($table);
    	return $query->result_array();
    }
    
    public function getIOByUnit($unit){
    	if($unit == 'PS'){
    		$this->db->select('*');
			$this->db->where('PS',$this->session->userdata('PSCODE'));
			$this->db->where('ACTIVE_FLAG IS NULL',null,true);
			$query=$this->db->get('IOMASTER');
    	}
    	else{
    		$this->db->select('I.IONAME,I.IOCODE,P.PSNAME');
			$this->db->where('P.PSCODE = I.PS');
			$this->db->where('P.DIVCODE',$unit);
			$query=$this->db->get('IOMASTER I,PS P');
    	}
    	return $query->result_array();
    }

    public function getCategoryCrime($law){
    	$this->db->select('CATEGORY');
		$this->db->where('IPC_SLL',$law);
		$this->db->order_by('CATEGORY','asc');
		$query = $this->db->get('CRIMECATEGORIES');
		return $query->result_array();
    }

    public function getMaxFir($firno){
    	$this->db->select('LPAD(CASENO,3,0) AS CASENO');
	    $this->db->where('FIR_YR',substr($this->session->userdata('LAST_RECORD_DATE'),7));
	    $this->db->where('PS',$this->session->userdata('PSCODE'));
	    $this->db->where('CASENO',$firno);
	    $query = $this->db->get('FIRCASES');
	    $res = $query->result_array();
	    return $res[0]['CASENO'];
    }
}
