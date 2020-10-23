<?php
class Laptop
{
    protected $title;
    protected $price;

    function __construct($title, $price){
        $this->title = $title;
        $this->price = $price;
    }
    function product(){
        echo "Ноутбук ".$this->title." стоит ".$this->price;
}

}
$a = new laptop('MacBook', '1000');
$a->product();
?>