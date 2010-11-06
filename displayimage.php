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
		"ON i.page = p.id " .
	"WHERE i.id = {$image_id}";

if($result = $db->query($q_cur))
{
	while($row = $result->fetchArray())
	{
		$page = $row['page'];
		$name = $row['name'];
		$title = $row['title'];
		$text = $row['text'];
		$cur_pos = $row['pos'];
		$index_file = $row['index_file'];
		$index_file_link_image_file = $row['index_file_link_image_file'];
	}
}
else
{
	print "ERROR! ";
	print "SQL: {$q_cur}";
	die($error);
}

$q_next = "SELECT id " . 
	"FROM image_metadata " . 
	"WHERE " .
		"pos > {$cur_pos} " .
			"and " .
		"page = {$page} " .
	"ORDER BY pos ASC " .
	"LIMIT 1";

$next_id = $db->querySingle($q_next);

$q_prev = "SELECT id " . 
	"FROM image_metadata " . 
	"WHERE pos < {$cur_pos} " .
			"and " .
		"page = {$page} " .
	"ORDER BY pos DESC " .
	"LIMIT 1";

$prev_id = $db->querySingle($q_prev);

$image_filename = "fullsize/" . $name . ".jpg";
$image_size_array = GetImageSize($image_filename);

$image_height = $image_size_array[1];
$image_width = $image_size_array[0];

		
if ($text == "")
{
	
  $image_text_filename = "text/" . $name . ".gif";

} else {

  $image_text_filename = "text/" . $text . ".gif";

}

$image_text_size_array = GetImageSize($image_text_filename);
$image_text_height = $image_text_size_array[1];
$image_text_width = $image_text_size_array[0];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

  <head>
  
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    
    <title>the art of Sydney Hardin: <?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
    <style type="text/css">
      table
    </style>
    
  </head>

  <body style="text-align: center;">
  
    <table style="margin-left: auto; margin-right: auto; margin-top: 40px;">
    
      <tr>
      
        <td style="border: 3px ridge; padding: 0px;">

	      <img 
	      	src="<?php echo $image_filename; ?>" 
	      	alt="<?php echo $title; ?>" 
	      	style="
	      		width: <?php echo $image_width; ?>px; 
	      		height: <?php echo $image_height; ?>px" 
	      />
	      
      </td>

  </tr>
  
</table>

<table id="picture-holder">

  <tr>
  
    <td style="width: 200px; text-align: left;">
    
    <?php
    
    if($prev_id != "")
    {
    	
  		echo "<a href='?id=" . $prev_id . "'>";
  		echo "<img\n" .
	  			"src='text/back.gif'\n" .
	  			"alt='Back'\n" .
	  			"style='width: 67px; height: 30px;'\n" .
  			"/></a>\n";
    
    } else {
    	
    	echo "&nbsp;";
    	
    }
    
    ?>
    
    </td>
    
    <td style="width: 300px;">
    
		<img 
			src="<?php echo $image_text_filename; ?>" 
			alt="<?php echo $title; ?>" 
			style="
				width: <?php echo $image_text_width; ?>px; 
				height: <?php echo $image_text_height; ?>px;" 
		/>
       
   	</td>

	<td style="width: 200px; text-align: right;">

      <?php
        if ( $next_id != "" ) {
      ?>

          <a href="?id=<?php echo $next_id; ?>">
        
            <img src="text/next.gif" alt="Next" style="width: 73px; height: 30px;" />
          </a>

      <?php
        }
      ?>
        
	  </td>

      </tr>
    </table>
    <a href="<?php echo $index_file; ?>">
    	<img 
    		src="text/<?php echo $index_file_link_image_file; ?>" 
    		alt="Home"  
    	/></a>
  </body>
</html>
