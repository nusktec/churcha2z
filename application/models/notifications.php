<?php

/**
 * Created by RSC BYTE LTD.
 * Author: Revelatin A.F
 * Date: 11/01/2020 - notifications.php
 */
const NOTI_MODEL_TABLE = "cms_notification";
class notifications extends CI_Model
{
    //get unread notification
    public function noti_getall($id)
    {
        if (!$id)
            return null;
        $this->db->reset_query();
        $this->db->where('nuid', $id, FALSE);
        return $this->db->get(NOTI_MODEL_TABLE)->result_array();
    }

    //get unread notification
    public function noti_getunread($id)
    {
        if (!$id)
            return null;
        $this->db->reset_query();
        $this->db->where('nuid', $id, FALSE);
        $this->db->where('nseen', 0, FALSE);
        return $this->db->get(NOTI_MODEL_TABLE)->result_array();
    }
}