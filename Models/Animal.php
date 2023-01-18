<?php


namespace app\Models;


abstract class Animal
{
    protected string $Id;
    protected string $AnimalName;
    protected string $ProductName;
    public function __construct()
    {
        $this->Id = uniqid();
    }
    public function addAnimal(): static
    {
        return new static();
    }
    public function getId(): string
    {
        return $this->Id;
    }
    public function getName(): string
    {
        return $this->AnimalName;
    }
    public function getProduct(): string
    {
        return $this->ProductName;
    }
    abstract function getCountProduct(): int;

    
}