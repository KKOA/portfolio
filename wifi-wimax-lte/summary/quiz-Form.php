<?php
include_once("../../includes/config.php");
require_once("../../includes/quizdb.php");
$title = 'Quiz';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../../styles/css/vendors/bootstrap/app.css">
    <link rel="stylesheet" href="../../styles/css/vendors/font-awesome/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link rel="stylesheet" href="../../styles/css/mystyle.css">
    <link rel="stylesheet" href="../../styles/css/quiz.css">
    <style>
        .questions { display: block;}
    </style>
</head>
<body>
<div class="wrapper">
<?php
    include("../../includes/header.php")
    ?>
    <div class="container">
        <main>
        <h1 class="pageHeader" id="Top">Wi-Fi,WiMAX &amp; LTE : Quiz</h1>
        <ul class="breadcrumb">
            <li>Summary</li>
            <li>Quiz</li>
        </ul>
        <article>
            <div class="articleBody">
              <h1>Quiz</h1>
                <h2>Instructions</h2>
                <p>Use result button to see your results.</p>
                <p> There are no time limits. Scores are not recorded and you may repeat the quiz as many times as you like.</p>

                <p><b>(JavaScript enable user Only)</b><br>
                Only one question will appear at any time.Use next button and previous button to navigate the quiz.</p>
               <div id="box" class="shadow">
                <form action="quiz-result.php" method="post" id="quizForm">
                <?php
                for($qid=0;$qid < count($questions);$qid++)
                {
                    echo '<div  id="question'.($qid+1).'" class="questions">';
                    /*for($j=0;$j < count($questions[$qid]);$j++)
                    {
                        if($j == 0) //Question
                        {
                            $questiondiv = "<div class='question'>";
                            $questiondiv .= "<h2 style='text-align:center;'>Question ".($qid+1)." out of $totalQuestion</h2>";
                            $questiondiv .= "<h3>".$questions[$qid][$j]."</h3>";
                            $questiondiv .= "<input type='hidden' name='question".$qid."_text'  value='".$questions[$qid][$j]."'>";
                            $questiondiv .= "</div>";
                            echo $questiondiv;
                        }
                        elseif($j == 1)
                        {

                            $answerdiv ="<div class='answers'>";
                            for($aid=0;$aid < count($questions[$qid][$j]);$aid++)
                            {
                                $answerdiv .= "<input type='radio' name='question".$qid."_answer'  value='".$questions[$qid][$j][$aid]."'>";
                                $answerdiv .=  $questions[$qid][$j][$aid].'<br>';
                            }
                            $answerdiv .= "</div>";

                            echo  $answerdiv;
                        }
                    }*/
                    $questiondiv = "<div class='question'>";
                    $questiondiv .= "<h2 style='text-align:center;'>Question ".($qid+1)." out of $totalQuestion</h2>";
                    $questiondiv .= "<h3>".$questions[$qid]."</h3>";
                    $questiondiv .= "<input type='hidden' name='question".$qid."_text'  value='".$questions[$qid]."'>";
                    $questiondiv .= "</div>";
                    echo $questiondiv;
                    $NoOfpossibleAnswers = count($possibleAnswers[$qid]);
                    $answerdiv ="<div class='answers'>";
                    for($aid=0;$aid < $NoOfpossibleAnswers;$aid++)
                    {
                    $answerdiv .= "<input type='radio' name='question".$qid."_answer'  value='".$possibleAnswers[$qid][$aid]."'>";
                    $answerdiv .=  $possibleAnswers[$qid][$aid].'<br>';
                    }
                    $answerdiv .= "</div>";

                    echo  $answerdiv;
                    echo'</div>';
                }?>
                <div class="questions" id="check">
                    <div class="question">
                            <h1 class="text-center">Quiz complete</h1>
                    </div>
                    <div class='answers'>

                        Click submit to see your result.<br> If want to review your answer select previous.

                    </div>
                    <input type='submit' name ='submit' id="submit" class='btn btn-default' value='RESULT' >

                </div>
                </form>
                </div>
                <!-- -->
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
    include("../../includes/footer.php");
?>
</div>
    <!--<script type="text/javascript" id="cookieinfo"	src="//cookieinfoscript.com/js/cookieinfo.min.js">-->
   <?php /* Load Fallback for CDN hosted jQuery */?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        if (typeof jQuery == 'undefined') {
            document.write(unescape("%3Cscript src='../../js/vendor/jquery-3.2.1.js' type='text/javascript'%3E%3C/script%3E"));
        }

    </script>
    <?php /* Load Bootstrap Javascript Library (Require JQuery to Load first) */ ?>
    <script src="../../js/vendors/bootstrap.min.js"></script>
    <script src="../../js/myscript.js"></script>
    <script src='../../js/vendors/modernizr-custom.js'></script>
    <script src='../../js/Another.js'></script>
    <script src="../../js/question.js"></script>
</body>
</html>
