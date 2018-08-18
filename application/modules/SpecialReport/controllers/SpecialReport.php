<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SpecialReport extends MY_Controller {
    
    function __construct(){
    	$this->module = 'SpecialReport';
    	$this->model = 'SpecialReportm';
        parent::__construct($this->module);
        loggedoutuser();
        $this->load->model($this->model);
        $this->getTopBarHtml = $this->getTopBarHtml();
	}

/*************************************FIR SECTION*******************************************************/

	public function index() {
		redirect('SpecialReport/fir');
	}

	public function getTopBarHtml() {
		$data = array();
		$str = $this->session->userdata('UNAME');
	    $psStr = $this->session->userdata('ACCESSPOINT'); 
	    if($psStr=='PS')
	    {
	      $str=substr($str, 4); 
	    }
	    $datestr = $this->session->userdata('LAST_RECORD_DATE');
	    $data['checkDate'] = $this->{$this->model}->getPsreports($str,$datestr);
		return $this->load->view('top', $data, true);
	}
	
	public function fir() {
		$data = array();
		$data['title'] = 'FIR';
		$data['subview'] = $this->load->view('/FIR/FirList', $data, true);
		$this->load->view('layout_main', $data);
	}
	
	public function addFir() {
		$data = array();
		$data['title'] = 'Add New';
		$data['religion'] = $this->{$this->model}->getdbData('ACC_RELIGION',array(),array(),'','','RELIGION ASC','');
		$data['nationality'] = $this->{$this->model}->getdbData('ACC_NATIONALITY',array(),array(),'','','Nationality ASC','');
		$data['caste'] = $this->{$this->model}->getdbData('ACC_CASTE',array(),array(),'','','CASTE ASC','');
		$data['idcat'] = $this->{$this->model}->getdbData('MST_IDTYPE',array(),array(),'','','','');
		$data['occupation'] = $this->{$this->model}->getdbData('ACC_OCCUPATION',array(),array(),'','','OCCUPATION ASC','');
		$data['relationship'] = $this->{$this->model}->getdbData('ACC_RELATIONSHIP',array(),array(),'','','RELATIONSHIP ASC','');
		$data['mod_oper'] = $this->{$this->model}->getdbData('MST_MODOPER',array(),array(),'','','MOD_OPER ASC','');
		$data['subview'] = $this->load->view('/FIR/AddNewFir', $data, true);
		$this->load->view('layout_main', $data);
	}

	public function accDet() {
		$data = array();
		$data['title'] = 'Accused Details';
		$data['subview'] = $this->load->view('/FIR/AccusedDetails', $data, true);
		$this->load->view('layout_main', $data);
	}

	public function getResultByDate(){
		$date = filterData('dateval');
		$method = filterData('method');
		$cond = array(
			'REPDATE' => $date,
			'PS' => $this->session->userdata('PSCODE')
		);
		if($method == 'fir'){
			$table = 'FIRCASES';
		}
		$data['res'] = $this->{$this->model}->getResultByDate($cond,$table);
		$data['method'] = $method;
		$resData = $this->load->view('datalist',$data,true);
		echo base64_encode(json_encode($resData));
	}

	public function getIOByUnit(){
		$unit = filterData('unit');
		$res = $this->{$this->model}->getIOByUnit($unit);
		echo base64_encode(json_encode($res));
	}

	public function getCategoryCrime(){
		$law = filterData('law');
		$res = $this->{$this->model}->getCategoryCrime($law);
		echo base64_encode(json_encode($res));
	}

	public function getMaxFir(){
		$firno = filterData('firno');
		$res = $this->{$this->model}->getMaxFir($firno);
		echo base64_encode(json_encode($res));
	}

	public function addNewFir(){
		$arr = $this->input->post();
		$io = explode("|",filterData('IO'));
		$crimeDate = explode("- ",filterData('OCCUR_FROM_DT'));
		// $crimetotime = substr(filterData('OCCUR_TO_TIME'),0,7);
		// $crimefromtime = substr(filterData('OCCUR_FROM_TIME'),0,7);
		// echo $crimetotime."<br>".$crimefromtime; die;

		$complainant_details_entry=array();
		$complainant_details_entry['CASENO']= filterData('CASENO');
		$complainant_details_entry['CASEDATE']= toDbDate(filterData('CASEDATE'));
		$complainant_details_entry['GDENO']= filterData('GDENO');
		$complainant_details_entry['GDEDATE']= toDbDate(filterData('GDEDATE'));
		$complainant_details_entry['OTHER_UNIT']= filterData('OTHER_UNIT');
		$complainant_details_entry['IO'] = $io[1];
		$complainant_details_entry['IOCODE'] = $io[0];
		$complainant_details_entry['COMPLAINANT'] = filterData('COMPLAINANT');
		$complainant_details_entry['COMPLAINANT_AGE'] = filterData('COMPLAINANT_AGE');
		$complainant_details_entry['COMPLAINANT_SEX'] = filterData('COMPLAINANT_SEX');
		$complainant_details_entry['RELIGION'] = filterData('RELIGION');
		$complainant_details_entry['NATIONALITY'] = filterData('NATIONALITY');
		$complainant_details_entry['CASTE'] = filterData('CASTE');
		$complainant_details_entry['FATHER_HUSBAND'] = filterData('FATHER_HUSBAND');
		$complainant_details_entry['FATHER_NAME'] = filterData('FATHER_NAME');
		$complainant_details_entry['COMPLAINANT_CONTACTNO'] = filterData('COMPLAINANT_CONTACTNO');
		$complainant_details_entry['COMPLAINANT_IDTYPE'] = filterData('COMPLAINANT_IDTYPE');
		$complainant_details_entry['COMPLAINANT_IDNO'] = filterData('COMPLAINANT_IDNO');
		$complainant_details_entry['COMPLAINANT_ADDR'] = filterData('COMPLAINANT_ADDR');
		$complainant_details_entry['BRIEF_FACT'] = filterData('BRIEF_FACT');
		$complainant_details_entry['OCCUR_TIMING'] = filterData('OCCUR_TIMING');
		$complainant_details_entry['OCCUR_FROM_DT'] = toDbDate($crimeDate[0]);
		$complainant_details_entry['OCCUR_TO_DT'] = toDbDate($crimeDate[1]);
		// $complainant_details_entry['OCCUR_TO_TIME'] = $crimetotime;
		$complainant_details_entry['OCCUR_DETAILS'] = filterData('OCCUR_DETAILS');
		// $complainant_details_entry['OCCUR_FROM_TIME'] = $crimefromtime;
		$complainant_details_entry['CRIME_AREA'] = filterData('CRIME_AREA');
		$complainant_details_entry['CRIME_STREET'] = filterData('CRIME_STREET');
		$complainant_details_entry['PS_BEAT_NO'] = filterData('PS_BEAT_NO');
		$complainant_details_entry['UDCASENO'] = filterData('UDCASENO');
		$complainant_details_entry['UDCASEDATE'] = toDbDate(filterData('UDCASEDATE'));
		$complainant_details_entry['PO_LAT'] = filterData('PO_LAT');
		$complainant_details_entry['PO_LONG'] = filterData('PO_LONG');
		$complainant_details_entry['PS'] = $this->session->userdata('PSCODE');
		$complainant_details_entry['FIR_YR'] = substr($this->session->userdata('LAST_RECORD_DATE'),7);
		$complainant_details_entry['REPDATE'] = $this->session->userdata('LAST_RECORD_DATE');
		$table = 'FIRCASES';
		$this->{$this->model}->insertIntoDb($table,$complainant_details_entry);

		$victim_details_entry= array();
		$count = count($arr['VIC_SLNO']);
		$table = 'FIR_VICTIMS';
		for ($i = 0 ; $i < $count ; $i++){
			$victim_details_entry[$i]['SLNO'] = $arr['VIC_SLNO'][$i];
			$victim_details_entry[$i]['FIRNO'] = $arr['CASENO'];
			$victim_details_entry[$i]['VICTIM'] = $arr['VIC_VICTIM'][$i];
			$victim_details_entry[$i]['AGE'] = $arr['VIC_AGE'][$i];
			$victim_details_entry[$i]['SEX'] = $arr['VIC_SEX'][$i];
			$victim_details_entry[$i]['ADDRESS'] = $arr['VIC_ADDRESS'][$i];
			$victim_details_entry[$i]['NATIONALITY'] = $arr['VIC_NATIONALITY'][$i];
			$victim_details_entry[$i]['RELIGION'] = $arr['VIC_RELIGION'][$i];
			$victim_details_entry[$i]['CASTE'] = $arr['VIC_CASTE'][$i];
			$victim_details_entry[$i]['RELATIONSHIP'] = $arr['RELATIONSHIP'][$i];
			$victim_details_entry[$i]['PS'] = $this->session->userdata('PSCODE');
			$victim_details_entry[$i]['FIR_YR'] = substr($this->session->userdata('LAST_RECORD_DATE'),7);
			$this->{$this->model}->insertIntoDb($table,$victim_details_entry[$i]);
		}

		$us_details_entry=array();
		$us_details_entry['SLNO']=filterData('US_SLNO');
		$us_details_entry['CASENO']=filterData('CASENO');
		$us_details_entry['UNDER_SECTION']=filterData('UNDER_SECTION');
		$us_details_entry['US_CLASS']=filterData('US_CLASS');
		$us_details_entry['CATEGORY']=filterData('CATEGORY');
		$us_details_entry['MOD_OPER']=filterData('MOD_OPER');
		$us_details_entry['PS'] = $this->session->userdata('PSCODE');
		$us_details_entry['CASE_YR'] = substr($this->session->userdata('LAST_RECORD_DATE'),7);
		$table = 'FIR_US';
		$this->{$this->model}->insertIntoDb($table,$us_details_entry);

		// $this->form_validation->set_rules('CASENO', 'Fir No', 'required|number');
		// $this->form_validation->set_rules('CASEDATE', 'Fir Date', 'required');
		// $this->form_validation->set_rules('GDENO', 'GDE No', 'required|number');
		// $this->form_validation->set_rules('GDEDATE', 'GDE Date', 'required');
		// $this->form_validation->set_rules('OTHER_UNIT', 'Unit', 'required');
		// $this->form_validation->set_rules('IO', 'IO Name', 'required');
		// $this->form_validation->set_rules('COMPLAINANT', 'Complainant Name', 'required');
		// $this->form_validation->set_rules('COMPLAINANT_IDNO', 'ID No', 'required');
		// $this->form_validation->set_rules('PO_LAT', 'Latitude', 'required');
		// $this->form_validation->set_rules('PO_LONG', 'Longitude', 'required');
		// $this->form_validation->set_rules('US_CLASS', 'Longitude', 'required');
		// $this->form_validation->set_rules('CATEGORY', 'Longitude', 'required');
		// $this->form_validation->set_rules('UNDER_SECTION', 'Longitude', 'required');
		// if($this->form_validation->run()){
		// 	pre($arr);
		// }
		// else{
		// 	$this->addFir();
		// }
	}
/*************************************ARREST SECTION****************************************************/
	public function allArrest() {
		$data = array();
		$data['title'] = 'All Arrest';
		$data['subview'] = $this->load->view('/All_Arrest/ArrestList', $data, true);
		$this->load->view('layout_main', $data);
	}
	public function addArrest() {
		$data = array();
		$data['title'] = 'Add New';
		$data['subview'] = $this->load->view('/All_Arrest/AddNewArrest', $data, true);
		$this->load->view('layout_main', $data);
	}
	public function editArrest() {
		$data = array();
		$data['title'] = 'Update';
		$data['subview'] = $this->load->view('/All_Arrest/ArrestUpdate', $data, true);
		$this->load->view('layout_main', $data);
	}

/**************************************COMMUNAL SECTION*************************************************/
	public function communal() {
        $data = array();
        $data['title'] = 'Communal Situation';
        $data['subview'] = $this->load->view('/Communal_Situation/CommunalList', $data, true);
        $this->load->view('layout_main', $data);
    }

    public function editCommunal() {
        $data = array();
        $data['title'] = 'Update Communal Situation';
        $data['subview'] = $this->load->view('/Communal_Situation/CommunalEdit', $data, true);
        $this->load->view('layout_main', $data);
    }

/****************************************DISPOSITION SECTION********************************************/
	public function disposition() {
		$data = array();
		$data['title'] = 'Disposition';
		$data['subview'] = $this->load->view('/Disposition/DListView', $data, true);
		$this->load->view('layout_main', $data);
	}

/*****************************************EBEAT SECTION*************************************************/
	public function eBeat() {
			$data = array();
			$data['title'] = 'Ebeat Patrol';
			$data['subview'] = $this->load->view('/Ebeat_Patrol/EbeatList', $data, true);
			$this->load->view('layout_main', $data);
		}

/********************************************EXTREMIST SECTION******************************************/
	public function extremist() {
	        $data = array();
	        $data['title'] = 'Extremist Activity';
	        $data['subview'] = $this->load->view('/Extremist_Activity/ExtremistList', $data, true);
	        $this->load->view('layout_main', $data);
	    }
    public function editExtremist() {
		$data = array();
		$data['title'] = 'Update Extremist Activity';
		$data['subview'] = $this->load->view('/Extremist_Activity/ExtremistEdit', $data, true);
		$this->load->view('layout_main', $data);
	}

/*************************************GOOD WORK DONE SECTION********************************************/
	public function goodWorkDone() {
        $data = array();
        $data['title'] = 'Good Work Done';
        $data['subview'] = $this->load->view('/Goodworkdone/GWDList', $data, true);
        $this->load->view('layout_main', $data);
    }

/***********************************IMPORTANT EVENTS SECTION********************************************/
    public function impEvent() {
        $data = array();
        $data['title'] = 'Important Events';
        $data['subview'] = $this->load->view('/Important_Events/ImportanteventList', $data, true);
        $this->load->view('layout_main', $data);
    }

    public function editEvents(){
    	$data = array();
        $data['title'] = 'Update Important Events';
        $data['subview'] = $this->load->view('/Important_Events/ImportanteventEdit', $data, true);
        $this->load->view('layout_main', $data);	
    }

/********************************************KPAP SECTION***********************************************/

   public function kpap(){
		$data = array();
		$data['title'] = 'KPAP';
		$data['subview'] = $this->load->view('/KPAP/KPAPList', $data, true);
		$this->load->view('layout_main', $data);
	}

	public function editKpap(){
		$data = array();
		$data['title'] = 'Update';
		$data['subview'] = $this->load->view('/KPAP/KPAPUpdate', $data, true);
		$this->load->view('layout_main', $data);
	}

/************************************CRPC ACTS SECTION**************************************************/
	public function crpc(){
		$data = array();
		$data['title'] = 'ProsecutionUnderCrpcActs';
		$data['subview'] = $this->load->view('/CRPC/ProsecutionUnderCrpcActsList', $data, true);
		$this->load->view('layout_main', $data);
	}

	public function addCrpc(){
		$data = array();
		$data['title'] = 'Add New';
		$data['subview'] = $this->load->view('/CRPC/AddNewCrpcActs', $data, true);
		$this->load->view('layout_main', $data);
	}

	public function editCrpc(){
		$data = array();
		$data['title'] = 'Update';
		$data['subview'] = $this->load->view('/CRPC/CrpcUpdate', $data, true);
		$this->load->view('layout_main', $data);
	}

/************************************MINOR ACTS SECTION*************************************************/
	public function mActs(){
		$data = array();
		$data['title'] = 'ProsUnderMinorActs';
		$data['subview'] = $this->load->view('/MinorActs/ProsUnderMinorActsList', $data, true);
		$this->load->view('layout_main', $data);
	}

	public function editMacts(){
		$data = array();
		$data['title'] = 'Update';
		$data['subview'] = $this->load->view('/MinorActs/MinorActsUpdate', $data, true);
		$this->load->view('layout_main', $data);
	}

/************************************SEIZURE SECTION****************************************************/
	public function seizure() {
		$data = array();
		$data['title'] = 'Seizures';
		$data['subview'] = $this->load->view('/Seizures/SeizureList', $data, true);
		$this->load->view('layout_main', $data);
	}

	public function addSeizure() {
		$data = array();
		$data['title'] = 'Add New';
		$data['subview'] = $this->load->view('/Seizures/AddNewSeizure', $data, true);
		$this->load->view('layout_main', $data);
	}

/****************************************UNNATURAL DEATH SECTION****************************************/

	public function udeath() {
        $data = array();
        $data['title'] = 'Unnatural Deaths';
        $data['subview'] = $this->load->view('/UnnaturalDeaths/UDList', $data, true);
        $this->load->view('layout_main', $data);
    }

    public function addUdeath() {
        $data = array();
        $data['title'] = 'Add New';
        $data['subview'] = $this->load->view('/UnnaturalDeaths/AddnewUD', $data, true);
        $this->load->view('layout_main', $data);
    }

    public function editUdeath() {
        $data = array();
        $data['title'] = 'Update';
        $data['subview'] = $this->load->view('/UnnaturalDeaths/UDEdit', $data, true);
        $this->load->view('layout_main', $data);
    }

/*****************************************VEHICLE SECTION***********************************************/
    public function vehicle(){
		$data = array();
		$data['title'] = 'Vehicle Checking';
		$data['subview'] = $this->load->view('/Vehicle_Checking/VehicleCheckingList', $data, true);
		$this->load->view('layout_main', $data);
	}

	public function editVehicle(){
		$data = array();
		$data['title'] = 'Vehicle Update';
		$data['subview'] = $this->load->view('/Vehicle_Checking/VehicleUpdate', $data, true);
		$this->load->view('layout_main', $data);
	}
/**********************************WARRANT SECTION******************************************************/
	public function warrant() {
		$data = array();
		$data['title'] = 'Warrant of Arrest';
		$data['subview'] = $this->load->view('/Warrant_Arrest/WAView', $data, true);
		$this->load->view('layout_main', $data);
	}
}
?>