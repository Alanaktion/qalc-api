<?php

$response = array("error" => 0, "result" => "");

if(isset($_REQUEST['q']) && $_REQUEST['q'] != '') {
	$arg = escapeshellarg($_REQUEST['q']);
	$result = shell_exec("/usr/bin/qalc -t $arg");
	$response["result"] = trim($result);
} else {
	$response["error"] = "No expression specified, parameter `q` is missing or empty.";
}

header("Content-type: application/json");
echo json_encode($response);
