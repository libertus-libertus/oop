<?php
    require_once 'animal.php';

    class Ape extends Animal {
        public $name;
        public $legs;
        public $cold_blooded;

        public function __construct($string) {
            $this->name = $string;
            $this->legs = 2;
            $this->cold_blooded = "no";
        }
    
        public function get_legs() {
            return $this->legs;
        }
    
        public function get_cold_blooded() {
            return $this->cold_blooded;
        }
        
        public function yell() {
            echo "Yell: Auooo <br/>";
        }
    }
?>