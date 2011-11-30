<?php 

$cols = 9;
$pagenum = 1;

$page_title="the art of sydney hardin";

include "head.php";
 
?>

  <body>

    <div id="title" style="margin-top: 52px;">
    </div>
   
 <table class="category"> <?php /* Begin The Artist and Her Model Section */ ?>
      <tr>
        <td style="text-align: center;" colspan="1">
          <img 
          	src="text/name.gif" 
          	class="text" 
          	style="width: 626px; height: 92px;" 
          	alt="Sydney Phillips Hardin" 
          />
       </td>
      </tr>
	<tr>
        <td>
          <?php include "imageblock.php"; ?>
        </td>
        
        <!-- Text links... -->
        <td class="text-links" style="padding-top: 0px;">
          <table style="margin-left: auto; margin-right: auto;">
            <tr>
              <td>
                <a class="fancy_image" href="personalstatement.html">
                  <img 
                  	src="text/statement.gif" 
                  	class="text" 
                  	style="width: 286px; height: 17px;" 
                  	alt="Personal Statement" 
                  />
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a href="cv.pdf">
                  <img 
                  	src="text/resume.gif" 
                  	class="text" 
                  	style="width: 69px; height: 13px;" 
                  	alt="Resume" 
                  />
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a href="publicart.php">
                  <img 
                  	src="text/publicartcommissions.gif" 
                  	class="text" 
                  	style="width: 261px; height: 22px;" 
                  	alt="Public Art + Commissions" 
                  />
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a class="fancy_page" href="press/">
                  <img 
                  	src="text/press.gif" 
                  	class="text" 
                  	style="width: 57px; height: 18px;" 
                  	alt="Press" 
                  />
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <a href="mailto:sydney.hardin@gmail.com">
                  <img 
                  	src="text/contact.gif" 
                  	class="text" 
                  	style="width: 79px; height: 15px;" 
                  	alt="Contact" 
                  />
                </a>
              </td>
            </tr>
            <tr>
              <td>
								<a href="http://www.facebook.com/pages/Sydney-Phillips-Hardin/28237807133">
									<img
										style="border: 0; width: 25px; height: 25px; margin-right: 5px;"
										alt="FACEBOOK"
										src="facebook-icon.png"
									/></a><a href="http://www.flickr.com/photos/pensivewombat/"><img
										style="border: 0; width: 25px; height: 25px;"
										alt="flickr"
										src="flickr_icon.png"
									/>
								</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    
    <script type="text/javascript">

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-27352681-1']);
			_gaq.push(['_trackPageview']);
		
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		
		</script>
    
    
  </body>
</html>
