<?php
  class Car {
    protected $name = "";
    protected $price = "";
    protected $capacity = "";
    protected $acceleration = "";

    function StepOnAccelerator () {

    }

    function ReturnName() {
      return $this->name;
    }

    function ReturnPrice() {
      return $this->price;
    }

    function ReturnCapacity() {
      return $this->capacity;
    }

    function ReturnAcceleration() {
      return $this->acceleration;
    }

  }

?>