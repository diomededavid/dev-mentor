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



function makeyougart( $type = "Greek", $flavour )
{
	return "Making a bowl of $type $flavour."
}