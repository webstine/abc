<?php
class BaseModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function insert($table, $data){
        $this->db->insert($table, $data);
    }

    public function logEntry($action){
        // Getting Date and Time
        date_default_timezone_set('Asia/Kolkata');
        $dt = date("d-m-Y");
        $time = date("h:i:sa");
        // Fetching the IP Address
        $ip = $this->input->ip_address();
        // Getting Other Details
        $uname = $this->session->userdata('UNAME');
        $accesspoint = $this->session->userdata('ACCESSPOINT');
        $psname = $this->session->userdata('PSNAME');
        $divcode = $this->session->userdata('DIVCODE');

        // Fetching Browser Type and Version
        if ($this->agent->is_browser()){
            $agent = $this->agent->browser();
            $brver = $this->agent->version();
        }elseif ($this->agent->is_robot()){
            $agent = $this->agent->robot();
            $brver = $this->agent->version();
        }elseif ($this->agent->is_mobile()){
            $agent = $this->agent->mobile();
            $brver = $this->agent->version();
        }else{
            $agent = 'Unidentified Browser Type';
            $brver = 'Unidentified Browser Version';
        }
        
        // Concatenating Browser Name and Version
        $browser = "Browser: ".$agent." Version: ".$brver;
        // Getting OS Type
        $os = $this->agent->platform();

        $row = array(
                    'uname' => 'Username',
                    'psname' => 'Name',
                    'acpt' => 'Accesspoint',
                    'div' => 'Division',
                    'action_done' => 'Action Done',
                    'activity_date' => 'Date',
                    'activity_time' => 'Time',
                    'ip' => 'IP Address',
                    'browser' => 'Browser',
                    'os' => 'OS'
                 );

        $details = array(
                    'uname' => $uname,
                    'psname' => $psname,
                    'acpt' => $accesspoint,
                    'div' => $divcode,
                    'action_done' => $action,
                    'activity_date' => $dt,
                    'activity_time' => $time,
                    'ip' => $ip,
                    'browser' => $browser,
                    'os' => $os
                );

        $filename = "../kplog/crskp/app_log/Log_".date('d-m-Y').".csv";

        if (!file_exists($filename)) {
            $file = fopen($filename,"w");
            fputcsv($file, $row);
            fputcsv($file, $details);
            fclose($file);
        } else {
            $file = fopen($filename,"a");
            fputcsv($file, $details);
            fclose($file);
        }

        $dbdetails = array(
                    'FILEPATH' => $filename,
                    'LOG_DATE' => date('Y-m-d h:i:s A'),
                    'LOG_STATUS' => ''
                 );

        $query = $this->db->insert('LOG_DETAILS',$dbdetails);
    }

    //CAPTCHA Creating Function
    public function ciCaptcha($flag) {
        $options = array(
            'img_path'      =>  'captcha/',
            'img_url'       =>  base_url().'captcha/',
            'img_width'     =>  '180',
            'img_height'    =>  '40',
            'expiration'    =>  300,
            'word_length'   =>  6,
            'font_size'     =>  18,
            'pool'          =>  '123456789ABCDEFGHIJKLMNPQRSTUVWXYZ',
            'colors'        =>  array(
                'background'    => array(255,255,255),
                'border'        => array(255,182,193),
                'text'          => array(0,0,128),
                'grid'          => array(255,182,193)
            )
        );
        $cap = create_captcha($options);
        // we will store the image html code in a variable
        $image = $cap['image'];
        // ...and store the captcha word in a session
        $this->session->set_userdata('captchaword', $cap['word']);
        
        if (isset($flag))
            return $image;
    }

    public function getPsreports($ps,$date){
        $this->db->select("COUNT(*) AS C");
        $this->db->where('PS',$ps);
        $this->db->where('REPDATE',$date);
        $query = $this->db->get('PSREPORTS');
        $result = $query->result_array();
        if ($result) {
            return $result[0];
        } else {
            return 0;
        }
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
            $res = $this->db->get("MENULIST_HMVC");   
        }else{
            $this->db->where("DISPLAY_BLOCK!=",0,FALSE);
            $this->db->where("PARENT", 0);
            $this->db->order_by("MENUORDER");
            $res = $this->db->get("MENULIST_HMVC");  
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
          $query = $this->db->get("MENULIST_HMVC");
        }else{
          $this->db->where("DISPLAY_BLOCK!=",0,FALSE);
          $this->db->where("PARENT", $menuId);
          $this->db->order_by("MENUORDER");
          $query = $this->db->get("MENULIST_HMVC");  
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

    public function getLastRecordDate($ps){
        $this->db->select("TO_CHAR(MAX(REPDATE), 'DD-MON-YYYY') AS LASTDATE");
        $this->db->where('PS',$ps);
        $query = $this->db->get('PSREPORTS');
        $res = $query->result_array();
        if ($res) {
            return $res;
        } else {
            return 0;
        }
    }

    public function savePsreports($data){
        $query = $this->db->insert('PSREPORTS',$data);
        if ($query) {
            return 1;
        } else {
            return 0;
        }
    }

    public function insertIntoDb($table,$data){
        $query = $this->db->insert($table,$data);
    }

    public function getdbData($table,$cond = array(),$in_cond = array(),$or_cond = array(),$group='',$order='',$select = '*'){
        $this->db->select($select);
        $this->db->where($cond);
        
        if(count($in_cond) > 0){
            $this->db->where_in($in_cond[0],$in_cond[1]);
        }
        
        if($or_cond != ''){
            $this->db->where($or_cond);
        }
        
        $this->db->group_by($group);
        $this->db->order_by($order);
        $query = $this->db->get($table);

        return ($query->result_array());

    }

}
