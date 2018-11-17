<?php

class Student{
    private $sname,$srollno;

    function get_details($name,$rollno){
        $this->sname = $name;
        $this->srollno = $rollno;
    }

    function show_details(){
        echo "Name : ".$this->sname." and Roll No : ".$this->srollno;
    }
}

$pvn = new Student();
$pvn->get_details("PRAVEEN","12345");
$pvn->show_details();

?>