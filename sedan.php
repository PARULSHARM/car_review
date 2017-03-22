<?php
  include_once 'AbClass.php';

  class sedan extends AbClass{
    private $color;
    private $brand;
    private $mileage;
    public function getColor($color){
      $c = $this->color;
      return $c;
    }
    public function getMileage($mileage){
      return $this->mileage;
    }
    public function getBrand($brand){
      return $brand;
    }
  }
?>
