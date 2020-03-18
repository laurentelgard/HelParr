<?php

function p($array) {

	echo '<pre>';
	print_r($array);
	echo '</pre><pre>';
	var_dump(debug_backtrace());
	echo '</pre>';

}

function d($array) {

	exit(p($array));

}
