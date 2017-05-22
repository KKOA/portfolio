<?php

    include('../includes/functions.php');
    require('../includes/config.php');
    $title = 'E-Learning Home';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">-->
    <link rel="stylesheet" href="../styles/css/vendors/bootstrap/app.css">
    <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="../styles/css/vendors/font-awesome/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link rel="stylesheet" href="../styles/css/mystyleV4.css">
    
</head>
<body>
<div class="wrapper">
<?php
    include("../includes/header.php")
    ?>
    <div class="container">
        <main>
        <h1 class="pageHeader" id="Top">Wi-Fi,WiMAX &amp; LTE : Homepage</h1>
        <ul class="breadcrumb">
            <li>Homepage</li>
        </ul>
        <article>
            <div class="articleBody">
                <h1>Welcome</h1>
                <h2> Introduction Video </h2>
                <div class="row">
                    <div class="col-sm-6 col-md-5">
                        <video controls >
                            <source src="../video/wifi-wimax-lte/Take2(compressed).mp4" type="video/mp4">
                            <source src="../video/wifi-wimax-lte/Take2(compressed).webm4" type="video/webm4">
                            <source src="../video/wifi-wimax-lte/Take2(compressed).ogv" type="video/ogg">
                        </video>
                        <p><strong>Alternatively download video in following formats: <!--Download video:--></strong></p>
                        <p class="download">
                            <a href="../video/wifi-wimax-lte/Take2(compressed).mp4" class="videoLink" download>MP4 format</a>
                            <a href="../video/wifi-wimax-lte/Take2(compressed).ogv" class="videoLink" download>Ogg format</a>
                            <a href="../video/wifi-wimax-lte/Take2(compressed).webm" class="videoLink" download>WebM format</a>
                       </p>
                    </div>
                    <div class="transcript col-sm-6 col-md-7">
                        
                        <p>
                            My name is Keith Amoah.I graduated from Bournemouth University with a BSc (Hons) in Multimedia Communication Systems.
                        </p>
                        <p>
                            Welcome to  my Wi-Fi, WiMAX and Long-Term Evolution e-Learning Aid.
                        </p>
                        <p>
                            I have  broken these subjects into 5 Modules:
                        </p>
                        <ol id="topics">
                            <li>
                                <a href="#" title="View Principles of Digital communications">
                                    Principles of Digital communications
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Wi-Fi">Wi-Fi</a>
                            </li>
                            <li>
                                <a href ="#" title="View WiMAX">WiMAX</a>
                            </li>
                            <li>
                                <a href ="#" title=" View LTE">Long-Term Evolution</a>
                            </li>
                            <li>
                                <a href ="#" title="View Comparison">Conclusion and Comparison</a>
                            </li>
                        </ol>
                        <p>
                           If you are a novice, I would recommend that you go through the subject matter in the sequence mentioned above.
                        </p>
                        <p>If you are  an expert, you may proceed to the section you are interested in.</p>
                        <p>
                            Not sure?  Why not try the
                            <a href="<?= SUMMARYFLD; ?>/quiz.php" title="View online quiz">online quiz?</a>
                        </p>
                        <p>I have also published the project brief and
                            <a href="#" title="View reports">reports</a>
                            on these subjects online. These came  together to make up my dissertation.
                        </p>
                        <p>
                            Finally, I  welcome feedback on the e-learning guide.&nbsp;  Share with me which features you would like to see in the next release. Please  use the
                            <a href="#" title="contact us">contact page</a>
                            for this.
                        </p>
                        <p>Have fun  with the e-learning tool and learn a lot!</p>

                    </div>
                </div>
                <?php
                    $note  = '<p>Your browser must have the following :</p>';
                    $note .='<ul><li> JavaScript enabled</li>';
                    $note .='<li>Flash installed and enabled</li></ul>';
                    $note .='<p>Without these features you will be unable to interact with certain aspects of the pages.</p>';
                    echo createNote($note);
                
                    
                    
                ?> 
                  
            </div>
            <footer class="articleFooter" style="padding:10px 0;">
                <p>Created by <a href="#">Keith Amoah</a>, May 2011</p> 
            </footer> 
            
        </article>
        <div id="bottom" class="text-center">
            <a href="#Top" title="Navigate to top of the current page">
                <span class="fa fa-arrow-circle-up"></span> To the Top <span class="fa fa-arrow-circle-up"></span>
            </a>
        </div>
        </main>
    </div>
<?php
    include("../includes/footer.php");
?>
   </div>
    <!--<script type="text/javascript" id="cookieinfo"	src="//cookieinfoscript.com/js/cookieinfo.min.js">-->
   <?php /* Load Fallback for CDN hosted jQuery */?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        if (typeof jQuery == 'undefined') {
            document.write(unescape("%3Cscript src='../js/vendor/jquery-3.2.1.js' type='text/javascript'%3E%3C/script%3E"));
        }

    </script>
    <?php /* Load Bootstrap Javascript Library (Require JQuery to Load first) */ ?>
    <!--<script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>-->
    <script src="../js/vendors/bootstrap.min.js"></script>
    <script src="../js/myscriptV2.js"></script>
    <script src='../js/vendors/modernizr-custom.js'></script>
    <script src='../js/Another.js'></script>
    
    
</body>
</html>