<?php
    include '1.php';

    class UltraBook extends Laptop{
        protected $size;
        function __construct($title, $price, $size)
        {
            parent::__construct($title, $price);
            $this->size = $size;
        }
        function product()
        {
            echo $this->title." размером ".$this->size;
        }
    }
    $ultrabook = new UltraBook(' Huawei MateBook', '1000', '15');