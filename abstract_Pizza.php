<?php

abstract class Pizza {

    public function prepare() {
        echo "Preparing the basic ingredients...\n";
    }

  
    abstract public function bake();
}

class MargheritaPizza extends Pizza {
    public function bake() {
        echo "Baking at 400 degrees for 15 minutes.\n";
    }
}

class PepperoniPizza extends Pizza {
    public function bake() {
        echo "Baking at 425 degrees for 18 minutes.\n";
    }
}


$pizza1 = new MargheritaPizza();
$pizza1->prepare();
$pizza1->bake();

$pizza2 = new PepperoniPizza();
$pizza2->prepare();
$pizza2->bake();

//OUTPUT
// Preparing the basic ingredients...
// Baking at 400 degrees for 15 minutes.
// Preparing the basic ingredients...
// Baking at 425 degrees for 18 minutes.


?>
