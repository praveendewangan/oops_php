<?php
class Dish{
    public function dal(){
        echo "dal<br>";
    }
    public function roti(){
        echo "roti<br>";
    }
    public function subji(){
        echo "subji<br>";
    }
    public function Sweet(){
        echo "sweet from dish";
    }
}
trait Sweets{
    public function Sweet(){
        echo "sweet from traits";
    }
}
class Dish1 extends Dish{
    // use Sweets
}

class Dish2 extends Dish{
    use Sweets;
}
class Dish3 extends Dish{
    // use Sweets
}
class Dish4 extends Dish{
    // use Sweets
}

$d2 = new Dish2();
$d2->Sweet();
?>