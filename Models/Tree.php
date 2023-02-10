<?php
/**
 * абстрактный класс для создания животных
 */

namespace app\Models;

abstract class Tree
{
    protected string $Id;
    protected string $TreeName;
    protected string $Fetus;
    //метод вызывается при объявлении экземпляра этого класса и присваивает ID
    public function __construct()
    {
        $this->Id = uniqid();
    }
    //возврат объекта этого класса
    public function addTree(): static
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
        return $this->TreeName;
    }
    // получение названия продукта которое дает животное
    public function getFetus(): string
    {
        return $this->Fetus;
    }
    //возвращает количество продукта за один сбор
    abstract protected function getCountFetus(): int;

    abstract protected function getWeight(): int;
}