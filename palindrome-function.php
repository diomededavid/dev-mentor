<?php
/**
 * Palindrome Function.
 * User: Dave Diomede
 * Date: 4/21/18
 * Time: 12:17 PM
 */

/**
 * @param $string
 *
 * @return string
 */
function palindrome( $string ) {
	$string = strtolower( preg_replace( '/[^a-zA-Z0-9_\.]/', '', $string ) );

	if ( $string == strrev( $string ) ) {
		return '"' . $string . '"' . ' is a Palindrome.';
	} else {
		return '"' . $string . '"' . '  is not a Palindrome. It must be a word, phrase, number, or other sequence of characters which reads the same backward or forward, ignoring punctuation, case, and spacing.'. "\r\n" ;
	}
}

echo palindrome( 'Race, car' );


/**
 * @param $string
 * @param $pattern
 *
 * @return string
 */
function palindrome_check( $string, $pattern ) {
	$string = strtolower( preg_replace( $pattern, '', $string ) );

	if ( $string == strrev( $string ) ) {
		return '"' . $string . '"' . ' is a Palindrome.';
	} else {
		return '"' . $string . '"' . '  is not a Palindrome. It must be a word, phrase, number, or other sequence of characters which reads the same backward or forward, ignoring punctuation, case, and spacing.';
	}
}

echo palindrome_check( '454', '/[^a-zA-Z0-9_\.]/' );


