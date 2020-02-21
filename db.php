<?php

include 'db_config.php';

$mysqli = new mysqli(
		$db_host,
		$db_user,
		$db_pass,
    $db_schema
	);

?>