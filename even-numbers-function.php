<?php

// Write a function that will find all even numbers and return as an array or null if none
$numbers = range( 0, 100 );

function even_numbers($numbers) {
	return (! ($numbers & 1));
}

/*//modulous
function numbers($numbers) {
	return $numbers % 2 == 0;
}*/
$array = $numbers;

print_r(array_filter($array, "even_numbers"));



