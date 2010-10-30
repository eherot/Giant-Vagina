<?php      

$image_filename = "fullsize/" . $image_name . ".jpg";
$image_size_array = GetImageSize($image_filename);

$image_height = $image_size_array[1];
$image_width = $image_size_array[0];

if (!isset($image_text)) {

  $image_text_filename = "text/" . $image_name . ".gif";

} else {

  $image_text_filename = "text/" . $image_text . ".gif";

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
    
    <title><?php echo "the art of sydney hardin: " . $image_title; ?></title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
    <style type="text/css">
      table
    </style>
    
  </head>

  <body style="text-align: center;">
  
    <table style="margin-left: auto; margin-right: auto; margin-top: 40px;">
      <tr>
        <td style="border: 3px ridge; padding: 0px;">

<?php

      echo "<img src=\"" . $image_filename . "\" alt=\"" . $image_title . "\" style=\"width: " . $image_width . "px; height: " . $image_height . "px;\" /></td>"
?>

  </tr>
</table>
<table id="picture-holder">
  <tr>
    <td style="width: 200px; text-align: left;">
    
    <?php
    echo "<a href=\"" . $previous_image . "\">"
    ?>
    
    <img src="text/back.gif" alt="Back" style="width: 67px; height: 30px;" /></a></td>
    <td style="width: 300px;">
    
      <?php
        echo "<img src=\"". $image_text_filename . "\" alt=\"" . $image_title . "\" style=\"width: ". $image_text_width . "px; height: ". $image_text_height . "px;\" />"
       ?>
       
      </td>

      <?php
        if ( $next_image != "" ) {
      ?>

        <td style="width: 200px; text-align: right;">

          <?php
            echo "<a href=\"" . $next_image . "\">"
          ?>
        
            <img src="text/next.gif" alt="Next" style="width: 73px; height: 30px;" />
          </a>
        </td>

      <?php
        }
      ?>

      </tr>
    </table>
    <a href="index.php"><img src="text/home.gif" alt="Home" style="width: 82px; height: 30px;" /></a>
  </body>
</html>
