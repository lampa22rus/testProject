<?php

namespace app\Trees;

use app\Models\Tree ;

class Pear extends Tree{
    protected string $TreeName = 'Груша';
    protected string $Fetus = 'Груша';
    public function getCountFetus(): int
    {
        return random_int(0,20);
    }
    public function getWeight(): int
    {
        return random_int(130,170);
    }
}