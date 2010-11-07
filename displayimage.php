<?php 

$image_id = $_GET["id"];

include 'db.php';

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

if($result = mysql_query($q_cur))
{
	while($row = mysql_fetch_array($result))
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
}

mysql_free_result($result);

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
  
    <table style="margin-left: auto; margin-right: auto;">
    
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
    
    <td">
    
		<img 
			src="<?php echo $image_text_filename; ?>" 
			alt="<?php echo $title; ?>" 
			style="
				width: <?php echo $image_text_width; ?>px; 
				height: <?php echo $image_text_height; ?>px;" 
		/>
       
   	</td>

      </tr>
    </table>