<?php
    include 'goods.php';

class pineapple extends fruits {
    protected $quantity;
    function __construct($title, $price, $quantity)
    {
        parent::__construct($title, $price);
        $this->quantity = $quantity;
    }
    function product()
    {
        echo $this->quantity.$this->title." стоят ".$this->price*$this->quantity."          ";
    }
}
class apple
{
    function __construct($title, $price, $quantity)
    {
        parent::__construct($title, $price);
        $this->quantity = $quantity;
    }
    function product()
    {
        echo $this->quantity.$this->title." стоят ".$this->price*$this->quantity."          ";
    }
}
$pineapple = new pineapple( 'pineapple', '100 ', '10 ');
$apple = new pineapple( 'apple', '200 ' , '10 ');
$grape = new pineapple( 'grape', '700 ' , '1 ');
$grape->product();
$pineapple->product();
$apple->product();
