<?php

// Built-in function
function ABC(){
	echo "INDOSHOP.<br>";
}
ABC();

// function with argument
function firstname($name, $born){
	echo "$name, Born in $born.<br>";
} 

firstname("Anju","2021");
firstname("Jaswinder","2020");
firstname("Ajay","2029");


function sum(int $a, int $b){
	return $a * $b."<br>";
}

echo sum(5,6);


function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight();
setHeight(350);
setHeight(135);
setHeight(80);

?>

