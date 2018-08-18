<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
    
    function __construct(){
        $this->module = 'Login';
        $this->model = 'Loginm';
        parent::__construct($this->module);
        $this->load->model($this->model);
	}

    // Load the login page
    public function index() {
        loggedinuser();
        $data = array();
        $data['loginmsg'] = '';
        $action = "Login Page Opened.";
        $this->{$this->model}->logEntry($action);
        $flag = "new";
        $data['image'] = $this->{$this->model}->ciCaptcha($flag);
        $this->load->view('login',$data);
    }

    // Get the username
    public function getUsernm() {
        $dept = $this->security->xss_clean(strip_tags(trim($this->input->post('deptVal'))));
        $userid = $this->{$this->model}->getUsernm($dept);
        echo json_encode($userid);
    }

    // Reload CAPTCHA
    public function newCaptcha() {
        $flag = "reload";
        $data['image'] = $this->{$this->model}->ciCaptcha($flag); //Calling CAPTCHA Creating Function
        echo $data['image'];
    }

    // Check login process
    public function loginProcess(){
        $usrnm = $this->security->xss_clean(strip_tags(trim($this->input->post('usrnm'))));
        // Setting Form Validation Rules
        $this->form_validation->set_rules('dept', 'Department', 'required');
        $this->form_validation->set_rules('usrnm', 'Username', 'required');
        $this->form_validation->set_rules('pwd', 'Password', 'required');
        $this->form_validation->set_rules('captcha', 'CAPTCHA Code', 'required');
        // Checking If Form Validation Successful
        if ($this->form_validation->run()) {
            // Checking The CAPTCHA Value
            if($this->session->userdata("captchaword") == $this->input->post("captcha")) {
                // Getting User's Data
                $dept = $this->security->xss_clean(strip_tags(trim($this->input->post('dept'))));
                $usrnm = $this->security->xss_clean(strip_tags(trim($this->input->post('usrnm'))));
                $pwd = $this->input->post('pwd');
                // Fetching Encrypted Password From DB Against Registration ID
                $encpwd = $this->{$this->model}->chkBcrypt($dept, $usrnm);
                // Is Encrypted Password is Present Against that Particular Registration ID
                if (!empty($encpwd)) {
                    $enc_pwd = $encpwd[0]['WEB_PASS'];
                } else {
                    $enc_pwd = 0;
                }
                // Login Procedure
                $log_succ = $this->{$this->model}->checkLogin($dept,$usrnm,$pwd,$enc_pwd);
                if($log_succ[0]['ACCESSPOINT'] == 'PS'){
                    $ps = substr($log_succ[0]['UNAME'],4);
                    $last_record_date = $this->{$this->model}->getLastRecordDate($ps);
                }
                // If Login Function Returns No Value Against User's Credential
                if (empty($log_succ)){
                    $action = 'Login Attempt Failed by '.$usrnm.', '.$dept;
                    $this->{$this->model}->logEntry($action);
                    
                    $data['loginmsg'] = 'Wrong Credentials!';
                    $flag = "new";
                    $data['image'] = $this->{$this->model}->ciCaptcha($flag); //Calling CAPTCHA Creating Function
                    //calling username function
                    $this->getUsernm();
                    $this->load->view('login', $data);
                }
                // Login Done and Redirecting to Dashboard
                else{
                    $action = 'Login Done by '.$log_succ[0]['PSNAME'];
                    $this->{$this->model}->logEntry($action);

                    $userdata = array(
                        'UNAME'             => $log_succ[0]['UNAME'],
                        'ACCESSPOINT'       => $log_succ[0]['ACCESSPOINT'],
                        'LOGIN_STATUS'      => $log_succ[0]['LOGIN_STATUS'],
                        'PASS_UPDATED_ON'   => $log_succ[0]['PASS_UPDATED_ON'],
                        'PSCODE'            => $log_succ[0]['PSCODE'],
                        'PSNAME'            => $log_succ[0]['PSNAME'],
                        'DIVCODE'           => $log_succ[0]['DIVCODE'],
                        'OCNAME'            => $log_succ[0]['OCNAME'],
                        'IS_INVESTIGATOR'   => $log_succ[0]['IS_INVESTIGATOR'],
                        'CONCERNED_COURT'   => $log_succ[0]['CONCERNED_COURT'],
                        'USER_ID'           => $log_succ[0]['USER_ID'],
                        'ALLOW_BIOMETRIC'   => $log_succ[0]['ALLOW_BIOMETRIC'],
                        'EMAIL_PS'          => $log_succ[0]['EMAIL_PS'],
                        'LAST_RECORD_DATE'  => $last_record_date[0]['LASTDATE']
                    );
                    $this->session->set_userdata($userdata);
                    //redirect('MasterData/OcMaster');
                    redirect('Dashboard');
                }
            }
            // If CAPTCHA Mismatch
            else {
                $action = 'Wrong CAPTCHA Code Entered by '.$usrnm;
                $this->{$this->model}->logEntry($action);
                
                $data['loginmsg'] = 'Wrong Credentials!';
                $flag = "new";
                $data['image'] = $this->{$this->model}->ciCaptcha($flag); //Calling CAPTCHA Creating Function
                //calling username function
                $this->getUsernm();
                $this->load->view('login', $data);
            }
            // If Form Validation Errors
        } else {
            $flag = "new";
            $data['image'] = $this->{$this->model}->ciCaptcha($flag); //Calling CAPTCHA Creating Function
            $action = "Form Validation ERROR by ".$usrnm;
            $this->{$this->model}->logEntry($action);
            //calling username function
            $this->getUsernm();
            $this->load->view('login',$data);
        }
    }

    // Logout Function
    public function logout() {
        $this->session->sess_destroy();
        redirect('/');
    }

}