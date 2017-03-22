<?php
  abstract class AbClass{
    abstract function getColor($color);
    abstract function getmileage($mileage);
    abstract function getBrand($brand);
    function getDurability($durability){
      return "2 years";
    }
  }
?>
