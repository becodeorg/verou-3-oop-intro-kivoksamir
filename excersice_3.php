<?php

declare(strict_types=1);

/* EXERCISE 3
TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
TODO: Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/

require "exersice_1.php";


class Beer extends Beverage
{
    private  $name;
    private  $alcohol;
    
    
    
    
    public function __construct( $color,$price,$temprature, $name, $alcohol)
    {
        
        parent::__construct($color,$price, $temprature);
        $this ->name = ucfirst($name);
        $this ->alcohol = $alcohol;
        
    }
    
    public function getAlcohol() {

        echo "The alcohol is .$this->alcohol.%.";
    
    }

    private function beerInfo() {
        return " $this->name .  the alochol percentage is .$this->alcohol . and I have a .{$this->getInfo()} color."; //better add {} when we call specially function
    }

    public function getBeerInfo(){
        return $this->beerInfo();
    }

}

$duvel = new Beer("light", 3.5," ", "Duvel", 8.5);
$duvel->getAlcohol();
echo "<br> {$duvel->getInfo()}";
echo "<br>{$duvel->getBeerInfo()}";