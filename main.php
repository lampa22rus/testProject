<?php

namespace app;


use app\Models\Ferm;
use app\Animals\Chiken;
use app\Animals\Cow;

include 'Models/Ferm.php';
include 'Animals/Chiken.php';
include 'Animals/Cow.php';

$ferm = new Ferm();
$ferm ->addAnimals(new Cow,10);
$ferm ->addAnimals(new Chiken,20);
$ferm ->infoAnimals();
$ferm -> addСollectProducts(7);
$ferm ->infoProducts();
$ferm ->addAnimals(new Cow,2);
$ferm ->addAnimals(new Chiken,5);
$ferm ->infoAnimals();
$ferm -> addСollectProducts(7);
$ferm ->infoProducts();
?>