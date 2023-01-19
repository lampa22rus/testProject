<?php 
/**
 * Класс фермы которая будет содержать в себе всю информацию о животных и их продуктах
 */
namespace app\Models;
use app\Models\Animal;
class Ferm {
    protected array $animals;
    protected array $animalsProductCounts;
    //создаем классы животного и храним их в переменной для дальнейшей работы с ними
    public function addAnimals(Animal $animal,$count = 1):void
    {
        for($i = 0;$i<$count;$i++){
            $this -> animals [$animal->getName()][] = $animal->addAnimal();
        }
        
        
    }
    public function getAnimals(){
        return $this -> animals;
    }
    //добавление продукта полученного за N количество дней, где ключ это название, а значение количество собранного продукта за весь период
    public function addСollectProducts($day= 1):void
    {   
        $this->animalsProductCounts = [];

        for($j = 0; $j < $day;$j++){
            foreach($this -> animals as $animalName => $typeAnimal){
                foreach($typeAnimal as $animal){
                    isset($this->animalsProductCounts[$animal->getProduct()]) ? (
                        $this->animalsProductCounts[$animal->getProduct()] +=$animal->getCountProduct()
                    )
                    : (
                        $this->animalsProductCounts[$animal->getProduct()] = $animal->getCountProduct()
                    );
                }
                
            }
        }
    }
    //вывод информации о продукте
    public function infoProducts():void
    {
        echo "Тип продукта и его количества<br>";
        
        foreach($this  -> animalsProductCounts as $productName => $productCount)
        {
            echo($productName . " : " . $productCount . "<br>");
        }
        echo '<br>';
    }
    //вывод информации о животных
    public function infoAnimals():void
    {
        echo "Тип животных и их количество<br>"; 
        foreach($this  -> animals as $animalName => $animalCount)
        {
            echo($animalName . " : " . count($animalCount) . "<br>");
        }
        echo '<br>';
    }
}