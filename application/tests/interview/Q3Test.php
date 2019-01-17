<?php

require_once(APPPATH .'tests/CITestCase.php');

class Q3Test extends CITestCase
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

    public function testQ3()
    {
        $sql = "SELECT students.name, students.student_no
                FROM students
                WHERE student_no IN (
                    SELECT student_no 
                            FROM scores JOIN courses 
                                        ON scores.course_no = courses.course_no
                            WHERE courses.course_no = '1'
                ) AND NOT student_no IN (
                    SELECT student_no 
                            FROM scores JOIN courses 
                                        ON scores.course_no = courses.course_no
                            WHERE courses.course_no = '2'
                ) 
";
        $result = $this->CI->db->query($sql)->result_array();
        echo "<pre>result = " . json_encode($result, JSON_PRETTY_PRINT + JSON_UNESCAPED_UNICODE) . "</pre>\n";

        $this->assertIsArray($result);
    }
}