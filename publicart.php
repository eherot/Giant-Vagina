<?php 

$cols = 5;
$pagenum = 2;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

    <title>the art of sydney hardin</title>

    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

    <style type="text/css">
      img {
        border: 1px solid black;
      }
      img.text {
        border: 0px;
      }
    </style>

  </head>

  <body>

    <div id="title" style="margin-top: 52px;">
    </div>
   
 <table class="category"> <?php /* Begin The Artist and Her Model Section */ ?>
      <tr>
        <td style="text-align: center;" colspan="1">
          <img src="text/name.gif" class="text" style="width: 626px; height: 92px;" alt="Sydney Phillips Hardin" />
       	</td>
      </tr>
	  <tr>
        <td>
        
          <?php include "imageblock.php"; ?>
          
		  <p style="text-align: center; margin-top: 100px;">
		  	<a href="index.php">
		  	  <img style="border: 0;" src="text/home.gif" /></a>
		  </p>
        </td>
        
        <!-- Text links... -->
        <td class="text-links" style="padding-top: 0px;">
          <table style="margin-left: auto; margin-right: auto;">
            <tr>
              <td>
                <a href="personalstatement.html">
                  <img src="text/statement.gif" class="text" style="width: 286px; height: 17px;" alt="Personal Statement" />
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a href="cv.pdf">
                  <img src="text/resume.gif" class="text" style="width: 69px; height: 13px;" alt="Resume" />
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a href="press/">
                  <img src="text/press.gif" class="text" style="width: 57px; height: 18px;" alt="Press" />
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a href="mailto:sydney.hardin@gmail.com">
                  <img src="text/contact.gif" class="text" style="width: 79px; height: 15px;" alt="Contact" />
                </a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    
    
  </body>
</html>
