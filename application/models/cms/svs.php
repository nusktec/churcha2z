<?php

/**
 * Company: RSC BYTE LTD
 * Author: Revelation, A.F
 * Email: nusktecsoft@gmail.com
 * website: rscbyte.com
 * 2020-01-08 - revelation
 **/
const SVS_MODEL_TABLE = "cms_service";
class svs extends CI_Model
{
    //login to services
    function svs_login($data)
    {
        $this->db->reset_query();
        $this->db->where("semail", $data['email']);
        $this->db->where("spass", sha1($data['password']));
        return $this->db->get(SVS_MODEL_TABLE)->row_array();
    }

    //create service
    function svs_createuser($mod)
    {

    }

    //get service by id or email
    function svs_getuser($d)
    {
        $this->db->reset_query();
        $this->db->where("sid", $d, TRUE);
        $this->db->or_where("semail", $d);
        return $this->db->get(SVS_MODEL_TABLE)->row_array();
    }
}