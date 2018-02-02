<?php
include_once "connection.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>St Marys</title>
<meta name="keywords" content="ocean blue template, free css templates, CSS, HTML" />
<meta name="description" content="Ocean Blue - Free CSS Template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />z
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="script/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:800,
		pauseTime:1600,
		startSlide:1, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.6, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

</head>
<body class="homepage">

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	
        <div id="site_title"><h1><a href="http://www.templatemo.com">St Marys Hostel</a> <span></span></h1></div>
        
        
        
        <div class="cleaner"></div>
    </div>
    
    <div id="templatemo_menu">
        <ul>
            <li><a href="index.php" class="current">Home</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="news.html">News</a></li>
            <li><a href="log.php">Login</a></li>
            <li><a href="Registration.php">Registration</a></li>
        </ul>    	
        <div class="cleaner"></div>
    </div> <!-- end of templatemo_menu -->
    
    <div id="templatemo_middle">
    
    	<div id="intro">
        	<!--<h2>Lorem ipsum dolor sit amet adipiscing</h2>-->
            <p>One of the star attractions of St Marys Host is the excellent hostel facility. The  campus hostel St Marys for and Amala for ladies, are taken care of by dedicated Catholic and Nuns. There is telephonic access to all rooms and 610 Mbps WiFi Connectivity inside the hostel. Affectionate discipline, tasty food at moderate rates and neat rooms with modern sanitation and professional laundry services are the hallmarks of the St Marys hostel..</p>
            <a class="learn_more" href="#"></a>
        </div>
    
        <div id="slider">
            <a href="#"><img src="images/slideshow/c.jpg" alt=""  /></a>
            <a href="#"><img src="images/slideshow/s.jpg" alt=""  /></a>
            <a href="#"><img src="images/slideshow/l.jpg" alt=""  /></a>
            <a href="#"><img src="images/slideshow/i.jpg" alt=""  /></a>
            <a href="#"><img src="images/slideshow/b.jpeg" alt=""  /></a>
        </div>
	</div>
        
    <div id="templatemo_main">
    
    	<div class="col_w900">
        
            <div class="col_allw280 frontpage_box">
	            <img src="images/icon1.jpg" alt="Image" />
                <h2>Nullam  Deque Neque</h2>
                <span class="tagline">Lorem ipsum dolor sit amet</span>
                <p>Nunc pulvinar dictum risus, vitae ornare est volutpat eget. Proin a tempor ipsum. Morbi tempus vehicula massa quis commodo.</p>
                <a class="more" href="#">More</a>
        	</div>
            
            <div class="col_allw280 frontpage_box">
                <img src="images/icon2.jpg" alt="Image" />
                <h2>Sed Aliquam Mauris</h2>
                <span class="tagline">Morbi tincidunt lacinia mauris</span>
                <p>Ut lorem sapien, sodales ut sollicitudin ut, fermentum euismod dolor. Aenean sed felis non sapien consectetur adipiscing eget vitae.</p>
              <a class="more" href="#">More</a>
            </div>
            
            <div class="col_allw280 frontpage_box col_last">
				<img src="images/icon3.jpg" alt="Image" />            
              	<h2>Aliquam Dliquet Sem</h2>
                <span class="tagline">Aenean feugiat fermentum </span>
              	<p>Pellentesque et magna neque accumsan nisi. Vivamus aliquet metus id magna. Sed nisi quam, egestas ac bibendum eu, dictum id enim.</p>
              <a class="more" href="#">More</a>
            </div>
            
        	<div class="cleaner"></div>
            
        </div>
        
        <div class="col_w900 col_w900_last">
        
        	<div class="col_w420 lp_box float_l">

           	  	<h2> Latest Project</h2>
                
              	<img width="400" height="100" src="images/templatemo_image_01.jpg" alt="Latest Project" />
                
                <p><em>Nullam ut neque neque commodo mauris vel mi feugiat interdum.</em></p>
                
                <p><a href="http://www.templatemo.com/page/1" target="_parent">Ocean Blue Template</a> is provided by templatemo.com website. You may edit and use this layout for your personal or commercial websites. Credit goes to <a href="http://www.photovaco.com" target="_blank">Free Photos</a> for all photos used in this template.</p>
              	
                <a class="more" href="#">More</a>
                
            </div>
        
            <div class="col_w420 float_r">
            
            	<h2> Blog Entries</h2>
                
                <div class="lbe_box">
                    <h3><a href="#">Etiam a Dui et Eros Imperdiet Rhoncus</a></h3>
                    <p>Morbi pellentesque, libero vitae fermentum tincidunt, felis libero accumsan erat, sit amet ornare lectus. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                    <p class="date">June 24, 2048</p>
                </div>
                
                <div class="lbe_box">
                    <h3><a href="#">Aenean Quis Nulla ac Nisl Rutrum Ornare</a></h3>
                    <p>Libero accumsan erat, sit amet ornare lectus urna a turpis. Suspendisse libero nibh, luctus ornare elementum sit amet, vulputate et diam.</p>
                    <p class="date">June 18, 2048</p>
                    <div class="cleaner"></div>
                </div>
                
                <a class="more" href="#">More</a>
            </div>
            
            
            
            <div class="cleaner"></div>
		</div>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->
        
</div> <!-- end of wrapper -->

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    	
        Copyright © 2048 <a href="#">Your Company Name</a> - 
        Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
    
    </div> <!-- end of footer wrapper -->
</div> <!-- end of footer -->

</body>
</html>