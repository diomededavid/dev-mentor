<?php
/**
 * Created by PhpStorm.
 * User: daviddiomede
 * Date: 5/22/18
 * Time: 7:57 AM
 */

class Numbers {


function even_numbers($numbers) {
	$numbers = range( 0, 100 );
	return (! ($numbers & 1));

	public $array = $numbers;

	array_filter($array, "even_numbers");
}

/*//modulous
function numbers($numbers) {
	return $numbers % 2 == 0;
}*/

}
$foo = new Numbers;

$element = 'even_numbers';
print $foo->$element;