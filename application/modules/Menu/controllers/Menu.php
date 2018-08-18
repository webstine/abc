<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends MY_Controller {
    
    function __construct(){
    	$this->module = 'Menu';
    	$this->model = 'Menum';
        parent::__construct($this->module);
        loggedoutuser();
        $this->load->model($this->model);
	}

	public function index(){
		$data = array();
		$data['title'] = 'Add Menu';
		$data['parent'] = $this->{$this->model}->getParentMenu(); 
		$data['subview'] = $this->load->view('AddMenu', $data, true);
		$this->load->view('layout_main', $data);
	}

	public function manageMenu(){
		$data = array();
		$data['title'] = 'Manage Menu';
		$data['menus'] = $this->{$this->model}->getAllMenu();
		// echo "<pre>";
		// print_r($data['menus']); die;
		$data['subview'] = $this->load->view('ManageMenu', $data, true);
		$this->load->view('layout_main', $data);
	}

	public function insertMenu(){
		$menu_id = $this->{$this->model}->getMaxMenuId();
		$menu_id = $menu_id+1;
		$parent = (strcmp($this->input->post('PARENT'),"Main Menu")==0 )? 0 : $this->input->post('PARENT');
		$display = (strcmp($this->input->post('DISPLAY_BLOCK'),"active")==0 )? 1 : 0;
		$menuArr = array(
			'MENU_ID' => $menu_id,
			'LABEL' => $this->input->post('LABEL'),
			'LINK' => $this->input->post('LINK'),
			'ICON' => $this->input->post('ICON'),
			'PARENT' => $parent,
			'MENUORDER' => $this->input->post('MENUORDER'),
			'DISPLAY_BLOCK' => $display
		);

		$this->{$this->model}->insertMenu($menuArr);
	}

	public function editMenu($id){
		$data = array();
		$data['title'] = 'Edit Menu';
		$menuid = myDecode($id);
		$data['parent'] = $this->{$this->model}->getParentMenu(); 
		$data['mdata'] = $this->{$this->model}->getMenuData($menuid);
		$data['subview'] = $this->load->view('EditMenu', $data, true);
		$this->load->view('layout_main', $data);
	}

	public function updateMenu(){
		$mid = myDecode($this->input->post('MENU_ID'));
		$updArr = array(
			'LABEL' => $this->input->post('LABEL'),
			'LINK' => $this->input->post('LINK'),
			'ICON' => $this->input->post('ICON'),
			'PARENT' => $this->input->post('PARENT'),
			'MENUORDER' => $this->input->post('MENUORDER'),
			'DISPLAY_BLOCK' => $this->input->post('DISPLAY_BLOCK')
		);

		$this->{$this->model}->updateMenu($updArr,$mid);
		redirect('Menu/manageMenu');
	}
	
}
?>