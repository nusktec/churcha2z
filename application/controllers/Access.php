<?php

/**
 * Developer: RSC Byte Limited
 * Website: rscbyte.com
 * phone: 234-8164242320
 * email: nusktecsoft@gmail.com
 * ...................................
 * Access.php
 * 5:14 PM | 2019 | 12
 **/
class Access extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //call for library
        $this->load->library("Auth");
        //call for models
        $this->load->model("cms/svs"); //model for service
    }

    //user login page
    public function index()
    {
        if ($this->auth->islogged()) {
            if ($this->auth->getRole() == 2) {
                redirect(base_url("cms/branches"));
            } else {
                redirect(base_url("cms/services"));
            }
        }
        //confirm is form action
        if (validateFormToken()) {
            switch (getFormCommand()) {
                case "login":
                    $this->fun_login();
                    break;
                default:
                    break;
            }
        }
        //data formation
        $error = null;
        $data['breadcrumb'] = false;
        $data['title'] = "Login";
        //load useful scripts
        $data["scripts"] = array("login");
        //end of script
        $data['error'] = getGlobalError();
        $this->load->view('cms/auth-login', $data);
    }

    //access reset
    public function reset()
    {
        if ($this->auth->islogged()) {
            if ($this->auth->getRole() == 2) {
                redirect(base_url("cms/branches"));
            } else {
                redirect(base_url("cms/services"));
            }
        }
        //confirm is form action
        if (validateFormToken()) {
            switch (getFormCommand()) {
                case "login":
                    $this->fun_reset();
                    break;
                default:
                    break;
            }
        }
        //data formation
        $error = null;
        $data['breadcrumb'] = false;
        $data['title'] = "Reset";
        //load useful scripts
        $data["scripts"] = array("reset");
        //end of script
        $data['error'] = getGlobalError();
        $this->load->view('cms/auth-reset', $data);
    }

    //private function
    private function fun_login()
    {
        //begin login transaction
        $mod = cleanArray($_POST);
        if (!$mod || !filter_var($mod['email'], FILTER_VALIDATE_EMAIL)) {
            return;
        }
        $mod = $this->svs->svs_login($mod);
        if ($mod) {
            //well logged in
            if ((int)$mod['sstatus'] === 1) {
                //is logged
                $this->auth->setLogin($mod);
                $this->auth->setRole((int)$mod['stype']);
                redirect(base_url("cms/services"));
            } else {
                setGlobalError("Your account is currently locked byt the administrator, contact us !", "2");
                $this->auth->clear();
            }
        } else {
            setGlobalError("Invalid login details", "0");
        }
        setFormToken();
    }

    private function fun_reset()
    {
        //begin login transaction
        $mod = cleanArray($_POST);
        if (!$mod || !filter_var($mod['email'], FILTER_VALIDATE_EMAIL)) {
            return;
        }
        $mod = $this->svs->svs_login($mod);
        if ($mod) {
            //well logged in
            if ((int)$mod['sstatus'] === 1) {
                //is logged
                $this->auth->setLogin($mod);
                $this->auth->setRole((int)$mod['stype']);
                redirect(base_url("cms/services"));
            } else {
                setGlobalError("Your account is currently locked byt the administrator, contact us !", "2");
                $this->auth->clear();
            }
        } else {
            setGlobalError("Invalid login details", "0");
        }
        setFormToken();
    }
}