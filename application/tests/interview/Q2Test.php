<?php

require_once(APPPATH .'tests/CITestCase.php');

class Q2Test extends CITestCase
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

    public function testQ2_1()
    {
        $sql = "SELECT students.name, students.student_no
                FROM students 
                JOIN scores ON students.student_no = scores.student_no
                WHERE scores.course_no = (
                    SELECT course_no FROM courses WHERE teacher_no = '1'
                )";
        $result = $this->CI->db->query($sql)->result_array();
        echo "<pre>result = " . json_encode($result, JSON_PRETTY_PRINT + JSON_UNESCAPED_UNICODE) . "</pre>\n";

        $this->assertIsArray($result);
    }

    public function testQ2_2()
    {
        $sql = "SELECT students.name, students.student_no
                FROM students JOIN scores on students.student_no = scores.student_no
                WHERE scores.course_no IN (
                    SELECT scores.course_no 
                    FROM scores
                    WHERE student_no = '1072342'
                )";
        $result = $this->CI->db->query($sql)->result_array();
        echo "<pre>result = " . json_encode($result, JSON_PRETTY_PRINT + JSON_UNESCAPED_UNICODE) . "</pre>\n";

        $this->assertIsArray($result);
    }
}