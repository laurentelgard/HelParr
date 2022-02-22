<?php

<?php

function p($array, $dump=false) {

	if($dump==true) {

		echo '<style type="text/css">.hide{display: none</style><b>'.date("Y-m-d H:i:s").'</b><br><pre style="padding:2rem;background:#EFEFEF;cursor:pointer" onclick="javascript:document.getElementById(\'details\').classList.toggle(\'hide\')">';
		print_r($array);
		echo '</pre><hr><pre id="details" class="hide">';
		var_dump(debug_backtrace());
		echo '</pre>';

	} else {

		echo '<pre>';
		print_r($array);
		echo '</pre>';
		
	}

}

function d($array, $dump=false) {

	exit(p($array));

}
