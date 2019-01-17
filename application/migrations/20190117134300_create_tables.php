<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_tables extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array (
            'teacher_no' =>
                array (
                    'type' => 'INT',
                    'null' => false,
                ),
            'name' =>
                array (
                    'type' => 'varchar',
                    'null' => false,
                    'constraint' => '100',
                ),
        ));
        $this->dbforge->add_key('teacher_no', TRUE);
        $this->dbforge->create_table('teachers');

        $this->dbforge->add_field(array (
            'student_no' =>
                array (
                    'type' => 'INT',
                    'null' => false,
                ),
            'name' =>
                array (
                    'type' => 'varchar',
                    'null' => false,
                    'constraint' => '100',
                ),
            'sex' =>
                array (
                    'type' => 'varchar',
                    'null' => false,
                    'constraint' => 255,
                ),
            'age' =>
                array (
                    'type' => 'int',
                    'null' => false,
                ),
        ));
        $this->dbforge->add_key('student_no', TRUE);
        $this->dbforge->create_table('students');

        $this->dbforge->add_field(array (
            'course_no' =>
                array (
                    'type' => 'INT',
                    'null' => false,
                ),
            'name' =>
                array (
                    'type' => 'varchar',
                    'null' => false,
                    'constraint' => '100',
                ),
            'teacher_no' =>
                array (
                    'type' => 'varchar',
                    'null' => false,
                    'constraint' => '100',
                ),
        ));
        $this->dbforge->add_key('course_no', TRUE);
        $this->dbforge->create_table('courses');

        $this->dbforge->add_field(array (
            'student_no' =>
                array (
                    'type' => 'INT',
                    'null' => false,
                ),
            'course_no' =>
                array (
                    'type' => 'varchar',
                    'null' => false,
                    'constraint' => '100',
                ),
            'score' =>
                array (
                    'type' => 'int',
                    'null' => false,
                ),
        ));
        $this->dbforge->add_key('student_no', TRUE);
        $this->dbforge->create_table('scores');
    }

    public function down()
    {
        $this->dbforge->drop_table('teachers', TRUE);
        $this->dbforge->drop_table('students', TRUE);
        $this->dbforge->drop_table('courses', TRUE);
        $this->dbforge->drop_table('scores', TRUE);
    }
}