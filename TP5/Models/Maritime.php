<?php
    namespace Models;
    use Models\Transport as Transport;
    class Maritime extends Transport{
        private $maxKnots;

        function __construct($maxKnots){
            $this->maxKnots = $maxKnots;
        }
        function toString(){
            return "Max Knots: " .$maxKnots. " ";
        }
    }