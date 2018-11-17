<?php

class parent_class{
    public function car(){
        echo "Parent function<br>";
    }
    public function invoke_parent_car(){
        self::car();
    }
}

class child extends parent_class{
    public function car(){
        echo "child function<br>";
    }
    public function invoke_parent(){
        parent::invoke_parent_car();
    }
}

$d1 = new child();
$d1->car();
$d1->invoke_parent();

?>