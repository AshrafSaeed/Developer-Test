<?php 

	$response = repeat([1,2,3]); //output should be [1,2,3,1,2,3,1,2,3]
	
	var_dump($response);

	/**
     * Create array with repeated flatten array values
     *
     * @param  array, integer : default value 3
     * @return array
     */

	function repeat(array $data, int $no_of_repeats=3) {

		//craete an array with number of repeates of given array
		$arrData = array_fill(0, $no_of_repeats, $data);
		
	    $output = [];

	    // Apply a callback function recursively to every member of an array
	    // and Flat the multidimentional array 
	    array_walk_recursive($arrData, function($value) use (&$output) { 
	    	$output[] = $value; 
	    });

	    return $output;
	}

