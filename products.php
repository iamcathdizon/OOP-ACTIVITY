<?php
    class Products {
        private $name;
        private $description;
        private $price;
        private $srp;

        function setname(){
            $this->name = $name;
        }
        function setDescription(){
            $this->description = $description;
        }
        function setPrice(){
            $this->price = $price;
        }
        function getName(){
            echo $this->name;
        }
        function getDescription(){
            echo $this->description;
        }
        function getPrice(){
            echo $this->price;
        }
        function computeSRP(){
            echo ($this->pricre * 15);
        }
    }
?>