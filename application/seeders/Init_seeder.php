<?php defined('BASEPATH') OR exit('No direct script access allowed');

include_once (__DIR__ . "/Seeder_base.php");

/**
 * 種子的父類別
 */
class Init_seeder extends Seeder_base
{
    protected $CI;

    /**
     * 執行順序 (大的排前面)
     * @var integer
     */
    public $priority = 0;

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function run()
    {
        $this->CI->db->truncate("teachers");
        $this->CI->db->truncate("students");
        $this->CI->db->truncate("courses");
        $this->CI->db->truncate("scores");

        $this->CI->db->insert('teachers', [
            'teacher_no' => 1,
            'name' => "王老師",
        ]);

        $this->CI->db->insert('students', [
            'student_no' => 'b0234235',
            'name' => "陳同學",
            'sex' => "男",
            'age' => 21,
        ]);

        $this->CI->db->insert('courses', [
            'course_no' => '1072342',
            'name' => "基礎程式設計",
            'teacher_no' => "1",
        ]);

        $this->CI->db->insert('scores', [
            'student_no' => 'b0234235',
            'course_no' => '1072342',
            'score' => 88,
        ]);
    }
}