<?php
namespace app\Animals;

use app\Models\Animal ;

class Chiken extends Animal{
    protected string $AnimalName = 'Курица';
    protected string $ProductName = 'Яйца';
    public function getCountProduct(): int
    {
        return random_int(0,1);
    }
}