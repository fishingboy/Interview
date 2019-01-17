<?php
/**
 * Date: 2017/5/26
 * Time: 下午 05:41
 */

if (!function_exists('getPaginationArray')) {
    /**
     * @param $page
     * @param $per_page
     * @param $total
     *
     * @return array
     */
    function getPaginationArray($page, $per_page, $total)
    {
        $page = (int)$page;
        $per_page = (int)$per_page;
        $from = ($page - 1) * $per_page;
        $num_pages = ceil($total / $per_page);

        if ($page < 1) {
            $page = 1;
        }

//        $next_page = ($page + 1) > $num_pages ? $num_pages : $page + 1;

        return
            [
                'num_pages'    => (int)$num_pages, //共有幾頁
                'current_page' => $page, //目前第幾頁
//                'next_page'    => (int)$next_page, //下一頁
                'from'         => (int)$from,
                'size'         => (int)$per_page,
            ];
    }
}
