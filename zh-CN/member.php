<?php
    if (!isset($_GET['id'])){
        header('Location: about.php');
    }else{
        $id = $_GET['id'];
        $memberFile = 'members/'.$id.'.xml';
        $memberXml = simplexml_load_file($memberFile);  
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>CCCMAC | <?php echo $memberXml->name ?></title>
        
        <link rel="stylesheet" type="text/css" href="styles/main.css" />
        <link rel="stylesheet" type="text/css" href="styles/fixed-footer.css" />
        <link rel="stylesheet" type="text/css" href="styles/member.css" />
        
    </head>
    <body>
    	<div id="header">
            <div id="upper-header">
                <div class="container">
                    <div id="logo"><a href="#" title="CCC"><img src="../images/logo.png" alt="Logo" /></a>
                    </div>
                    <div id="nav">
                        <ul>
                            <li><a href="home.php" title="Home">主页</a></li>
                            <li><a href="events.php" title="Events">活动</a></li>
                            <li class="current"><a href="about.php" title="About Us">关于我们</a></li>
                            <li><a href="contact.php" title="Contact Us">联系我们</a></li>
                        </ul>
                    </div>
            	</div>
                <div class="header-shadow"></div>
            </div>
            <div id="lower-header">
                <div class="container">
                    <div id="logo-zh"></div>
                    <div id="language">
                        <a class="en" href="../en-CA/member.php?id=<?php echo $id ?>">English</a> | <a class="zh" href="#">中文</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div id="member">
                <div class="container">
                    <div id="photo">
                        <img src="../images/<?php echo $memberXml->photo ?>" />
                    </div>
                    <div id="profile">
                        <h3><?php echo $memberXml->name ?></h3>
                        <?php
                            foreach ($memberXml->desctiption->p as $p) {
                        ?>
                        <p>
                            <?php
                                echo $p;
                            ?>
                        </p>
                        <?php
                            }
                        ?>
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
                                <li><a href="home.php">主页</a>|</li>
                                <li><a href="events.php">活动</a>|</li>
                                <li><a href="about.html">关于我们</a>|</li>
                                <li><a href="contact.html">联系我们</a></li>
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