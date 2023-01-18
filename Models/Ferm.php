<?php 

/**
 * Класс фермы которая будет содержать в себе всю информацию о животных и их продуктах
 */


namespace app\Models;
use app\Models\Animal;
include 'Animal.php';
class Ferm {
    protected array $animals;
    protected array $animalsNamesCounts;
    protected array $animalsProductCounts;
    //создаем классы животного и храним их в переменной для дальнейшей работы с ними
    public function addAnimals(Animal $animal,$count = 1):void
    {
        for($i = 0;$i<$count;$i++){
            $this -> animals [] = $animal->addAnimal();
        }
        
    }
    //получение массива где ключ это название животного, а значение это количество его копий
    public function getAnimalsNamesCounts():array
    {
        $this->animalsNamesCounts = [];
        for($i = 0;$i<count($this -> animals);$i++){
            isset($this->animalsNamesCounts[$this->animals[$i]->getName()]) ? (
                $this->animalsNamesCounts[$this->animals[$i]->getName()] += 1
            )
            : (
                $this->animalsNamesCounts[$this->animals[$i]->getName()] = 1
            );
        }
        
        return $this -> animalsNamesCounts;
    }
    //добавление 
    public function addСollectProducts($day= 1):void
    {   
        $this->animalsProductCounts = [];
        for($j = 0; $j < $day;$j++){
            for($i = 0;$i<count($this -> animals);$i++){
                isset($this->animalsProductCounts[$this->animals[$i]->getProduct()]) ? (
                    $this->animalsProductCounts[$this->animals[$i]->getProduct()] +=$this -> animals[$i] ->getCountProduct()
                )
                : (
                    $this->animalsProductCounts[$this->animals[$i]->getProduct()] = $this -> animals[$i] ->getCountProduct()
                );
            }
        }
    }
    public function infoProducts():void
    {
        echo "Тип продукта и его количества<br>";
        
        foreach($this  -> animalsProductCounts as $productName => $productCount)
        {
            echo($productName . " : " . $productCount . "<br>");
        }
        
    }
    public function infoAnimals():void
    {
        echo "Тип животных и их количество<br>"; 
        foreach($this  -> getAnimalsNamesCounts() as $animalNames => $animalCount)
        {
            echo($animalNames . " : " . $animalCount . "<br>");
        }
    }

    
    
}