<?php
    namespace Models;
    use Models\Maritime as Maritime;
    abstract class Ship extends Maritime{
        
        private $propelQuantity;

        function __construct($propelQuantity){
            $this->$propelQuantity = $propelQuantity;
        }
        function toString(){
            return "Propel Quantity: " .$propelQuantity. " ";
        }
    }