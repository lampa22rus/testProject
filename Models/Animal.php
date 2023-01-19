<?php
/**
 * абстрактный класс для создания животных
 */
namespace app\Models;

abstract class Animal
{
    protected string $Id;
    protected string $AnimalName;
    protected string $ProductName;
    //метод вызывается при объявлении экземпляра этого класса и присваивает ID
    public function __construct()
    {
        $this->Id = uniqid();
    }
    //возврат объекта этого класса
    public function addAnimal(): static
    {
        return new static();
    }
    // получение id животного(по тз ни где не используется)
    public function getId(): string
    {
        return $this->Id;
    }
    // получение названия животного
    public function getName(): string
    {
        return $this->AnimalName;
    }
    // получение названия продукта которое дает животное
    public function getProduct(): string
    {
        return $this->ProductName;
    }
    //возвращает количество продукта за один сбор
    abstract protected function getCountProduct(): int;
}