<?php 

// possible test cases:

// [1,0] => [1,1]
$testCase1 = next_binary_number([1,0]); // [1,1]

// [1,1] => [1,0,0]
$testCase2 = next_binary_number([1,1]); // [1,1]

// [1,1,0] => [1,1,1]
$testCase3 = next_binary_number([1,1,0]); // [1,1]

// [1,0,0,0,0,0,0,0,0,1] => [1,0,0,0,0,0,0,0,1,0]
$testCase4 = next_binary_number([1,0,0,0,0,0,0,0,0,1]); // [1,1]

var_dump($testCase1);
var_dump($testCase2);
var_dump($testCase3);
var_dump($testCase4);

/**
 * get next binary number
 *
 * @param  array
 * @return array
*/

function next_binary_number(array $array) {

	//create binary code from given array
	$strBinaryCode = implode('', $array);

	//convert binary code into decimal
	$decimalCode = bindec($strBinaryCode);

	//create next decimal code into binary
	$binaryCode = decbin((int)$decimalCode + 1);

	// converting binary code into array 
	return str_split($binaryCode);	
}
