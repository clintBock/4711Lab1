<?php


/**
 * Description of Student
 * Student class contains the constructor for the student object, as well as
 * functions for code efficiency. Represents a student in real life.
 * @author couga
 */
class Student {
    
    /**
     * Constructor for student class.
     * surname = students last name
     * first_name = students first name
     * emails = e-mails the student has
     * grades = grades the student has
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    /**
     * adds an email to the email array
     * @param type $which = which email, used as the array index
     * @param type $address = address of the email, what the actual email is
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }
    /**
     * adds a grade to the student grade array
     * @param type $grade = mark the student achieved
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    /**
     * calculates the average grade by adding the grades and dividing by the
     * number of grades
     * @return type = the average grade value
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    /**
     * formats a string for output for the index
     * @return type = a formatted string
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
    
}
