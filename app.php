<?php
  include_once 'sedan.php';
  include_once 'xuv.php';
  // private $color = "White";
  // private $mileage = "60 kmpl";
  // private $brand = "Sedan";
  // private $color;
  // private $mileage = "100 kmpl";
  // private $brand = "XUV";
  // private $durability = "2 years";

  $sedan = new sedan();
  $c->color= "red";
  echo $sedan->getColor($c->color)." ";
  // echo $sedan->getMileage('20kmpl')." ";
  // echo $sedan->getBrand('sedan')." ";
  // $xuv = new xuv();
  // echo $xuv->getColor('black')." ";
  // echo $xuv->getMileage('10kmpl')." ";
  // echo $xuv->getDurability('2 years')." ";
  // echo $xuv->getBrand('xuv')." ";
?>
