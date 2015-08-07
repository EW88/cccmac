<?php
    $eventsFile = 'events/events.xml';
    $eventsXml = simplexml_load_file($eventsFile);
    $totalEvents = $eventsXml->event;
    $size = sizeof($totalEvents);
	$numberOfItemsShown = 5;
	$numberOfItemsShown = $size < $numberOfItemsShown ? $size : $numberOfItemsShown;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>CCCMAC | Home</title>
        
        <link rel="stylesheet" type="text/css" href="styles/main.css" />
        <link rel="stylesheet" type="text/css" href="styles/home.css" />
        <link rel="stylesheet" type="text/css" href="styles/css/font-awesome.min.css" />
        
    </head>
    <body>
    	<div id="header">
            <div id="upper-header">
                <div class="container">
                    <div id="logo"><a href="#" title="CCC"><img src="../images/logo.png" alt="Logo" /></a>
                    </div>
                    <div id="nav">
                        <ul>
                            <li class="current"><a href="home.php" title="Home">Home</a></li>
                            <li><a href="events.php" title="Events">Events</a></li>
                            <li><a href="about.php" title="About Us">About Us</a></li>
                            <li><a href="contact.php" title="Contact Us">Contact Us</a></li>
                        </ul>
                    </div>
            	</div>
                <div class="header-shadow"></div>
            </div>
            <div id="lower-header">
                <div class="container">
                    <div id="logo-zh"></div>
                    <div id="language">
                        <a class="en" href="#">English</a> | <a class="zh" href="../zh-CN/home.php">中文</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div id="slide-show">
                <div id="slider">
                    <ul class="slides">
                        <li class="slide">
                        <img src="../images/1.jpg" alt="1" />
                        </li>
                        <li class="slide">
                        <img src="../images/2.jpg" alt="2" />
                        </li>
                        <li class="slide">
                        <img src="../images/3.jpg" alt="3" />
                        </li>
                        <li class="slide">
                        <img src="../images/4.jpg" alt="3" />
                        </li>
                    </ul>
                </div>
            	<!--<i class="fa fa-arrow-left" id="slider-prev"></i>
                <i class="fa fa-arrow-right" id="slider-next"></i>-->
            </div>
            <div class="clear"></div>
            <div id="intro">
            	<div class="container">
                	<p>
                    	Canada China Capital Market Access Corporation (CCCMAC) is a non-profit organization registered under the Canada Not-for-profit Corporations Act. CCCMAC is established and supported by a group of seasoned professionals and service firms in the Canadian and Chinese capital market sectors. The mission of the organization is to promote and facilitate the investment and capital raising activities between the two countries through a series of educational seminars, information sharing, social &amp; networking events, mission trips and themed conferences.
                    </p>
                </div>
            </div>
            <div id="events-ticker">
            	<div class="container">
                    <h3>News</h3>
                    <div id="ticker-container">
                        <i class="fa fa-arrow-up" id="ticker-prev"></i>
                        <ul id="ticker">
						<?php
                            for($i = 0; $i < $numberOfItemsShown; $i++)
                            {
                        ?>
                            <li><span class="date"><?php echo $totalEvents[$i]->date; ?></span><a href="event.php?event=<?php echo $totalEvents[$i]->id ?>"><?php echo $totalEvents[$i]->title; ?></a></li>
                        <?php
                            }
                        ?>
                        </ul>
                        <i class="fa fa-arrow-down" id="ticker-next"></i>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="footer-shadow"></div>
        	<div class="container">
                    <div id="footer-content">
                        <div id="footer-nav">
                            <ul>
                                <li><a href="home.php">Home</a>|</li>
                                <li><a href="events.php">Events</a>|</li>
                                <li><a href="about.html">About Us</a>|</li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                        <div id="footer-social">
                            <ul>
                                <li><span id="twitter" class="icon"><a href="#" title="">Twitter</a></span></li>
                                <li><span id="linkedin" class="icon"><a href="#" title="">Linkedin</a></span></li>
                                <li><span id="wechat" class="icon"><a href="#" title="">WeChat</a></span></li>
                            </ul>
                        </div>
                    </div>
                    <div id="copyright">
                        <p>Copyright &copy; 2015 CCCMAC All Rights Reserved</p>
                    </div>
                </div>
        </div>
        
  		<!-- jQuery -->
  		<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
        
        <!-- Animated Header -->
        <script type="text/javascript" src="../js/cccHeader.js"></script>
        
  		<!-- Slider -->
  		<script type="text/javascript" src="../js/slider.js"></script>
        
        <!-- cie -->
        <script type="text/javascript" src="../js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="../js/jquery.zaccordion.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $("#cie ul").zAccordion({
                    slideWidth: 640,
                    width: 960,
                    height: 200,
                    timeout: 3000,
                    slideClass: "frame",
                    trigger: "mouseover"
                });
            });
        </script>
        
        <!-- News Ticker -->
		<script type="text/javascript" src="../js/jquery.newsTicker.min.js"></script>
        <script type="text/javascript">
		$('a[href*=#]').click(function(e) {
			var href = $.attr(this, 'href');
			if (href != "#") {
				$('html, body').animate({
					scrollTop: $(href).offset().top - 80
				}, 500);
			}
			else {
				$('html, body').animate({
					scrollTop: 0
				}, 500);
			}
			return false;
		});
		var ticker = $('#ticker').newsTicker({
			row_height: 80,
			max_rows: 3,
			duration: 4000,
			prevButton: $('#ticker-prev'),
			nextButton: $('#ticker-next')
		});
		</script>
    </body>
</html>
