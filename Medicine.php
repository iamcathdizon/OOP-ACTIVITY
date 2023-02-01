<?php
    require_once "Products.php";

    class Medicine extends Products {
        private $Dose;
        private $Type;
        private $ExpirationDate;
        
        function setDose(){
            $this->dose = $dose;
        }
        function setType(){
            $this->type = $type;
        }
        function setExpirationDate(){
            $this->type = $type;
        }
        function getDose(){
            echo $this->$dose;
        }
        function getType(){
            echo $this->$type;
        }
        function getExpirationDate(){
            echo $this-> expirationDate;
        }
        function computeSRP(){
            echo ($this->price * 2);
        }

    }

?>