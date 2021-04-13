<?php 

	$string = reformat("liMeSHArp DeveLoper TEST"); //Lmshrp dvlpr tst

	echo $string;

	/**
	 * get reformat string and remove vowel letters
	 *
	 * @param  string, optional array : default vowel array
	 * @return string
	 */

	function reformat(string $string) {
		
		$replacer = ['a', 'e', 'i', 'o', 'u'];
		
		//remove vowel letters from string
		$filteredString = str_replace($replacer, '', strtolower($string));

		return ucfirst($filteredString);
	}