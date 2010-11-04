<?php 

/*
print "image_name: " . $image_name . "\n";
print "image_title: " . $image_title . "\n";
print "previous_image: " . $previous_image . "\n";
print "next_image: " . $next_image . "\n";
 */
if (isset($image_text))
{

    print "insert into image_metadata values (NULL,'" . $image_name . "','" . $image_title . "','" . $image_text . "');";

} else {

    print "insert into image_metadata values (NULL,'" . $image_name . "','" . $image_title . "',NULL);";

}

print "\n";

?>
