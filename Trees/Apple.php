<?php

namespace app\Trees;

use app\Models\Tree ;

class Apple extends Tree{
    protected string $TreeName = 'Яблоня';
    protected string $Fetus = 'Яблоки';
    public function getCountFetus(): int
    {
        return random_int(40,50);
    }
    public function getWeight(): int
    {
        return random_int(150,180);
    }
}