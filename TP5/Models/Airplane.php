<?php
    namespace Models;
    use Models\Aerial as Aerial;
    class Airplane extends Aerial{
        private $capacity;

        function __construct($capacity){
            $this->capacity = $capacity;
        }
        function toString(){
            return "Capacity: " .$capacity. " ";
        }
    }