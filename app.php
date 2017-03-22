<?php
  include_once 'sedan.php';
  include_once 'xuv.php';
  $sedan = new sedan();
  echo $sedan->getColor($color);
  echo $sedan->getMileage($mileage);
  echo $sedan->getBrand($sedan);
  $xuv = new xuv();
  echo $xuv->getColor($color);
  echo $xuv->getMileage($mileage);
  echo $xuv->getDurability($durability);
  echo $xuv->getBrand($brand);
?>
