<?php
/**
 * Developer: RSC Byte Limted
 * Website: rscbyte.com
 * phone: 234-8164242320
 * email: nusktecsoft@gmail.com
 * ...................................
 * Helper_global.php
 * 4:26 PM | 2019 | 12
 **/
const FORM_TOKEN_NAME = "formToken";
const FORM_ERROR_NAME = "formerror";

//get form token
function getFormToken()
{
    $ctx = get_instance();
    if ($ctx->session->has_userdata(FORM_TOKEN_NAME)) {
        return $ctx->session->userdata(FORM_TOKEN_NAME);
    } else {
        setFormToken();
        return $ctx->session->userdata(FORM_TOKEN_NAME);
    }
}

//set form token
function setFormToken()
{
    $ctx = get_instance();
    return $ctx->session->set_userdata(FORM_TOKEN_NAME, sha1(time()));
}

//validate form token
function validateFormToken()
{
    if (isset($_REQUEST['formtoken']) && $_REQUEST['formtoken'] == getFormToken()) {
        return true;
    } else {
        return false;
    }
}

//get command keys
function getFormCommand()
{
    $cmd = @$_REQUEST['cmd'];
    return $cmd ? strtolower($cmd) : "No Command";
}

//set global error
function setGlobalError($msg, $type)
{
    $ctx = get_instance();
    $ctx->session->set_userdata(FORM_ERROR_NAME, array("msg" => $msg, "type" => $type));
    return $ctx->session->userdata(FORM_ERROR_NAME);
}

//get global error for once
function getGlobalError()
{
    $ctx = get_instance();
    $error = $ctx->session->userdata(FORM_ERROR_NAME);
    $ctx->session->set_userdata(FORM_ERROR_NAME, null);
    return $error;
}

//time ago
function timeago($datetime, $full = false)
{
    $etime = time() - $datetime;

    if ($etime < 1) {
        return '0 seconds';
    }

    $a = array(365 * 24 * 60 * 60 => 'year',
        30 * 24 * 60 * 60 => 'month',
        24 * 60 * 60 => 'day',
        60 * 60 => 'hour',
        60 => 'minute',
        1 => 'second'
    );
    $a_plural = array('year' => 'years',
        'month' => 'months',
        'day' => 'days',
        'hour' => 'hours',
        'minute' => 'min',
        'second' => 'secs'
    );

    $string = null;
    foreach ($a as $secs => $str) {
        $d = $etime / $secs;
        if ($d >= 1) {
            $r = round($d);
            return $r . ' ' . ($r > 1 ? $a_plural[$str] : $str) . ' ago';
        }
    }
}

//file identifier
function fileIdentity($ext)
{
    $ext = strtoupper($ext);
    if (strpos($ext, 'PDF') !== false) {
        return "PDF Document";
    }
    if (strpos($ext, 'DOC') !== false) {
        return "Word Document";
    }
    if (strpos($ext, 'DOCX') !== false) {
        return "Word Document";
    }
    if (strpos($ext, 'PNG') !== false) {
        return "Image File";
    }
    if (strpos($ext, 'JPG') !== false) {
        return "Image File";
    }
    if (strpos($ext, 'JPEG') !== false) {
        return "Image Document";
    }
}

//check if array contain empty
function cleanArray($arr)
{
    if (is_array($arr)) {
        foreach ($arr as $k => $v) {
            if (empty($v)) {
                return false;
            }
        }
        return $arr;
    } else {
        return false;
    }
}

//construct url
function makeUrl($preceding)
{
    return defined("PAGE_URL") ? base_url(PAGE_URL . "/" . $preceding) : base_url();
}