<?php

namespace classes;

trait Finance
{
    protected $money;

    public function countMoney()
    {
        return $this->money;
    }

    public function buy($sum)
    {
        $this->money -= $sum;
    }

    public function sale($sum)
    {
        $this->money += $sum;
    }

    public function setMoney($sum)
    {
        $this->money = $sum;
    }
}