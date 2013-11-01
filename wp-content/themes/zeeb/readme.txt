To install Zeeb, unzip the archive and upload the entire zeeb folder to your wp-content/themes directory and activate.

Intro text:

The first thing you'll want to do is update the intro text in the header. You can do this by updating the file toprightmsg.php in the zeeb folder. You can use text, html or php, but don't use anything too wide or deep, as it could mess up the format.

125X125 Ads

I've included an ad template block for four 125X125 blog images. You would place your image and link code for a button into each box. See the file adblocks.php. If you decide to use this, uncomment the php include code on line #9 of sidebar.php:

	<!-- <?php include (TEMPLATEPATH . "/adblocks.php"); ?> -->

Be sure not to use images larger than 125x125, or it may be too side for the sidebar. You can get away with using  about 300 pixels of the space in the sidebar, maybe a bit more.

Customize Zeeb

Zeeb is very easy to customize. The graphics are all very neutral, so changing the background image for the #picture div in the stylesheet, and perhaps a few changes to font color, you can come up with a different look very easily. In the stylesheet, scroll towards the bottom and look for the sections "Backgrounds and Borders", "Font Style" and "Font Sizes". 

Support

If you have any questions or comments, please let me know - either by commenting at <a href="http://rosecitygardens.com">RoseCityGardens.com</a> or by email through the contact link. Or, if I'm logged into live support, you'll see an icon on the front page - you can click on it and talk to me live. I'd love to see what people do with this, so send me a link if you decide to use it. Have fun!