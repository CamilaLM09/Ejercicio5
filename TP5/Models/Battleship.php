<?php
    namespace Models;
    use Models\Ship as Ship;
    class Battleship extends Ship{
        private $armament;

        function __construct($armament){
            $this->armament = $armament;
        }
        function toString(){
            return "Armament: " .$armament. " ";
        }
    }