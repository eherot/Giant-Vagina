<?php 

$cols = 9;
$pagenum = 1;
$tn_width = "69px";
$tn_height = "69px";
   
try
{
	$db = new SQLite3('GV.db');
}
catch(Exception $e)
{
	die($error);
}

$q = "SELECT " .
		"id," . 
		"name, " .
		"type, " .
		"title " .
	"FROM image_metadata " .
	"WHERE page = {$pagenum} " .
	"ORDER BY pos ASC";

$col_cur_pos = 0;

print("<table class='picture-grid'>\n");

if($result = $db->query($q))
{
	
	echo "<tr>";
	
	while($row = $result->fetchArray())
	{
		
		$col_cur_pos = $col_cur_pos + 1;
		
		$id = $row['id'];
		$name = $row['name'];
		$type = $row['type'];
		$title = $row['title'];
		
		print("<td>\n" .
			"<a href='displayimage.php?id={$id}'>\n" .
			"<img \n" .
				"alt='{$title}'\n" .
				"title='{$title}'\n" .
		 		"style='\n" .
					"width: {$tn_width}; \n" .
					"height: {$tn_height};' \n" .
				"src='thumbnails/{$name}.{$type}'\n" .
			"/>" .
			"</a>\n" .
			"</td>\n");
		
		if ($col_cur_pos % $cols == 0) {
			print("</tr>\n<tr>\n");
		}
		
	}
	
	echo "</tr>\n</table>\n";
	
}
else
{
	print "ERROR!";
	die($error);
}

?>