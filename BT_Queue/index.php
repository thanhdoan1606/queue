<?php
include_once "Quene.php";
include_once "Node.php";

$quene = new Quene();
$quene->enquene(1);
$quene->enquene(2);
$quene->enquene(3);


echo $quene->dequene();
echo $quene->dequene();

echo $quene->isEmpty();

$quene->enquene(4);
$quene->enquene(5);

echo $quene->dequene();
echo $quene->dequene();
echo $quene->dequene();

echo $quene->isEmpty();

?>