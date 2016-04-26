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

    <link rel="shortcut icon" href="logo_32x32@2x.png">
    
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
            <a href="admin_dashboard.php" class="brand-logo brand-logo-small"><img id="header-logo" alt="Gaggle Mail Logo" src="images/logo_22x22@2x.png"/>
                Ashesi IRB <span>Portal</span></a>
            <meta itemprop="url" content="http://gaggle.email/">
            <meta itemprop="name" content="Gaggle Mail">
            <div id="header-mobile-links" class=" row center hide-on-large-only">
                
                <div class="col s4">
                    <a href="/blog">Blog</a>
                </div>
                <div class="col s4">
                
                <a class="modal-trigger" href="#login-modal">Login</a>
                
                </div>
                <div class="col s12 spacer"></div>
            </div>
            <ul class="right hide-on-med-and-down">
                <li><a href="" style="color:#AD1E26;"> <?php echo $_SESSION['FIRSTNAME'];?> </a></li>
                <li><a href="admin_dashboard.php?purpose=user">User System</a></li>
                <li><a href="admin_dashboard.php?purpose=lec">Reviewers</a></li>
				<li><a href="/blog">Submissions</a></li>
                <li><a href="logout.php">Logout</a></li>
                
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
                        <h1 id="hero-title-one" itemprop="description"><span class="bold">Admin Page</span></h1>
                    
                       
<?php
                            if (isset($_REQUEST['success'])) {
                                if ($_REQUEST['success'] == 'false') {
                                    echo '<script> window.alert("Successful")</script>';
                                }
                            }

                            include_once("../Login/users.php");

                            if (isset($_REQUEST['purpose']) && $_REQUEST['purpose'] == "user") {

                                $obj = new users();
                                if (!$obj->getUser()) {
                                    echo "Error getting Users";
                                }
                                echo" <table  id='tableUsers' class ='highlight' >
                                      <tr id='hd'>
                                      <th>User ID </th>
                                      <th>Firstname </th>
                                      <th>Lastname </th>
                                      <th>Reviewers </th>
                                      <th>Email </th>
                                      <th>Phone </th>
                                      <th>Fax </th>
                                      </tr>";
									  
							    $count =0;
                                while ($row = $obj->fetch
()) {
                                    echo" <tr id='r1'class=$count>"
                                    . "<td>{$row['USER_ID']}</td>"
                                    . "<td>{$row['FIRSTNAME']}</td>"
                                    . "<td>{$row['LASTNAME']}</td>"
                                    . " <td>{$row['CO_RESEARCHER']}</td>"
                                    . "<td>{$row['EMAIL']}</td> "
                                    . "<td>{$row['PHONE']}</td>"
                                    . "<td>{$row['FAX']}</td>"
                                    . "<td style='color:#AD1E26; cursor: pointer;' onclick='deleteUser({$row['USER_ID']},this)' id='tblTd'> Delete </td> "
                                    . "</tr>";
                                }
                                echo "</table>";
								$count=$count+1;
                            } else if (isset($_REQUEST['purpose']) && $_REQUEST['purpose'] == "lec") {
                                $lec = new users();
                                if (!$lec->getLec()) {
                                    echo "Error getting Lecturers";
                                }
                                echo" <table  style='align=center;' id='tableLec' class ='highlight'>
                                    <tr id='hd'> 
                                    <th>Reviewer ID </th>
                                    <th>Type</th>
									 <th>Firstname</th>
									  <th>Lastname</th>
                                    </tr>";
                                while ($tbl = $lec->fetch()) {
                                    echo" <tr id='r1'>"
                                    . "<td>{$tbl['RID']}</td>"
                                    . "<td>{$tbl['TYPE']}</td>"
									."<td>{$tbl['FIRSTNAME']}</td>"
									."<td>{$tbl['LASTNAME']}</td>";
									if($tbl['TYPE']=="Reviewer")
                                          echo "<td  style='color:#AD1E26; cursor: pointer;'onclick='deleteLec({$tbl['RID']},this)' id='tblTd'> Delete </td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            } else {
                                echo "<h3> Administrative Access to All Users,Submissions and Reviewers </h3>";
                            }
                            ?> 
        
    
                    

                    </div>
                </div>
            </div>

            <div class="row">
       


</a>
                       
                    </div>
              
            </div>
        </div>
    </div>
   
</main>
<footer class="page-footer" style="margin-top: 0px">
    <div class="page-footer-icon">
        <div>
            <a href="/"><img alt="Gaggle Mail footer logo" src="images/logo_circle48x48@2x.png" ></a>
        </div>
    </div>
    
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
