<?php

/**
 * Developer: RSC Byte Limited
 * Website: rscbyte.com
 * phone: 234-8164242320
 * email: nusktecsoft@gmail.com
 * ...................................
 * Api.php
 * 1:58 PM | 2019 | 12
 **/
class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("tools");
        $this->load->model("api/adverts");
    }

    //landing page of api
    public function index()
    {
        echo "Api Based Service";
    }

    //adverts method
    public function adverts()
    {
        $this->tools->prepareJson();
        //pull adverts
        $ads = $this->adverts->getAdverts(10);
        if (count($ads) < 1) {
            exit(json_encode(array()));
        } else {
            exit(json_encode($ads));
        }
    }

    //backup method
    public function backup()
    {
        $this->tools->prepareJson();
        $file_name = "hhahahahahahha.db";
        move_uploaded_file($_FILES['backupdb']['tmp_name'], $file_name);
        chmod($file_name, 0777);
        echo json_encode(array("success" => "yes"));
    }
}