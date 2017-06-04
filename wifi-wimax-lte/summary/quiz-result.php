<?php
include_once("../../includes/config.php");
$title = "Quiz";
$author;
$date;
$keword;
$summary ='';
$NoOfcorrectAnswers =0;
$totalQuestion = 0;
require_once("../../includes/quizdb.php");

$summary ='';
for ($i=0; $i <$totalQuestion;$i++)// Rename $i variable
{

	$msg='';
    if(!isset($_POST['question'.$i.'_text']))
    {
            header( 'Location: '.SUMMARYFLD.'/quiz.php' ) ;
            break;
    }
    else
    {

        $msg = "<h3>Question ".($i+1)." : ".$_POST['question'.$i.'_text'].'</h3>';

        //change in code
        if($questions[$i] == $_POST['question'.$i.'_text'])// Match questions
        {
            if(isset($_POST['question'.$i.'_answer']) AND $correctAnswers[$i] == $_POST['question'.$i.'_answer'])// check was answered and answer was correct
            {
                $msg .="<p><b>Correct</b> - The answer was {$correctAnswers[$i]}.</p>";
                $NoOfcorrectAnswers++;
            }
            else
            {
                if(!isset($_POST['question'.$i.'_answer']))// Check question was not answered
                {
                        $msg .="<p><b>You did not answer the question .</b>";
                }
                else
                {
                        $msg .='<p>'.$_POST['question'.$i.'_answer']." is <b>wrong answer</b>.";
                }
                $msg .="The answer was {$correctAnswers[$i]}.</p>";
            }
        }
        //end of change
        $msg .= '</p>';
        $summary .= $msg;
    }
}

$title = 'Quiz Result';
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
    <link rel="stylesheet" href="../../styles/css/vendors/bootstrap/app.css">
    <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="../../styles/css/vendors/font-awesome/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link rel="stylesheet" href="../../styles/css/mystyle.css">

</head>
<body>
<div class="wrapper">
<?php
    include("../../includes/header.php")
    ?>
    <div class="container">
        <main>
        <h1 class="pageHeader" id="Top">Wi-Fi,WiMAX &amp; LTE : Quiz Result</h1>
        <ul class="breadcrumb">
            <li>Summary</li>
            <li>Quiz</li>
        </ul>
        <article>
            <div class="articleBody">
                <h1>Quiz Result</h1>

                <p> You have finished the quiz and got <b><?=$NoOfcorrectAnswers;?></b> out of <b><?=$totalQuestion?></b> questions correct.</p>
                    <h2>Result Breakdown</h2>
                <div id="x">
                    <?=$summary ?>
                </div>
                <p><a href="quiz.php">Back to Quiz</a></p>

            </div>
            <footer class="articleFooter" style="padding:10px 0;">
                <p>Created by <a href="#">Keith Amoah</a>, May 2011</p>
            </footer>

        </article>
        <div id="bottom" class="text-center">
            <a href="#Top" title="Navigate to top of the current page">
                <span class="fa fa-arrow-circle-up"></span>To the Top <span class="fa fa-arrow-circle-up"></span>
            </a>
        </div>
        </main>
    </div>
<?php
    include("../../includes/footer.php");
?>
   </div>
    <!--<script type="text/javascript" id="cookieinfo"	src="//cookieinfoscript.com/js/cookieinfo.min.js">-->
   <?php /* Load Fallback for CDN hosted jQuery */?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        if (typeof jQuery == 'undefined') {
            document.write(unescape("%3Cscript src='../../js/vendors/jquery-3.2.1.js' type='text/javascript'%3E%3C/script%3E"));
        }

    </script>
    <?php /* Load Bootstrap Javascript Library (Require JQuery to Load first) */ ?>
    <!--<script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>-->
    <script src="../../js/vendors/bootstrap.min.js"></script>
    <script src="../../js/myscript.js"></script>
    <script src='../../js/vendors/modernizr-custom.js'></script>

</body>
</html>