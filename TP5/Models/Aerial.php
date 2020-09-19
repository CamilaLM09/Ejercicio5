<?php
    namespace Models;
    use Models\Transport as Transport;
    abstract class Aerial extends Transport{
        private $engineQuantity;

        function __construct($engineQuantity){
            $this->engineQuantity = $engineQuantity;
        }
        function toString(){
            return "Engine quantity: " .$engineQuantity. " ";
        }
    }