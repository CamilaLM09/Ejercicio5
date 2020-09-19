<?php
    namespace Models;
    abstract class Transport{
        private $name;

        function __construct($name){
            $this->name = $name;
        }
        function toString(){
            return "Transport name: " .$name. " ";
        }
    }