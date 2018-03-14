<?php
class Menu {
  protected $name;
  protected $price;
  protected $image;
  protected $storeName;
  private $orderCount = 0;
  protected static $count = 0;
  
  
  public function __construct($name, $price, $image,$storeName) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    $this->storeName = $storeName;
    self::$count++;
  }
  
  public function hello() {
    echo '私は'.$this->name.'です';
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getImage() {
    return $this->image;
  }
  
  public function getStoreName(){
    return $this->storeName;
  }
  
  public function getOrderCount() {
    return $this->orderCount;
  }
  
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }
  
  public function getTaxIncludedPrice() {
    //return floor($this->price * 1.08);
     return floor($this->price);
  }
  
  public function getTotalPrice() {
    return $this->getTaxIncludedPrice() * $this->orderCount;
  }
  
  public function getReviews($reviews) {
    $reviewsForMenu = array();
    foreach ($reviews as $review) {
      if ($review->getMenuName() == $this->name) {
        $reviewsForMenu[] = $review;
      }
    }
    return $reviewsForMenu;
  }
  
  
  public static function getCount() {
    return self::$count;
  }
  
  public static function findByName($menus, $name) {
    foreach ($menus as $menu) {
      if ($menu->getName() == $name) {
        return $menu;
      }
    }
  }
  
}
?>