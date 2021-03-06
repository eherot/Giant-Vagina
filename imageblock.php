<?php 

$tn_width = "69px";
$tn_height = "69px";

include 'db.php';

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

if($result = $mysqli->query($q))
{
	
	echo "<tr>";
	
	while($row = $result->fetch_array())
	{
		
		$col_cur_pos = $col_cur_pos + 1;
		
		$id = $row['id'];
		$name = $row['name'];
		$type = $row['type'];
		$title = $row['title'];
		
		print("<td>\n" .
			"<a class='fancy_image' rel='group1' href='displayimage.php?id={$id}'>\n" .
			"<img \n" .
				"alt='{$title}'\n" .
				"title='{$title}'\n" .
		 		"style='\n" .
					"border: 1px solid black; \n" .
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