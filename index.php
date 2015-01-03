<?php

if(isset($_REQUEST['q']) && $_REQUEST['q'] != '') {
	$arg = escapeshellarg($_REQUEST['q']);
	$result = shell_exec("/usr/bin/qalc -t $arg");
	echo trim($result);
} else {
	echo "Error: no expression.";
}
