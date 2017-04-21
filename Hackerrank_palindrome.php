<?php

function test($text = null){
		$len = strlen($text);
		$stat = $len / 2;
		$stat = (int)$stat;
		$new = str_split($text);
		$counter = $stat - 1;
		for($i=0;$i<$stat;$i++){
			if(($text[$i] != $text[$len - $i - 1])){
				array_splice( $new, count($new) - $i, 0, array($text[$i]));
				array_splice( $new, ++$counter, 0, array($text[$len - $i - 1]));
			}
		}
		
		$new = implode("", $new);
		return $new;
	}

	function check_palindrome($string) {
		//remove all spaces
		$string = str_replace(' ', '', $string);

		//remove special characters
		$string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

		//change case to lower
		$string = strtolower($string);

		//reverse the string
		$reverse = strrev($string);

		if ($string == $reverse) {
			echo "<p>It is Palindrome</p>";
		} 
		else {
			echo "</p>Not Palindrome</p>";
		}
	}
	check_palindrome(test('saya sedang bermain'));

?>