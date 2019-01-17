<?php

require_once(APPPATH .'tests/CITestCase.php');

class Q5Test extends CITestCase
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

    public function testQ5()
    {
        $sql = "SELECT course1.student_no
                FROM (
                        SELECT scores.course_no, scores.student_no, scores.score 
                        FROM  courses 
                              JOIN scores ON courses.course_no = scores.course_no
                        WHERE courses.course_no = '1072342'
                ) AS course1 
                JOIN (
                        SELECT scores.course_no, scores.student_no, scores.score 
                        FROM  courses JOIN scores ON courses.course_no = scores.course_no
                        WHERE courses.course_no = '1070120'
                ) AS course2
                ON course1.student_no = course2.student_no
                WHERE course1.score < course2.score
                ";
        $result = $this->CI->db->query($sql)->result_array();
        echo "<pre>result = " . json_encode($result, JSON_PRETTY_PRINT + JSON_UNESCAPED_UNICODE) . "</pre>\n";

        $this->assertIsArray($result);
    }
}