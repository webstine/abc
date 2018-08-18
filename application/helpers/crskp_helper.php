<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
    function pre($data, $flag = false) {
        echo '<pre>';
        print_r($data);
        if($flag == '1')
            die;
    }
    function create_guid() {
        $microTime = microtime();
        list($a_dec, $a_sec) = explode(" ", $microTime);
        $dec_hex = dechex($a_dec * 1000000);
        $sec_hex = dechex($a_sec);
        ensure_length($dec_hex, 5);
        ensure_length($sec_hex, 6);
        $guid = "";
        $guid .= $dec_hex;
        $guid .= create_guid_section(3);
        $guid .= '-';
        $guid .= create_guid_section(4);
        $guid .= '-';
        $guid .= create_guid_section(4);
        $guid .= '-';
        $guid .= create_guid_section(4);
        $guid .= '-';
        $guid .= $sec_hex;
        $guid .= create_guid_section(6);
        return $guid;
    }
    function ensure_length(&$string, $length) {
        $strlen = strlen($string);
        if ($strlen < $length) {
            $string = str_pad($string, $length, "0");
        } else if ($strlen > $length) {
            $string = substr($string, 0, $length);
        }
    }
    function create_guid_section($characters) {
        $return = "";
        for ($i = 0; $i < $characters; $i++) {
            $return .= dechex(mt_rand(0, 15));
        }
        return $return;
    }
    function loggedinuser(){
        $CI =& get_instance();
        if(!empty($CI->UNAME) && !empty($CI->USER_ID)) {
            redirect('Dashboard');
        }
    }
    function loggedoutuser(){
        $CI =& get_instance();
        if(empty($CI->UNAME) || empty($CI->USER_ID)) {
            redirect('/');
        }
    }
    function getMoneyFormat($data,$symbol = false){
        setlocale(LC_MONETARY,"en_IN");
        $ret = money_format("%!i", $data);
        if($symbol){
            $ret = "<i class='fa fa-inr'></i>".money_format("%!i", $data);
        }
        return $ret;
    }
    function getUnitnameByUnitcode($unitcode){
        $CI =& get_instance();
        $CI->db->select('UNITNAME');
        $CI->db->where ('UNITCODE',$unitcode);
        $query = $CI->db->get('MTO_UNITS');
        return $query->row()->UNITNAME;
    }
    function get_real_ip_addr() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }
    function myEncode($str){
        $CI =& get_instance();
        $str = $CI->encrypt->encode($str,$CI->config->item('encryption_key'));
        $str = strtr($str, '+/=', '-_~');
        return $str;
    }
    function myDecode($str){
        $CI =& get_instance();
        $str = strtr($str, '-_~', '+/=');
        try {
            $str = $CI->encrypt->decode($str,$CI->config->item('encryption_key'));
        } catch(Exception $e) {
            $str = '';
        }
        return $str;
    }
    function toDisplayDate($dt, $format = 'dd/mm/Y'){
        if($dt == '') return '';
        return date($format,strtotime($dt));
    }
    function toDbDate($dt, $format = 'd-M-Y'){
        if($dt == '') return '';
        return date($format,strtotime($dt));
    }
    function get_script_md5($js_file){
        return $md5 = md5_file('assets/js/' . $js_file . '.js');
    }
    function get_style_md5($css_file){
        return $md5 = md5_file('assets/css/' . $css_file . '.css');
    }
    function dashboardBlock($link,$icon,$text,$count,$total){

        if($total!=''){
            $total = '<span class="label label-default pull-right dbbadge"> '.$total.'</span>';
            $count = $total.'<span class="label label-danger pull-right dbbadge">'.$count.'</span>';
        }else{
            $count = '<span class="label label-default pull-right dbbadge">'.$count.$total.'</span>';
        }
        $html = '<a href="'.base_url()."Dashboard/dbCatlist/".$link.'">
                <div class="inbox-item">
                    <span>
                        <i class="'.$icon.' widget-two-icon dbicon"></i><span class="dbtext"> '.$text.'</span>'.$count.'
                        
                    </span>
                </div>
            </a>';
        return $html;
    }

    function dashboardFacts($facts){
        $CI =& get_instance();
        $link = "";
        $html = '<div><h4> Facts & Figures on <b><u>'.$CI->session->userdata('factdt').'.</u></b></h4></div>';
		$html .= dashboardBlock("FIR","fa fa-book","FIRs",$facts['fircount'],"");
		$html .= dashboardBlock("ARR","fa fa-bank","Arrests",$facts['arrestcount'],"");
		$html .= dashboardBlock("WAFY","ion ion-close-round","W/A Failed Yesterday",$facts['wayes_failed'],$facts['wayes_total']);
		$html .= dashboardBlock("WADT","fa fa-hourglass-start","W/A Due today",$facts['wadue_today'],"");
		$html .= dashboardBlock("WAD7","fa fa-hourglass-2","W/A Due in 7 days",$facts['wadue'],"");
		$html .= dashboardBlock("WAE","fa fa-check","W/A Executed",$facts['waexe'],"");
		$html .= dashboardBlock("WAR","ion ion-archive","W/A Recieved",$facts['warecv'],"");
		$html .= dashboardBlock("TWAP","fa fa-hourglass-o","Total W/A Pending",$facts['wapend'],"");
		$html .= dashboardBlock("DIS","ion ion-clipboard","Disposal",$facts['disposalcount'],"");
		$html .= dashboardBlock("RTA","fa fa-car","RTAs",$facts['rta'],"");
		$html .= dashboardBlock("UD","mdi mdi-biohazard","Unnatural Death",$facts['ud'],"");
		$html .= dashboardBlock("CD","fa fa-hourglass","Chargesheet Due",$facts['cs_due'],"");
        return $html;
    }

    function filterData($field){
        $CI =& get_instance();
        return $CI->security->xss_clean(strip_tags(trim($CI->input->post($field))));
    }
?>