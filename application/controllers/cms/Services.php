<?php

/**
 * Developer: RSC Byte Limited
 * Website: rscbyte.com
 * phone: 234-8164242320
 * email: nusktecsoft@gmail.com
 * ...................................
 * Admin.php
 * 3:29 PM | 2019 | 12
 **/
const ROLE_NO = 1;
const PAGE_URL = "cms/services";
class Services extends CI_Controller
{
    //logged in user id
    public $user_id = null;
    //public array fro default data
    public $defaults_data = null;

    public function __construct()
    {
        parent::__construct();
        //load library
        $this->load->library("auth");
        //load model
        $this->load->model("cms/svs");
        $this->load->model("notifications", "noti");
        //auto load
        $this->auth->islogged(true);
        $this->auth->forcerole(ROLE_NO);
        $this->user_id = $this->auth->getUser()["sid"];

        //default data loading
        $this->defaults_data["noti"] = array("all" => $this->noti->noti_getall($this->user_id), "unread" => $this->noti->noti_getunread($this->user_id));
    }

    //admin index
    public function index()
    {
        //confirm is form action
        if (validateFormToken()) {
            switch (getFormCommand()) {
                case "update-account":
                    break;
                default:
                    break;
            }
        }
        //data formation
        $data['title'] = "Dashboard";
        //page rendering setup
        $data['setup'] = array("vue");
        //default data
        $data['page_data'] = array("defaults" => $this->defaults_data, "svs" => $this->svs->svs_getuser($this->user_id));
        //load useful scripts
        $data["scripts"] = array("dashboard");
        //end of script
        $data['error'] = getGlobalError();
        $data['contents'] = $this->load->view('cms/super/dashboard', $data, true);
        $this->load->view("cms/template", $data);
    }

    //profile index
    public function profile()
    {
        //confirm is form action
        if (validateFormToken()) {
            switch (getFormCommand()) {
                case "update-account":
                    break;
                default:
                    break;
            }
        }
        //data formation
        $data['title'] = "Account";
        //page rendering setup
        $data['setup'] = array("vue");
        //default data
        $data['page_data'] = array("svs" => $this->svs->svs_getuser($this->user_id));
        //load useful scripts
        $data["scripts"] = array("dashboard");
        //end of script
        $data['error'] = getGlobalError();
        $data['contents'] = $this->load->view('cms/super/dashboard', $data, true);
        $this->load->view("cms/template", $data);
    }

    //add pastor
    private function addPastor()
    {

    }
}