<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
    
    function __construct(){
    	$this->module = 'Dashboard';
    	$this->model = 'Dashboardm';
        parent::__construct($this->module);
        loggedoutuser();
        $this->load->model($this->model);
	}

	public function index() {
		$data = array();
		$yesterday = date("d-M-Y",mktime(0, 0, 0, date("m"), date("d")-1,date("Y")));
        $data['facts'] = $this->facts($yesterday);
      
        $data['title'] = 'Dashboard';
		$data['subview'] = $this->load->view('dashboard', $data, true);
		$this->load->view('layout_main', $data);
	}

    public function facts($date){
        $date = toDbDate($date);
        $today = date("d-M-Y");
        $data = array();
        $this->session->unset_userdata('factdt');
        $this->session->set_userdata('factdt',$date);
        
        $data['fircount'] = $this->{$this->model}->getdbData('ALLFIRS',array('CASEDATE' => $date),array(),'','','','COUNT(*)')[0]['COUNT(*)'];

        $data['arrestcount'] = $this->{$this->model}->getdbData('ARREST_DATA',array('ARREST_DATE' => $date),array(),'','','','COUNT(*)')[0]['COUNT(*)'];
        
        $data['disposalcount'] = $this->{$this->model}->getdbData('ALLFIRS',array('STATUS_DATE' => $date),array('FIR_STATUS', array('FINAL REPORT - FALSE','FINAL REPORT - TRUE','FINAL REPORT - CIVIL IN NATURE','REFUSED INVESTIGATION','CHARGESHEETED','FINAL REPORT - NON-COGNIZABLE','OTHER','FINAL REPORT - MISTAKE OF FACT')),'','','','COUNT(*)')[0]['COUNT(*)'];
        
        $data['wadue'] = $this->{$this->model}->getdbData('WAREGISTER',array('UPPER(WA_STATUS)' => 'PENDING','RETURNABLE_DATE_TO_COURT >=' => $date,'RETURNABLE_DATE_TO_COURT <=' => date('d-M-Y', strtotime($date.'+7 day'))),array('WATYPE', array('NBW','BW')),'','','','COUNT(*)')[0]['COUNT(*)'];

        $data['waexe'] = $this->{$this->model}->getdbData('WAREGISTER',array('ACTION_DATE'=>$date,'UPPER(WA_STATUS) !=' => 'PENDING'),array('WATYPE', array('NBW','BW')),'','','','COUNT(*)')[0]['COUNT(*)'];

        $data['warecv'] = $this->{$this->model}->getdbData('WAREGISTER',array('PS_RECV_DATE'=>$date),array('WATYPE', array('NBW','BW')),'','','','COUNT(*)')[0]['COUNT(*)'];

        $data['wapend'] = $this->{$this->model}->getdbData('WAREGISTER',array('RETURNABLE_DATE_TO_COURT <=' => $date,'UPPER(WA_STATUS)' => 'PENDING'),array(),'','','','COUNT(*)')[0]['COUNT(*)'];

        $data['rta'] = $this->{$this->model}->getdbData('ALLFIRS',array('CASEDATE'=> $date),array('CATEGORY', array('ROAD ACCIDENT (FATAL)','ROAD ACCIDENT (NON-FATAL)')),'','','','COUNT(*)')[0]['COUNT(*)'];

        $data['ud'] = $this->{$this->model}->getdbData('UNNATURAL_DEATHS',array('REPDATE'=>$date),array(),'','','','COUNT(*)')[0]['COUNT(*)'];
        
        $data['wadue_today'] = $this->{$this->model}->getdbData('WAREGISTER',array('UPPER(WA_STATUS)' => 'PENDING','RETURNABLE_DATE_TO_COURT' => $today),array('WATYPE', array('NBW','BW')),'','','','COUNT(*)')[0]['COUNT(*)'];
        
        $data['wayes_failed'] = $this->{$this->model}->getdbData('WAREGISTER',array('UPPER(WA_STATUS)' => 'PENDING','RETURNABLE_DATE_TO_COURT =' => date('d-M-Y', strtotime($today.'-1 day'))),array(),'','','','COUNT(*)')[0]['COUNT(*)'];
        
        $data['wayes_total'] = $this->{$this->model}->getdbData('WAREGISTER',array('UPPER(WA_STATUS) !=' => 'PENDING','RETURNABLE_DATE_TO_COURT' => $today,'ACTION_DATE' => $today),array('WATYPE', array('NBW','BW')),'','','','COUNT(*)')[0]['COUNT(*)'];
        $data['wayes_total'] = $data['wayes_total']+$data['wayes_failed'];
        
        $data['cs_due'] = $this->{$this->model}->getdbData('CS_DUE',array(),array(),'','','','COUNT(*)')[0]['COUNT(*)'];
        // pre($data,1);
        // die;
        return $data;
    }
    
    public function getFactsFigures(){
        echo base64_encode(json_encode(dashboardFacts($this->facts(filterData('date')))));
    }

    public function dbCatlist($type){
        echo $type;
        $data = array();
        if($type == 'FIR'){
        $data['fir'] =  $this->{$this->model}->getdbData('ALLFIRS',array('CASEDATE' => $this->session->userdata('factdt')),array(),'','CATEGORY','CATEGORY','CATEGORY, COUNT(CASENO) as Total_Case');
        } 
        if($type == 'DIS'){
            $data['dis'] =  $this->{$this->model}->getdbData('ALLFIRS',array('STATUS_DATE' => $this->session->userdata('factdt')),array('FIR_STATUS',array('FINAL REPORT - FALSE','FINAL REPORT - TRUE','FINAL REPORT - CIVIL IN NATURE','REFUSED INVESTIGATION','CHARGESHEETED','FINAL REPORT - NON-COGNIZABLE','OTHER','FINAL REPORT - MISTAKE OF FACT')),'','CATEGORY','CATEGORY','CATEGORY, COUNT(CASENO) as Total_Case');
        }
        pre($data['dis'],1);
    }
}
?>