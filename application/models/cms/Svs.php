<?php

/**
 * Company: RSC BYTE LTD
 * Author: Revelation, A.F
 * Email: nusktecsoft@gmail.com
 * website: rscbyte.com
 * 2020-01-08 - revelation
 **/
const SVS_MODEL_TABLE = "cms_service";
const SVS_LOCATIONS_MODEL_TABLE = "cms_locations";
const SVS_CAS_MODEL_TABLE = "cms_cas";
class Svs extends CI_Model
{
    //login to services
    function svs_login($data)
    {
        $this->db->reset_query();
        $this->db->where("semail", $data['email']);
        $this->db->where("spass", sha1($data['password']));
        return $this->db->get(SVS_MODEL_TABLE)->row_array();
    }

    //get service by id or email
    function svs_getuser($d)
    {
        $this->db->reset_query();
        $this->db->where("sid", $d, TRUE);
        $this->db->or_where("semail", $d);
        return $this->db->get(SVS_MODEL_TABLE)->row_array();
    }

    //create service
    function svs_createcas($mod)
    {

    }


    /*
     * 	loc_id	loc_name loc_slog 	loc_country	loc_add_one	loc_add_two	loc_phone_one	loc_phone_two	loc_email	loc_status loc_cas	loc_code_id	loc_created
     */
    //create branch
    function svs_addbranch($mod)
    {
        $this->db->reset_query();
        //read from cas system
        $this->db->select("ccode", $mod['loc_cas']);
        $rd = $this->db->get(SVS_CAS_MODEL_TABLE)->row_array();
        if (count($rd) < 1) {
            //return 101; //return error 101 for invalid cas code
        }
        //read from cas system
        $this->db->reset_query();
        $this->db->select("loc_email", $mod['loc_email']);
        $rd = $this->db->get(SVS_LOCATIONS_MODEL_TABLE)->row_array();
        if (count($rd) > 0) {
            return 102; //return error 102 for email already existed
        }
        //now insert
        $this->db->reset_query();
        $mod['loc_code_id'] = 1;
        $this->db->insert(SVS_LOCATIONS_MODEL_TABLE, $mod);
        return 100;
    }
}