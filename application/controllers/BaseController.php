<?php
class BaseController extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->UNAME = $this->session->userdata('UNAME');
        $this->USER_ID = $this->session->userdata('USER_ID');       
	}
	
	public function includeScript(){
		$data = 'var resizefunc = [];';
	    $data .= 'var csrfData = {};';
	    $data .= 'csrfData["'.$this->security->get_csrf_token_name().'"] = "'.$this->security->get_csrf_hash().'";';
	    $data .= '$(function() {
	        $.ajaxSetup({
	           data: csrfData
	        });   
	    });';
		$data .= 'var base_url = "'.base_url().'";';
		$data .= 'var module = "'.$this->module.'";';

        if($this->module == 'SpecialReport'){
            $str = $this->session->userdata('UNAME');
            $psStr = $this->session->userdata('ACCESSPOINT');
            if($psStr=='PS')
            {
                $str=substr($str, 4);
            }
            $last_record_date = $this->{$this->model}->getLastRecordDate($str);
            $today = date('d-M-Y');
            $last_inserted_date = $last_record_date[0]['LASTDATE'];

            if(!empty($this->session->userdata('LAST_RECORD_DATE'))){
                $last_inserted_date = $this->session->userdata('LAST_RECORD_DATE');
            }elseif(empty($last_inserted_date)){
                $last_inserted_date = date('d-M-Y');
            }
            
            if(strtotime($today)!= strtotime($last_inserted_date)){
                $nextDate = date('d-M-Y', strtotime('+1 day', strtotime($last_inserted_date)));
            }else{
                $nextDate = $today;
            }

            $pp = date('d-m-Y', strtotime($this->session->userdata('LAST_RECORD_DATE')));

            $data .= '$("#iniDate").datepicker({ 
                    format: "dd-M-yyyy",
                    endDate: "'.$nextDate.'",
                    autoclose: true
                }).datepicker("setDate", "'.$last_inserted_date.'");';
        }
		echo $data;
	}

	//Checking the date in PSREPORTS table
    public function check_date(){
        $pstDate = $this->security->xss_clean(strip_tags(trim($this->input->post('dateval'))));
        $pstDate = toDbDate($pstDate);
        $str = $this->session->userdata('UNAME') ;
        $psStr = $this->session->userdata('ACCESSPOINT') ; 
            if($psStr=='PS')
            {
                $str=substr($str, 4) ; 
            }
        $chkDate = $this->{$this->model}->getPsreports($str,$pstDate);
        echo $chkDate['C'];
    }

	//Saving the date in PSREPORTS table
	public function savePsreports(){
        $pstDate = $this->security->xss_clean(strip_tags(trim($this->input->post('dateval'))));
        $pstDate = toDbDate($pstDate);
        $str = $this->session->userdata('UNAME') ;
        $psStr = $this->session->userdata('ACCESSPOINT') ; 
            if($psStr=='PS')
            {
                $str=substr($str, 4) ; 
            }

        $dateArr = array(
            'PS' => $str,
            'REPDATE' => $pstDate
        );
        $res = $this->{$this->model}->savePsreports($dateArr);
        $last_record_date = $this->{$this->model}->getLastRecordDate($str);
        $userdata['LAST_RECORD_DATE']= $last_record_date[0]['LASTDATE'];
        $this->session->set_userdata($userdata);
        echo $res;
    }

    // public function getReligion(){
    //     $rel = $this->{$this->model}->getReligion();
    //     pre($rel);
    // }
}