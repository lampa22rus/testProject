<?php
namespace app\Animals;
use app\Models\Animal ;

class Cow extends Animal{
    protected string $AnimalName = "Корова";
    protected string $ProductName = "Молоко";
    public function getCountProduct(): int
    {
        return random_int(8,12);
    }
}