<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginm extends MY_Model {

	public function __construct() {
        $this->module = "login";
        parent::__construct();
    }

	// Login function
	public function checkLogin($dept,$usrnm,$pwd,$encpwd){
		if(password_verify($pwd,$encpwd)){
			$this->db->select('UNAME, ACCESSPOINT, LOGIN_STATUS, PASS_UPDATED_ON');
			$this->db->where('ACCESSPOINT',$dept);
			$this->db->where('UNAME',$usrnm);
			$query = $this->db->get('USERSTAB');
			if ($query){
				$res = $query->result_array();

				if ($res[0]['ACCESSPOINT'] == "PS") {
					$pscode = substr($res[0]['UNAME'], 4);
				}

				$this->db->select('PSCODE, PSNAME, DIVCODE, OCNAME, IS_INVESTIGATOR, CONCERNED_COURT, USER_ID, ALLOW_BIOMETRIC, EMAIL_PS');
				$this->db->where('PSCODE',$pscode);
				$que = $this->db->get('PS');
				$res2 = $que->result_array(); 
				$res[0]['PSCODE']			= $res2[0]['PSCODE'];
				$res[0]['PSNAME']			= $res2[0]['PSNAME'];
				$res[0]['DIVCODE']			= $res2[0]['DIVCODE'];
				$res[0]['OCNAME']			= $res2[0]['OCNAME'];
				$res[0]['IS_INVESTIGATOR']	= $res2[0]['IS_INVESTIGATOR'];
				$res[0]['CONCERNED_COURT']	= $res2[0]['CONCERNED_COURT'];
				$res[0]['USER_ID']			= $res2[0]['USER_ID'];
				$res[0]['ALLOW_BIOMETRIC']	= $res2[0]['ALLOW_BIOMETRIC'];
				$res[0]['EMAIL_PS']			= $res2[0]['EMAIL_PS'];
				return $res;
			}
			else
				return false;
		}
		else {
		    return false ;
		}
	}

	public function getUsernm($dept){
		$this->db->select('UNAME');
        $this->db->where('ACCESSPOINT' ,$dept);
        $this->db->order_by('UNAME', 'ASC');
        $query = $this->db->get('USERSTAB');

        if ($query) {
			return $query->result_array();
		} else {
			return 0;
		}
	}

	public function chkBcrypt($dept, $usrnm){
		$this->db->select('WEB_PASS');
		$this->db->where('ACCESSPOINT', $dept);
		$this->db->where('UNAME', $usrnm);
		$query = $this->db->get('USERSTAB');
		if ($query) {
			return $query->result_array();
		} else {
			return 0;
		}
	}
}
?>