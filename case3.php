<?php
$status = 1;

//Menggunakan match exspression 
$result = match ($status) {
0 => 'zero',
1 => 'one',

default => 'unknown',

};

echo $result; //output: one




?>
