<?php

class car{
    private $speed = 80;

    function car_fun(){
        echo "car function<br>";
    }
}

class sports_car extends car{
    // private $speed = 120;
    function show_details(){
        echo $this->speed;
    }
}

$car = new car();
$car->car_fun();
$pvn = new sports_car();
$pvn->show_details();

?>