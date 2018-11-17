<?php

class food{
    private $name;

    function get_data($name){
        $this->name = $name;
    }

    function show_details(){
        echo $this->name."<br>";
    }
}

class junkfood extends food{
    private $junckfood="sandwitch";
    function show_details1(){
        $this->get_data($this->junckfood);
    }
}

$pvn = new food();
$pvn->get_data("Pizza");
$pvn->show_details();
$a = new junkfood();
$a->show_details1();
$a->show_details();

?>