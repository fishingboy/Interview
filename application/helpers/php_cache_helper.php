<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 清除 PHP Cache
 * @return string Cache 類型
 */
function clearPHPCache()
{
    $clear_php_cache = "";
    if (function_exists('opcache_reset') && opcache_reset()) {
        $clear_php_cache = "OPcache";
    } else if (function_exists('apc_clear_cache') && apc_clear_cache()) {
        $clear_php_cache = "APC";
    }
    return $clear_php_cache;
}
