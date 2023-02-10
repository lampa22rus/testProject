<?php 
/**
 * Класс сада который содержит методы добавления и получения информации о деревьях и их плодах
 */

namespace app\Models;

use app\Models\Tree;

class Garden {
    protected array $trees;
    protected array $specifications;
    protected array $treesWeight;
    //создаем классы деревьев и храним их в переменной для дальнейшей работы с ними
    public function addTree(
        Tree $tree,
        $count = 1
    ):void {
        for($i = 0;$i<$count;$i++){
            $this -> trees [$tree->getName()][] = $tree->addTree();
        }
    }
    //добавление плода полученного за N количество дней, где ключ это название, а значение количество собранного плода за весь период
    public function addСollectProducts($day= 1):void
    {   echo "//--";
        $this->specifications = [];
        for($j = 0; $j < $day;$j++){
            foreach($this -> trees as $treeName => $typeTree){
                foreach($typeTree as $tree){
                    if (isset($this->specifications[$tree->getFetus()])){
                        $this->specifications[$tree->getFetus()][0] +=$tree->getCountFetus();
                        $this->specifications[$tree->getFetus()][1] +=$tree->getWeight();
                    }
                    else {
                        $this->specifications[$tree->getFetus()][0] = $tree->getCountFetus();
                        $this->specifications[$tree->getFetus()][1] += $tree->getWeight();
                    }
                }
                
            }
        }
        echo "//--";
    }
    
    //вывод информации о продукте
    public function infoProducts():void
    {
        echo 'Тип плода, его количество и общий вес<br>';
        foreach($this  -> specifications as $productName => $specification)
        {
            echo($productName . ' : ' . $specification[0] . ' : ' . $specification[1] . '<br>');
        }
        echo ('<br>');
    }
    //вывод информации о деревьях
    public function infoTrees():void
    {
        echo ('Тип дерева их количество в саду<br>'); 
        foreach($this  -> trees as $treeName => $treeCount)
        {
            echo($treeName . ' : ' . count($treeCount) . '<br>');
        }
        echo ('<br>');
    }
}