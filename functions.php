<?php
/**
 * Created by PhpStorm.
 * User: daviddiomede
 * Date: 5/4/18
 * Time: 10:44 AM
 */

$dinner = ['Meat', 'Potatoes', 'Beans', 'Rice'];
sort( $dinner );

foreach( $dinner as $ingredient) {
	echo $ingredient . '<br>';
}

echo '<p></p>';

rsort( $dinner );

foreach( $dinner as $ingredient) {
	echo $ingredient . '<br>';
}

echo '<p></p>';
$text = 'Twinkle Twinkle little Star!';
$text = strtolower( $text );
echo $text;

echo '<p></p>';
//Sha1
$password = 'MyPassword';
echo "Before: $password <br>";

$password = sha1( $password );
echo "After: $password";

