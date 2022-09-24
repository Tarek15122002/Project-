<?php 
class Animal {
private $family;
private $food; 
 public function __construct($family, $food) {
     $this->family = $family;
      $this->food = $food;
       }
        public function get_family() {
         return $this->family;
        } 
          public function set_family($family) {
            $this->family = $family;
        } 
        public function get_food() {
        return $this->food;
        } 
        public function set_food($food) {
        $this->food = $food;
     }
     
}
class cow extends Animal{
    private $owner;
    public function __constract($family, $food){
         $this ->owner=$owner;
    }
    public function get_owner() {
        return $this->owner;
       } 
         public function set_owner($owner) {
           $this->owner = $owner;
       } 
}
class Lion extends Animal{
    public function __constract($family , $food){
        
    }
}
 ?>
