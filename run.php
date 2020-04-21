<?php
  require_once("honda.php");
  require_once("nissan.php");
  require_once("ferrari.php");

  echo "-----------------------------------Q1-----------------------------------</br>";

  $honda1 = new Honda;
  $nissan1 = new Nissan;
  $ferrari1 = new Ferrari;

  $cars1 = array($honda1, $nissan1, $ferrari1);
  foreach ($cars1 as $value) {
    $name = $value->ReturnName();
    $price = $value->ReturnPrice();
    $capacity = $value->ReturnCapacity();
    $acceleration = $value->ReturnAcceleration();
    echo $name . "の価格は" . $price . "万円で定員は" . $capacity . "人で加速度は" . $acceleration . "m/s²です</br>";
  }
  ?>