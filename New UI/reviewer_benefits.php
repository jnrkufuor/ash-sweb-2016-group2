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
            <a href="/" class="brand-logo brand-logo-small"><img id="header-logo" alt="Gaggle Mail Logo" src="images/logo_22x22@2x.png"/>
                Ashesi IRB <span>Portal</span></a>
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

<?php
        include_once("submission.php");
        $obj = new submission();

        $id ="";

        if(isset($_REQUEST['id'])){
            $id = $_REQUEST['id'];
        }

        $r = $obj -> getSubmissionByCode($id);
                                    
        if(!$r){
            echo "Error getting the user to edit";
            exit();
        }
        else{
            $row = $obj ->fetch();
        }

        ?>

    <div class="row" id="create-row">

            <span id="create" class="scrollspy"></span>
           
            <div class="spacer"></div>
            <div class="row">
                <div class="section center">
                    <h3 class="thin">IRB Application Review</h3>
                    
                    <div class="spacer"></div>
 

                    <div class="create-list-login-panel center" style="max-width: 900px">
                        <div>
                            <input class="new-list-name-hidden" type="hidden" name="new-list-name">
                            <div class="center">
                                <p class="flow-text">Describe Any Anticipated Benefits To Subjects From Participation In This Research</p>
                            </div>
                             <div id="divStatus"></div>
                            <div class="spacer"></div>
                            
                            <div class="row">
                                
                                <div class="spacer"></div>
                                <div class="col s12 input-field">
                                    <textarea id="participantConpensation" class="materialize-textarea"><?php echo $row['participantConpensation'] ?></textarea>
                                    <label id="participantConpensation1" for="new-your-name">A. Will participants / subjects / respondents be compensated or rewarded in any way?</label>
                                </div>
                            </div>
                             <div class="row">
                                
                                <div class="spacer"></div>
                                <div class="col s12 input-field">
                                    <textarea id="participantBenefits" class="materialize-textarea"><?php echo $row['participantBenefits'] ?></textarea>
                                    <label id="participantBenefits1" for="new-your-name">B. What intrinsic benefit will participants / subjects / respondents receive?</label>
                                </div>
                            </div>
                        
                            <div class="row center">
                                
                                <button class="btn" onclick="benefitsBack(<?php echo $id ?>)">Back</button>
                                <button class="btn" onclick="benefitsSave(<?php echo $id ?>)">Save As Draft</button>
                                <button class="btn" onclick="benefitsSend(<?php echo $id ?>)">Submit</button>

                                
                            </div>
                            

                        </div>
                    </div>
               
                </div>
            </div>
            
            
        </div>

    
    

</main>
<footer class="page-footer">
    <div class="page-footer-icon">
        <div>
            <a href="/"><img alt="Gaggle Mail footer logo" src="images/logo_circle48x48@2x.png" ></a>
        </div>
    </div>
    <div class="container row">
        <div class="col s12 m6">
            <div>
                <a href="/about">About</a>
            </div>
        </div>
        <div class="col s12 m6">
            <div>
                <a href="mailto:help@gaggle.email">Contact</a>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container grey-text">
            © 2016 Copyright
            <span class="right" href="#!">Made in London</span>
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
