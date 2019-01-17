<?php

require_once(APPPATH .'tests/CITestCase.php');

class Q1Test extends CITestCase
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

    public function testQ1()
    {
        $sql = "SELECT scores.course_no, MAX(score) AS max_score, MIN(score) AS min_score
                FROM `courses` 
                    JOIN `scores` ON courses.course_no = scores.course_no
                GROUP BY scores.course_no";
        $result = $this->CI->db->query($sql)->result_array();
        echo "<pre>result = " . json_encode($result, JSON_PRETTY_PRINT + JSON_UNESCAPED_UNICODE) . "</pre>\n";

        $this->assertEquals(88, $result[0]['max_score']);
        $this->assertEquals(88, $result[0]['min_score']);
    }
}