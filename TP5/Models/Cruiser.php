<?php
    namespace Models;
    use Models\Ship as Ship;
    class Cruise extends Ship{

        private $capacity;

        function __construct($capacity){
            $this->capacity = $capacity;
        }
        function toString(){
            return "Capacity: " .$capacity. " ";
        }
    }