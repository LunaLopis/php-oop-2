<?php

class PetFood extends Product {
    // public $category;
    public $weight;
    public $ingredients;


    public function __construct( String $_name, string $_image, Float $_price, String $_category, String $_weight, String $_ingredients) {
        // $this->category = $category;
        parent::__construct($_name, $_image, $_price, $_category);
        $this->weight = $_weight;
        $this-> ingredients = $_ingredients;
        
    }

    // public function getInfo() {
    //     return parent::getInfo() . ", Category: " . $this->category;


    // }   
}

?>