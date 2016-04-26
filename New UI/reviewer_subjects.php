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
                <li><a href="reviewer_dashboard.php">Dashboard</a></li>
                <li><a href="IRB_home.php">Logout</a></li>
                
            </ul>
        </div>
    </nav>
</header>
<main>
<?php
        include_once("submission.php");
        $obj = new submission();
                               
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
                                <p class="flow-text">Numbers, Types and Recruitment of Subjects</p>
                            </div>
                            <div id="divStatus"></div>
                            <div class="spacer"></div>
                            <div class="spacer"></div>

                             <div class="thin"><span class="bold">A. Identify the numbers and characteristics of subjects (eg. age ranges, sex, ethnic background, health status, disabilities , etc.) It is recommended to provide the breakdown based on your sampling strategy.</span></div> 
                            <div class="row">
                                <div class="col s12 input-field">
                                    <textarea id="subjectCharacteristics" class="materialize-textarea" readonly><?php echo $row['subjectCharacteristics'] ?></textarea>
                                </div>
                            </div>

                            <div class="thin"><span class="bold">B. Special cases. If applicable, explain the rationale for the use of special cases or subjects such as pregnant women, children, prisoners, mentally impaired, institutionalized, or others who are likely to be particulary vulnerable</span></div>
                            <div class="row">
                                <div class="col s12 input-field">
                                    <textarea id="specialClasses" class="materialize-textarea" readonly><?php echo $row['specialClasses'] ?></textarea>
                                    </div>
                            </div>

                            <div class="thin"><span class="bold">C. How are the individual participants to be recruited for this research? Is it clear to the subjects that participation is voluntary and that they may withraw at any time without any negative consequences?</span></div>
                            <div class="row">
                                <div class="col s12 input-field">
                                    <textarea id="recruitment" class="materialize-textarea" readonly><?php echo $row['recruitment'] ?></textarea>
                                </div>
                            </div>

                            <div class="thin"><span class="bold">D. To what extent and how are participants to be informed of research procedures before their participation?</span></div>
                            <div class="row">
                                <div class="col s12 input-field">
                                    <textarea id="partcipnatInfo" class="materialize-textarea" readonly><?php echo $row['partcipnatInfo'] ?></textarea>
                                </div>
                            </div>

                            <div class="thin"><span class="bold">E. How will you classify your research method? (experiment, observation, modelling etc.). Specify all methods you anticipate to use.</span></div>
                             <div class="row">
                                <div class="col s12 input-field">
                                    <textarea id="researchMethod" class="materialize-textarea" readonly><?php echo $row['researchMethod'] ?></textarea>
                                </div>
                            </div>

                            <div class="thin"><span class="bold">F. Specify the data sources you will use for your reserach. (eg. questionnaire, audio recording human resource files, experiment data, etc.)</span></div>
                            <div class="row">
                                <div class="col s12 input-field">
                                    <textarea id="dataSources" class="materialize-textarea" readonly><?php echo $row['dataSources'] ?></textarea>
                                </div>
                            </div>

                            <div class="row center">
                                <button class="btn" onclick="reviewer_subjectsBack(<?php echo $id ?>)">Back</button>
                                <button class="btn" onclick="reviewer_subjectsNext(<?php echo $id ?>)">Next</button>
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
