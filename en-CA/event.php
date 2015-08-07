<?php
    $eventsFile = 'events/events.xml';
    $eventsXml = simplexml_load_file($eventsFile);
    $totalEvents = $eventsXml->event;
    $id = isset($_GET['event']) ? $_GET['event'] : $totalEvents[0]->id;
            
    $eventFile = 'events/'.$id.'.xml';
    $eventXml = simplexml_load_file($eventFile);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>CCCMAC | <?php echo $eventXml->title ?></title>

        <link rel="stylesheet" type="text/css" href="styles/main.css" />
        <link rel="stylesheet" type="text/css" href="styles/event-gallery.css" />
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
                            <li><a href="home.php" title="Home">Home</a></li>
                            <li class="current"><a href="events.php" title="Events">Events</a></li>
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
                        <a class="en" href="#">English</a> | <a class="zh" href="../zh-CN/event.php?event=<?php echo $id ?>">中文</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div id="event">
                <div class="container">
                    <h3><?php echo $eventXml->title ?></h3>
                    <?php
                        $photoCount = 0;
                        foreach ($eventXml->body->p as $p) {
                            if($p['photo_position'] == 'right'){
                                echo 
                                '<div class="event-photo right">'
                                . '<img src="../images/'.$eventXml->id.'/'.$eventXml->photos->photo[$photoCount]->i.'"/>'
                                . '<span>'.$eventXml->photos->photo[$photoCount]->d.'</span>'
                                . '</div>';
                                $photoCount++;
                                echo '<p class="try">';
                                echo $p;
                            }elseif($p['photo_position'] == 'left'){
                                echo 
                                '<div class="event-photo left">'
                                . '<img src="../images/'.$eventXml->id.'/'.$eventXml->photos->photo[$photoCount]->i.'"/>'
                                . '<span>'.$eventXml->photos->photo[$photoCount]->d.'</span>'
                                . '</div>';
                                $photoCount++;
                                echo '<p class="try">';
                                echo $p;
                            }
                            else{
                                echo '<p>';
                                echo $p;
                            }
                            echo '</p>';
                        }
                    ?>

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
    </body>
</html>