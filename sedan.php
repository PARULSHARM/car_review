<?php
  include_once 'AbClass.php';
  class sedan extends AbClass{
    private $color = "White";
    private $mileage = "60 kmpl";
    private $brand = "Sedan";

    public function getColor($color){
      return $color;
    }
    public function getMileage($mileage){
      return $mileage;
    }
    public function getBrand($brand){
      return $brand;
    }
  }
?>
