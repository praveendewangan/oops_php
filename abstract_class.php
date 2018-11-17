<?php
abstract class speak{
    abstract public function sayHello();

    public function hello(){
        echo "Hello function<br>";
    }
}

class childone extends speak{
    public function sayHello(){
        echo "Hello all<br>";
    }
}

$ch = new childone();
$ch->hello();
$ch->sayHello();
?>
