<?php
  include_once 'AbClass.php';
  class xuv extends AbClass{
    private $color = "Black";
    private $mileage = "100 kmpl";
    private $brand = "XUV";
    private $durability = "2 years";

    public function getColor($color){
      return $color;
    }
    public function getmileage($mileage){
      return $mileage;
    }
    public function getBrand($brand){
      return $brand;
    }
    public function getDurability($durability){
    }
  }
?>
<!--  public function __construct($color, $mileage, $brand, $durability) {
    $this->color = $color;
    $this->mileage = $mileage;
    $this->brand = $brand;
    $this->$durability = $durability;
    } -->
