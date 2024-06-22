<?php

interface ElectricAppliance {
    public function turnOn();
    public function turnOff();
}

class TV implements ElectricAppliance {
    public function turnOn() {
        echo "Turning on the TV...\n";
    }

    public function turnOff() {
        echo "Turning off the TV...\n";
    }
}

class WashingMachine implements ElectricAppliance {
    public function turnOn() {
        echo "Turning on the washing machine...\n";
    }

    public function turnOff() {
        echo "Turning off the washing machine...\n";
    }
}

class AirConditioner implements ElectricAppliance {
    public function turnOn() {
        echo "Turning on the air conditioner...\n";
    }

    public function turnOff() {
        echo "Turning off the air conditioner...\n";
    }
}


$tv = new TV();
$tv->turnOn();
$tv->turnOff();

$washingMachine = new WashingMachine();
$washingMachine->turnOn();
$washingMachine->turnOff();

$airConditioner = new AirConditioner();
$airConditioner->turnOn();
$airConditioner->turnOff();

?>
