<?php
/**
 * Variable scope.
 * User: daviddiomede
 * Date: 5/4/18
 * Time: 1:37 PM
 */

$a = 5;
$b = 10;

function myTest() {
	$GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

myTest();
echo $b;

static $remeberMe;

