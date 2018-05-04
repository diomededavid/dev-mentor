<?php
/**
 * Parameters
 * User: daviddiomede
 * Date: 5/4/18
 * Time: 12:27 PM
 */

//Functions and everything that goes inside of them (arguments)
//Focus on what the parameters are, what is necessary and what is not

function makeCoffee($type = "iced coffee"){
	return"making a cup of $type.<br>";
}
echo makeCoffee();
echo makeCoffee(null);
echo makeCoffee("expresso");

function coffeeIngredients($type, $cream, $sugar ) {
	if ( $type = 'decaffinated' ) {
	    echo $type;
	} else{
		echo 'regular';
	}
	if ($cream == true) {
		echo 'with cream';
	} if ( $cream == false ) {
	  echo 'without cream';
	}

	echo "I would like $type coffee with $cream";
}

coffeeIngredients()