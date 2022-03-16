<?php

namespace classes;

trait Finance
{
    protected $money;

    public function countMoney(){
        return self::money;
    }

    public function buy($sum){
        self::money -=$sum;
    }

    public function sale($sum){
        self::money +=$sum;
    }

    public function setMoney($sum){
        self::money =$sum;
    }
}