   
<?php
//declare(strict_types=1);

/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
USE TYPEHINTING EVERYWHERE!
*/

require "exersice_1.php";

class Beer extends Beverage
{
    protected  $name;
    protected  $alcohol;
   
    public function __construct( $color,  $price,  $temprature,  $name,  $alcohol)
    {
        parent :: __construct($color,$price, $temprature);
        $this ->name = ucfirst($name);
        $this ->alcohol = $alcohol;
    }
    public function getAlcohol() {

        return "<br/>The alcoholpercentage is .$this->alcohol.%.<br/>";
    }
    public function getColor() {
        return $this->color;
    }

    public function setPrice($new_price){  // TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
        $this->price = $new_price;
        echo $this->price;
    }
}

$duvel = new Beer("blond", 3.5," ", "Duvel", 8.5 );
$new_price = new Beer("blond", 3.5," ", "Duvel", 8.5 );

echo $duvel->getAlcohol();
echo $duvel ->getInfo();
echo $duvel->getColor();
echo "<br/>";
echo $new_price->setPrice(3.5);




