<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 取得所有執行過的 SQL
 * @return array
 */
function getAllSqls()
{
    $CI =& get_instance();
    return $CI->db->queries;
}

/**
 * 取得目前記憶體的使用量
 * @return string 記憶體使用量(含單位)
 */
function memoryUseNow()
{
    $level = ['Bytes', 'KB', 'MB', 'GB'];
    $n = memory_get_usage();
    for ($i=0, $max=count($level); $i<$max; $i++) {
        if ($n < 1024) {
            $n = round($n, 2);
            return "{$n} {$level[$i]}";
        }
        $n /= 1024;
    }
}

/* End of file debug_helper.php */
/* Location: ./application/helpers/debug_helper.php */