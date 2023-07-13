<?php


class Accessory extends Product {
    public $materials;
    public $size;

    public function __construct(string $_name, string $_image, Float $_price, string $_category,  Float $_size, string $_materials) {
        parent::__construct($_name, $_image, $_price, $_category, );
        $this->size = $_materials;        
    }
}
?>