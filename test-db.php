<?php 

$image_id = $_GET["id"];

try
{
	$db = new SQLite3('GV.db');
}
catch(Exception $e)
{
	die($error);
}

$q_cur = "SELECT " .
		"i.page," .
		"i.name," . 
		"i.title," . 
		"i.text," . 
		"i.pos," .
		"p.index_file," .
		"p.index_file_link_image_file " .
	"FROM " . 
		"image_metadata i " .
	"JOIN pages p " .
		"ON i.page = p.id";

if($result = $db->query($q_cur))
{
	while($row = $result->fetchArray())
	{
		$page = $row['page'];
		$name = $row['name'];
		$title = $row['title'];
		
		print("Page: {$page}, Name: {$name}, Title: {$title}<br />\n\n");
	}
}
else
{
	print "ERROR! ";
	print "SQL: {$q_cur}";
	die($error);
}

?>