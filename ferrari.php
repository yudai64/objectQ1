<?php
  require_once("car.php");

  class Ferrari extends Car {

    function __construct() {
      $this->name = "フェラーリ";
      $this->price = mt_rand(2000, 3000);
      $this->capacity = 2;
      $this->acceleration = 10.0; // m/s²
    }

  }
?>