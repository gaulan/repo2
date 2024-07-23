<?php
try {
	//contoh code yang mungkin menyebabkan error 
	$value = 1 / 0 ; // ini akan menyebabkan DivisionByZeroError
}catch (DivisionByZeroError $e){
	echo "Division by zero error: {$e->getMessage()}";
}catch(Error $e) {
	echo "Error: {$e->getMessage()}";
}



?>
