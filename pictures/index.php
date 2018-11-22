<?php include("../include/header.php"); ?>

<h1>Class of 1974 Pictures</h1>

<style type="text/css">
	@import "css/e2.css";
	img {
		border: none;
	}
</style>

<?php
	require_once "config.php";
	require_once "getfolders.php";
?>

<script type="text/javascript" src="js/mootools.v1.11.js"></script>
<script type="text/javascript">
	var transspeed = <?php echo $transitionspeed; ?>;
	var fadespeed = <?php echo $fadespeed; ?>;
</script>
<script type="text/javascript" src="js/e2photo.js"></script>
<script type="text/javascript" src="js/styleswitcher.js"></script>
<script type="text/JavaScript">	
<?php getImages($gallerypath, 'tempgallery'); ?>
var firstimagewidth=currentwidth;
var firstimageheight=currentheight;
</script>
<script type="text/javascript" src="js/e2photo2.js"></script>
<script type="text/javascript">

</script>

<div>

<div class="e2_photo_gallery">
  <div class="hd"><div class="c"></div></div>
 <div class="bd">
  <div class="c">
   <div class="s">

    <!-- Gallery -->

		  <div id="gallery" align="center">
		  <!--Main Image Here-->
		  <div id="main_image_wrapper">
			
			<div id="iptc_btn"></a></div>
			  <?php getfirstimage($gallerypath, "tempgallery"); ?>
			 <div id="pn_overlay">
				<a href='javascript:previmage(current_imgid);' id='prev' class=".toolTip" tooltitle="Previous Image" ></a>
				<a href='javascript:nextimage(current_imgid);' id='next' tooltitle="Next Image"></a>			 </div>
		  </div>
		  <div align="center" class="spacing"> </div>
		  <!--End Main Image-->
		  <div id="thumbdisplay">
			  <div align="center" id="photocount"> <script type="text/javascript">document.write("1 of "+tempgallery.length+" Photos");</script> </div>
			  <div id="thumbtoggler">
			  	<img src='rsrc/info_btn.gif' onclick='loadinfo();' border="0" class="toolTips" title="Show IPTC Info::Click to Display IPTC Info" alt="Show IPTC Info" /> <a href="javascript:thumbs();" ><img src="rsrc/thumbgallery.gif" border="0" class="toolTips" title="Toggle Thumbnails::Click to Toggle Thumbnails" alt="Toggle Thumbnails" /></a>
			  </div>
			  <div class="clear"></div>
		  </div>
		  <div align="center" class="spacing"> </div>
		  <div id="thumbhide">
		   <div id="thumbbox">
			<div id="thumb_container">
			  <div id="thumbgall">
				<div id="thumbs">
				  <div id="widthbox"><?php getthumbnailimages($gallerypath, 'tempgallery', $thumbpath); ?></div>
				</div>
			  </div>
			</div>
			<div id="back">
			  <script type="text/javascript">if(thumbnailnum>maxthumbvisible){document.write("<div id='leftmore'><ul><li><a href=\"javascript:checkbutton(addposition('minus'));movethumbs('plus');\"><img src='rsrc/buttonblank.gif' width='15' height='115' border='0' /></a></li></ul></div>");}</script>
			</div>
			<div id="more">
			  <script type="text/javascript">if(thumbnailnum>maxthumbvisible){document.write("<div id='rightmore'><ul><li><a href=\"javascript:checkbutton(addposition('plus'));movethumbs('minus');\"><img src='rsrc/buttonblank.gif' width='15' height='115' border='0' /></a></li></ul></div>");}</script>
			</div>
			</div>
		  </div>
			<div align="center" class="spacing"> </div>
			<div id="imgtitle"></div>	
		</div>

    <!-- end Gallery -->

   </div>
  </div>
 </div>
 <div class="ft"><div class="c"></div></div>
	<div id="e2link"><a href="http://www.e2interactive.com/e2_photo_gallery/">Photo Gallery by: e2interactive</a></div>
</div>
</div>

<?php include("../include/footer.php"); ?>