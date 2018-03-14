<?php 
require_once('menu.php');

class Food extends Menu {
  private $spiciness;
  
  public function __construct($name, $price, $image, $storeName,$spiciness) {
    parent::__construct($name, $price, $image,$storeName);
    $this->spiciness = $spiciness;
  }
  
  public function getSpiciness() {
    return $this->spiciness;
  }
  
}

?>