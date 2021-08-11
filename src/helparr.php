<?php

function p($array, $dump=false) {

	echo '<pre>';
	print_r($array);
	echo '</pre>';

	if($dump==true) {

		echo '<hr><pre>';
		var_dump(debug_backtrace());
		echo '</pre>';

	}

}

function d($array, $dump=false) {

	exit(p($array));

}
