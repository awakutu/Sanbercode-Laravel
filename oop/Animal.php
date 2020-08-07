<?php
class Animal {
  public $name;
  public $legs;
  public $cold_blooded;

  function __construct($name, $legs) {
    $this->name = $name;
    $this->legs = $legs;
    $this->cold_blooded="";
  }
  function get_name() {
    return $this->name;
  }
  function get_legs(){
  	return $this->legs;
  }
  function get_cold_blooded(){
  	if ($this->legs === 4) {
  		return $this->cold_blooded = " true";
  	}
  	return $this->cold_blooded = " false";	
  }
}
?>