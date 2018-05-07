<?php
// How to use RegEx Patterns for validation


// This function is test whether a regular expression matches a specific string.
// This function stops after the first match.
$match_pattern = preg_match($pattern, $string, $matches);


// This function is perform a global search of the input string.
// If preg_match_all() returns true, then you can iterate over the array specified by  $matches.
$match_all_pattern = preg_match_all($pattern, $string, $matches);


// This function is perform a regular expression search and replace
$replace_pattern = preg_replace($pattern, $string_replacement, $string_input);


/**
 *
 * Test email address using preg_match() function
 *
*/

$emailpattern = "/^\w+([\.-]?\w+)@\w+([-]?\w+)\.([a-z]{2,3})(\.[a-z]{2,3})?$/";
$emailval   = 'yourname@example.com';

	if (preg_match($emailpattern, $emailval)) {
	    echo "Found a match!";
	} else {
	    echo "The regex pattern does not match.";
	}

// Using function
	function checkEmail( $str ) {
		$emailpattern = "/^\w+([\.-]?\w+)@\w+([-]?\w+)\.([a-z]{2,3})(\.[a-z]{2,3})?$/";
		return preg_match($emailpattern, $str);
	}
	echo checkEmail($emailval); // Return true of false


/**
 *
 * Get data using preg_match_all() function
 *
*/
	$string = "Name: <p>John Poul</p> Title: <b>PHP Guru</b>";
	$pattern = "/<p>(.*)<\/p>/U";
	preg_match_all ($pattern, $string, $matches);
		echo $matches[0][0];


/**
 *
 * Replace all white space to WS using preg_replace() function
 *
*/
	function spaces($string) {
		return ( preg_replace("/(\s+)/u",'WS',$string ) );
	}
	echo spaces("abc def ghi");
