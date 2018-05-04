<?php
/**
 * Created by PhpStorm.
 * User: daviddiomede
 * Date: 4/26/18
 * Time: 3:12 PM
 */


function rev( $str ) {

	$arr1 = str_split($str);

	//Works inside out - result inside think of math order of operations
	$arr1 = implode(array_reverse( $arr1 ));

	return $str == $arr1;
}

//Checking if it is true
if ( rev('dad') ) {
	echo 'true';
} else {
	echo 'false';
}

//Practice arrays

//Shorthand Method for beyond php 5.1
$arr1 = [];

array_filter();

//Legacy Method
$arr1 = array();





