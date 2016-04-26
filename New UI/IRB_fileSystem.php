<?php
	session_start();
	if(!isset($_SESSION['USER_ID'])){
		header("Location:IRB_home.php");
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <title>IRB Portal</title>
    <meta name="description"
          content="The simplest way to create and manage a group email list address, ideal for small groups and clubs. Easy to use Goggle & Yahoo and GMail group email list. 30 day free trial.">
    <meta name="keywords" content="how to create a mailing list, create email group in gmail, create group in gmail, google group email, email group gmail, group emails, how to create a group email, email groups, email group, group email address">
    <meta name="msvalidate.01" content="FF534E21549A07FC92544F7F7A60FCC7" />

    <meta name="google-site-verification" content="GJrthr2CMj1CejyNqcSCQZikatG9wduDA2kCJZEitwQ" />

    <link type="text/css" rel="stylesheet" href="home.css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <link rel="shortcut icon" href="images/ash.jpg">
    
    <link rel="apple-touch-icon" href="images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">    

    <style>
            @font-face {
                font-family: Roboto-Thin;
                src: url(Roboto/Roboto-Thin.ttf);
            }

            #hero-title-two {
                font-family: Roboto-Thin;
                font-size: 245%;
            }

            #hero-title-one {
                font-family: Roboto-Thin;
                font-size: 245%;
            }

            #hero {
              background-position: center center;
              background-size: cover;
              background-image: url("images/white-desktop.jpg");
              height:350%; 
            }

    </style>
</head>
<body itemscope itemtype="http://schema.org/SoftwareApplication">
<link itemprop="applicationCategory" href="http://schema.org/WebApplication"/>
<link itemprop="operatingSystem" href="http://schema.org/WebApplication"/>
<header>
    <nav class="transparent black-text">
        <div class="nav-wrapper container">
            <a href="/" class="brand-logo brand-logo-small"><img id="header-logo" alt="Ashesi Logo" src="images/ash.jpg"/>
                <span style="color:maroon"> <b> Ashesi </b></span> IRB <span>Portal</span></a>
            <meta itemprop="url" content="http://gaggle.email/">
            <meta itemprop="name" content="Gaggle Mail">
            <div id="header-mobile-links" class=" row center hide-on-large-only">
                <div class="col s4">
                    <a href="/about">About</a>
                </div>
                <div class="col s4">
                    <a href="/blog">Blog</a>
                </div>
                <div class="col s4">
                
                <a class="modal-trigger" href="#login-modal">Login</a>
                
                </div>
                <div class="col s12 spacer"></div>
            </div>
            <ul class="right hide-on-med-and-down">
                <li><a href="IRB_dashboard.php">Dashboard</a></li>
                 <li><a href="/blog">File System</a></li>
                <li><a href="/blog">IRB Reviews</a></li>
                <li><a href="IRB_home.html">Logout</a></li>
                
            </ul>
        </div>
    </nav>
</header>
<main>
    <div id="hero">
        <div class="container" id="hero-text-container">
            <div class="row">
                <div class="col s12 center-align">
                    <div id="hero-title" style="margin-top: 3%">
                        <h1 id="hero-title-one" itemprop="description"><span class="bold" style="font-size:80%;">Supporting Documents</span></h1>
						<hr>
						
						
                        <?php

                        include_once ("../FileUpload/upload.php");
                        $obj = new upload();

                        $id= $_SESSION['USER_ID'];

                        if(!$obj-> getFiles($id)){
                            echo "Error";
                        }
                        else{
                            echo "
                            <table class='highlight'>
                            <thead>
                              <tr>
                                  <th data-field='id'>Submission ID</th>
                                  <th data-field='name'>Document</th>
                                  <th data-field='price'>Modify</th>
                              </tr>
                            </thead>
                            <tbody>
                            
                            
                            ";

                            while ($row = $obj ->fetch()){
                                echo "
                                <tr onclick='view({$row['FileID']})'>
                                <td>{$row['FileID']}</td>
                                <td>{$row['FileName']}</td>
                                <td><button> Delete </button></td>
                                </tr>";
                            }
                            echo "</table>";
                        }

                        ?>
                    
                    </div>
						<div style="background-color:Silver; padding: 1% 2% 1% 2%; width: 50%; position:relative; left:30%; border-radius:3%;">
						<h5>  Upload Supporting Documents </h5>
						<p style="font-size: 90%;"> File extensions allowed include '.txt', '.docx', '.xlsx', '.pdf' </p>
						<form action="" method="post" enctype="multipart">
							<input type="file" name="doc">
						</form>
						<br>
						</div>
					
					
                </div>
            </div>

        </div>
    </div>
	
						
   
</main>
<footer class="page-footer">
   
    <div class="footer-copyright">
        <div class="container grey-text">
            © 2016 Copyright
            <span class="right" href="#!">Made in Berekuso</span>
        </div>
    </div>
</footer>


    </div>




    
    <script src="js/home_all-min.js"></script>
    

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-63644770-1', 'auto');
        ga('send', 'pageview');

    </script>

</body>
</html>
