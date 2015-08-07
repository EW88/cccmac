<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
    $eventsFile = 'events/events.xml';
    $eventsXml = simplexml_load_file($eventsFile);
    $totalEvents = $eventsXml->event;
    $size = sizeof($totalEvents);
	$numberOfItemsPerPage = 5;
	$numberOfPages = $size / $numberOfItemsPerPage;
	$numberOfItemsAtLastPage = $numberOfItemsPerPage;
	if($size % $numberOfItemsPerPage != 0)
	{
		$numberOfPages = intval(++$numberOfPages);
		$numberOfItemsAtLastPage = $size % $numberOfItemsPerPage;
	}
	if($page >= $numberOfPages)
	{
		$page = $numberOfPages;
		$numberOfItemsPerPage = $numberOfItemsAtLastPage;
	}
	$firstEventIndex = ($page - 1) * 5;
	$firstEventFile = 'events/'.$totalEvents[$firstEventIndex]->id.'.xml';
	$firstEventXml = simplexml_load_file($firstEventFile);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>CCCMAC | Events</title>
        
        <link rel="stylesheet" type="text/css" href="styles/main.css" />
        <link rel="stylesheet" type="text/css" href="styles/events.css" />
        
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
                        <a class="en" href="#">English</a> | <a class="zh" href="../zh-CN/events.php?page=<?php echo $page ?>">中文</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div id="events">
            	<div class="container">
                    <div id="event-list">
                        <ul>
                        <?php
                            for($i = $firstEventIndex; $i < $firstEventIndex + $numberOfItemsPerPage; $i++)
                            {
                        ?>
                            <li id="<?php echo $totalEvents[$i]->id ?>" <?php if($i == $firstEventIndex){ ?> class="current" <?php } ?> onclick="location.reload(); location.href='event.php?event=<?php echo $totalEvents[$i]->id ?>'">
                                <span class="date">
                                    <?php
                                        echo $totalEvents[$i]->date;
                                    ?>
                                </span>
                                <span class="title">
                                    <?php
                                        echo $totalEvents[$i]->title;
                                    ?>
                                </span>
                            </li>
                        <?php
                            }
                        ?>
                        </ul>
                        <ol>
                            <?php
                                for($i = 0; $i < $numberOfPages; $i++)
                                {
                            ?>
                            <li <?php if($i == $page-1){ ?> class="current" <?php } ?>><a href="events.php?page=<?php echo $i + 1; ?>"><?php echo $i + 1; ?></a></li>
                            <?php
                                }
                            ?>
                        </ol>
                    </div>
                    <div id="event-preview">
                        <h4>
                            <?php
                                echo $firstEventXml->title;
                            ?>
                        </h4>
                        <p>
                            <?php
                                echo $firstEventXml->body->p[0];
                            ?>
                        </p>
                        <span><a href="event.php?event=<?php echo $firstEventXml->id ?>">Read More</a></span>
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
        
        <!-- Events -->
        <script type="text/javascript" src="../js/events.js"></script>
    </body>
</html>