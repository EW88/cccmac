<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>CCCMAC | Home</title>
        
        <link rel="stylesheet" type="text/css" href="styles/main.css" />
        <link rel="stylesheet" type="text/css" href="styles/form.css" />
        <link rel="stylesheet" type="text/css" href="styles/css/font-awesome.min.css" />
        <link href='http://fonts.googleapis.com/css?family=Cuprum:400,700' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                            <li><a href="myaccount.php" title="My Account">My Account</a></li>
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
            <div id="form" class="container">
                <div id="login" class="subform">
                    <h3>Sign-in</h3>
                    <form class="form" action="login.php" method="post" onsubmit="return checkAll()">
                        <ul>
                            <li class="hide-validation" id="salutationInvalid">
                            </li>
                            <li>
                            <input name="username" id="username" type="text" class="text-box" placeholder="用户名/邮箱" onblur="checkFirstName()" />
                            </li>
                            <li class="hide-validation" id="fnameInvalid">
                            </li>
                            <li>
                            <input name="password" id="password" type="password" class="text-box" placeholder="密码" onblur="checkLastName()" />
                            </li>
                            <li>
                            <input type="submit" value="Login" class="button"/>
                            </li>
                        </ul>
                    </form>
                </div>
                <div id="register" class="subform">
                    <h3>Sign-up</h3>
                    <form class="form" action="register.php" method="post" onsubmit="return checkAll()">
                        <ul>
                            <li class="hide-validation" id="salutationInvalid">
                            </li>
                            <li>
                            <input name="username" id="username" type="text" class="text-box" placeholder="用户名" onblur="checkFirstName()" />
                            </li>
                            <li class="hide-validation" id="salutationInvalid">
                            </li>
                            <li>
                            <input name="password" id="password" type="password" class="text-box" placeholder="密码" onblur="checkFirstName()" />
                            </li>
                            <li class="hide-validation" id="salutationInvalid">
                            </li>
                            <li>
                            <input name="password-confirm" id="password-confirm" type="password" class="text-box" placeholder="密码确认" onblur="checkFirstName()" />
                            </li>
                            <li class="hide-validation" id="salutationInvalid">
                            </li>
                            <li>
                            <input name="email" id="email" type="text" class="text-box" placeholder="邮箱" onblur="checkFirstName()" />
                            </li>
                            <li class="hide-validation" id="salutationInvalid">
                            </li>
                            <li>
                            <input type="submit" value="Register" class="button"/>
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="vertical-separator"></div>
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
        <script type="text/javascript" src="../js/cie.js"></script>
        
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
