<?php

namespace app;

use app\Models\Garden;

use app\Trees\Apple;
use app\Trees\Pear;

require_once('Utils/Autoload.php');

$Garden = new Garden();
$Garden ->addTree(new Apple, 10);
echo "ds";
$Garden ->addTree(new Pear, 15);
// echo var_dump($Garden);
$Garden ->infoTrees();

$Garden -> addСollectProducts();
$Garden ->infoProducts();

