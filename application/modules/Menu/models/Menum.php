<?php

class Menum extends MY_Model {

    public function __construct() {
        $this->module = "Menu";
        parent::__construct();
        $this->table_name = 'MENULIST_HMVC';
    }

    public function getParentMenu(){
		$this->db->select('MENU_ID,LABEL');
		$this->db->where('DISPLAY_BLOCK',1);
		$this->db->order_by('MENUORDER','ASC');
		$query = $this->db->get($this->table_name);
		return $query->result_array();
	}

	public function getMaxMenuId(){
		$this->db->select('MAX(MENU_ID) AS ID');
		$query = $this->db->get($this->table_name);
		$res = $query->result_array();
		if($res){
			return $res[0]['ID'];
		}
		else{
			return 0;
		}
	}

	public function insertMenu($arr){
		$query = $this->db->insert($this->table_name,$arr);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}

	public function getAllMenu(){
		$this->db->select("t1.*, t2.LABEL AS PARENT_LABEL");
		$this->db->join("$this->table_name t2","t1.PARENT = t2.MENU_ID","left");
		$query = $this->db->get("$this->table_name t1");
		return $query->result_array();
	}

	public function getMenuData($id){
		$this->db->where('MENU_ID',$id);
		$query = $this->db->get($this->table_name);
		return $query->result_array();
	}

	public function updateMenu($arr,$id){
		$this->db->where('MENU_ID',$id);
		$this->db->update($this->table_name,$arr);
	}

	public function getSideMenu(){
		$this->db->select('MENU_ID');
		$this->db->where('PSCODE',$this->session->userdata('UNAME'));
		$query = $this->db->get('MENU_ACCESS');
     	$menulist = $query->result_array();
     	foreach ($menulist as $key => $value) {
       		$bmenu[$key] = $value['MENU_ID'];
     	}
		if(!empty($bmenu)){
		    $this->db->where("DISPLAY_BLOCK!=",0,FALSE);
		    $this->db->where("PARENT", 0);
		    $this->db->where_not_in("MENU_ID",$bmenu);
		    $this->db->order_by("MENUORDER");
		    $res = $this->db->get($this->table_name);   
  		}else{
		    $this->db->where("DISPLAY_BLOCK!=",0,FALSE);
		    $this->db->where("PARENT", 0);
		    $this->db->order_by("MENUORDER");
		    $res = $this->db->get($this->table_name);  
  		}
        if($res)
            return $res->result_array();
        else
            return false;  
     }

     public function getChildMenu($menuId){
     	$this->db->select('MENU_ID');
		$this->db->where('PSCODE',$this->session->userdata('UNAME'));
		$query = $this->db->get('MENU_ACCESS');
     	$menulist = $query->result_array();
     	foreach ($menulist as $key => $value) {
       		$bmenu[$key] = $value['MENU_ID'];
     	}
    	if(!empty($bmenu)){
	      $this->db->where("DISPLAY_BLOCK!=",0,FALSE);
	      $this->db->where("PARENT", $menuId);
	      $this->db->where_not_in("MENU_ID",$bmenu);
	      $this->db->order_by("MENUORDER");
	      $query = $this->db->get($this->table_name);
    	}else{
	      $this->db->where("DISPLAY_BLOCK!=",0,FALSE);
	      $this->db->where("PARENT", $menuId);
	      $this->db->order_by("MENUORDER");
	      $query = $this->db->get($this->table_name);  
  		}
        if($query)
            return $query->result_array();
        else
            return false;  


        //SELECT M.*, MA.PSCODE FROM MENULIST M
		//LEFT JOIN MENU_ACCESS MA ON MA.MENU_ID = M.MENU_ID AND MA.PSCODE = 'SEC-BHL'
		//WHERE DISPLAY_BLOCK != 0
		//ORDER BY MENUORDER
    }
}
