<?php
    require_once 'animal.php';

    // class Frog
    class Frog extends Animal {
        public $name;
        public $legs = 4;
        public $cold_blooded;

        public function __construct($string) {
            $this->name = $string;
            $this->legs = 4;
            $this->cold_blooded = "no";
        }
    
        public function get_legs() {
            return $this->legs;
        }
    
        public function get_cold_blooded() {
            return $this->cold_blooded;
        }
        
        public function jump() {
            echo "Jump: Hop Hop <br/>";
        }
    }
?>