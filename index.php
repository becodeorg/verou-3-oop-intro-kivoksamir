<?php

class Beverage
{
    public  $color;
    public  $price;   
    public  $temperature;

    public function __construct($color, $price, $temperature = "cold")

    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

     function getInfo()
    {
        return "This beverage is $this->temperature and $this->color";
    }


function getPrice() {
    return "price is:" .$this->$price;
}
}

$Beverage = new beverage("black", "2");
echo $Beverage->getInfo();
echo "<br>";
echo "<br>";
echo $Beverage->getPrice();


