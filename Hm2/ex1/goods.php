<?php

abstract class fruits
{
    protected $title;
    protected $price;

    function __construct($title, $price){
        $this->title = $title;
        $this->price = $price;
    }

}


