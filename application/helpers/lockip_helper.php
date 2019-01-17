<?php
/**
 * 判斷是否為本機
 * @return boolean
 */
function is_local()
{
    $ci = & get_instance();
    if ($ci->input->is_cli_request()
        || $_SERVER['REMOTE_ADDR'] == '127.0.0.1'
        || $_SERVER['REMOTE_ADDR'] == '::1'
        || strpos($_SERVER['REMOTE_ADDR'], '192.168.') !== false)
    {
        return true;
    } else {
        return false;
    }
}

/**
 * 禁止 cty 教師端使用手機瀏灠
 */
function denyCtyMobileBrowser()
{
    include_once("application/third_party/ikimea/Browser.php");
    $browser = new Browser();
    if ($browser->isMobile() && getSystem() == 'cty') {
        $CI =& get_instance();
        echo $CI->load->view("irs/deny_cty_mobile_browser", [], true);
        exit;
    }
}