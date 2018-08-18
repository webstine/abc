<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterData extends MY_Controller {
    
    function __construct(){
        $this->module = 'MasterData';
        $this->model = 'MasterDatam';
        parent::__construct($this->module);
        loggedoutuser();
        $this->load->model($this->model);
	}

/*************************************INVESTIGATING OFFICER SECTION**************************************/

	public function index() {
		redirect($this->module.'/io');
	}

	public function io() {
		$data = array();
		$data['title'] = 'Investigating Officer';
		$data['subview'] = $this->load->view('IOmaster', $data, true);
		$this->load->view('layout_main', $data);
	}
/*************************************AMBIT OF PATROL SECTION********************************************/
	public function ambit() {
		$data = array();
		$data['title'] = 'Ambit Of Patrol';
		$data['subview'] = $this->load->view('Ambitofpatrol', $data, true);
		$this->load->view('layout_main', $data);
	}
/*************************************KPAP SECTION*******************************************************/
	public function kpap() {
		$data = array();
		$data['title'] = 'KPAP Master';
		$data['subview'] = $this->load->view('KpapMaster', $data, true);
		$this->load->view('layout_main', $data);
	}
/*************************************MINOR ACTS SECTION*************************************************/
	public function mActs() {
		$data = array();
		$data['title'] = 'Minor Acts Master';
		$data['subview'] = $this->load->view('MinorActs', $data, true);
		$this->load->view('layout_main', $data);
	}
/*************************************OFFICER-IN-CHARGE SECTION******************************************/
	public function oc() {
		$data = array();
		$data['title'] = 'OC Master';
		$data['subview'] = $this->load->view('OcMaster', $data, true);
		$this->load->view('layout_main', $data);
	}
/*************************************UNIT IO SECTION****************************************************/
	public function unitio() {
		$data = array();
		$data['title'] = 'Unit IO';
		$data['subview'] = $this->load->view('UnitIO', $data, true);
		$this->load->view('layout_main', $data);
	}
}
?>