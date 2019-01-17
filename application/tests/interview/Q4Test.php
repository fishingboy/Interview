<?php

require_once(APPPATH .'tests/CITestCase.php');

class Q4Test extends CITestCase
{
    public function setUp()
    {
        $this->CI = & get_instance();
        $this->CI->load->helper('email');

        // 新增 db 資料
    }

    public function tearDown()
    {
        // 移除 db 資料
    }

    public function testQ4()
    {
        $sql = "SELECT sex, count(*) as cnt
                FROM students
                WHERE age < 21
                GROUP BY sex";
        $result = $this->CI->db->query($sql)->result_array();
        echo "<pre>result = " . json_encode($result, JSON_PRETTY_PRINT + JSON_UNESCAPED_UNICODE) . "</pre>\n";

        $this->assertIsArray($result);
    }
}