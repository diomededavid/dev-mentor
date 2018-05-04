<?php
/**
 * Arguments
 * User: daviddiomede
 * Date: 5/4/18
 * Time: 11:19 AM
 */

function hangTen( $location ) {
	echo "We're surfing in $location <br>";
}

hangTen( "Hawaii" );
hangTen( "California" );
hangTen( "Australia" );



function multiplyTogether( $val1,  $val2) {

	$product = $val1 * $val2;
	echo "The product of the two numbers is $product";
}

multiplyTogether( 44, 22 );


echo '<br>';

function makeyougart( $flavour, $type = "Greek" )
{
	return "Making a bowl of $type $flavour yougart.";
}

echo makeyougart( "rasberry" );



//source: https://www.youtube.com/watch?v=9cJMYaxPfVw
function hello($arr){
	if (is_array($arr)){
		foreach ($arr as $name){
			echo "Hello, $name, how's it going?<br>";
		}
		} else {
			echo "Hello, friends";
		}
}

$names = [
	'Dave',
	'James',
	'Mark'
];
hello($names);