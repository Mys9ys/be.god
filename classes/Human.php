<?php

namespace classes;

class Human
{
    use Finance;

    public $name;

    public function setName($name){
        $this->name = $name;
    }
}