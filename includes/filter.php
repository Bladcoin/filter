<?php

$json = json_decode($_POST['json'], true );

$array = [];

$categoryVal = null;

foreach ($json as $key => $value) {
	if($key === 'category') {
    $categoryVal =  explode(' ', mb_strtolower($value))[0];
	}
	if( $key === 'cards' ){
		foreach ($value as $id) {
			if( $id === $categoryVal ) {
				array_push( $array, $id );
				continue 2;
			}
        }
	}
	array_push( $array, $value );
}


print_r(json_encode($array));


?>