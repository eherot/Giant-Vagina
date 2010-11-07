<?php

include 'db_config.php';

$db_link = mysql_connect(
		$db_host,
		$db_user,
		$db_pass
	);

@mysql_select_db($db_schema) 
	or die ( "Unable to select database {$db_schema}" );

?>