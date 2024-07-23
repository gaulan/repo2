<?php
class Test {
	public $property;

}

$obj = new Test();
$obj -> property = "Hallo, Kantor ";

//menggunakan operator nullfalse 

$value =$obj?->property; // jika $obj tidak null, $value akan menjadi hello kantor
echo $value; //output: halo, kantor


$obj = null;

//menggunakan operator nullfalse 

$value = $obj?->property; //jika $obj null, $value akan tetap null
echo $value; // tidak ada output karena $value adalah null


?>
