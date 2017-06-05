<?php

    include('../../includes/functions.php');
    require('../../includes/config.php');
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
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="../../styles/css/vendors/font-awesome/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link rel="stylesheet" href="../../styles/css/mystyle.css">
    <link rel="stylesheet" href="../../styles/css/quiz.css">

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

                <div id="box" class="shadow2">
                    <a href="quiz-Form.php" id="startQuiz" class="btn btn-default btn-lg">Start Quiz</a>
                </div>

            </div>
            <footer class="articleFooter">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src='../../js/vendors/modernizr-custom.js'></script>
    <script src="../../js/myscript.js"></script>
    <script>
        $('article').on('click', '#startQuiz',function(event)
        {
            event.preventDefault();// stop hyper link
            $.ajax('quiz-Form-Ajax.php',{
                success : function(response)
                {
                   $('article').find('#box').find('.img-responsive').fadeOut(800,function(){
                    loadJS('../../js/question.js');
                    $('#box').css('background-color','transparent');
                    $('#box').css('border','none');
                    $('article').find('#box').html(response).fadeIn(8000);
                    $('.questions').css('border','none');
                   });
                },
                error: function(request, errorType, errorMessage)
                {
                    let message = '<h1 class="text-center">Connection Failed</h1>';
                    message += '<h3 class="text-center"> Please try again later.</h3>';
                    $('article').find('#box').find('.img-responsive').fadeOut(800,function(){
                        $('article').find('#box').html(message).fadeIn(8000);
                    });
                },
                beforeSend: function()
                {
                    $('article').find('#box > a').hide();
                    let loading ='<div class="img-responsive">';
                    loading += '<img src="../../imgs/spinner.gif">';
                    loading +='</div>';
                    $('article').find('#box').append(loading); // Add spinner to end #box
                }
           }); // End of Ajax
        });

        myAnswer =[];
        $('article').on('click', '#quizForm #submit',function(event)
        {
            event.preventDefault();
            $('.articleBody').fadeOut(700,function()
            {
                let summary = '';
                let noOfCorrectAnswers = 0;
                let noofquestions = correctAnswers.length;

                $('.answers').each(function()// Loop through answers divs
                {
                    $counter = 1;
                    NoOfAnswers = $(this).find('input').length;// Return number possible answer
                    $(this).find('input').each(function() //loop through each input field
                    {
                        if($(this).is(':checked'))// Check if radio box was selected
                        {
                            myAnswer.push($(this).val());// Add My selected answer to the array
                            return false;//Break out of each
                        }
                        if($counter == NoOfAnswers)
                        {
                            myAnswer.push(''); // Add empty string to the array
                            $counter = 0;// reset counter
                            return false; //Break out of each
                        }
                        $counter++;// increment counter
                    });
                });


                for(let i = 0;i < noofquestions; i++)
                {
                    summary +="<h2>Question "+[i+1]+": "+questions[i]+"</h2>";
                    if(myAnswer[i]==correctAnswers[i]) // Check answer selected was right
                    {
                        summary +="<p>Correct, the answer was "+correctAnswers[i]+".</p>";
                        noOfCorrectAnswers++;// increment counter for correct answers
                    }
                    else if(myAnswer[i]== '') //Check no answer was selected
                    {
                        summary +="<p>You did not answer the question .The answer was "+correctAnswers[i]+".</p>";
                    }
                    else //Selected answer was wrong
                    {
                        summary +="<p>"+myAnswer[i]+" is the wrong answer. The answer was "+correctAnswers[i]+".</p>";
                    }
                }


                summary = '<p>You have finished the quiz and got '+noOfCorrectAnswers+' out of '+noofquestions+' questions correct.</p>' + summary;
                summary = '<h1> Quiz Result</h1>'+summary;

                $('.articleBody').html(summary);
                $('.articleBody').fadeIn(800);

                $('.articleBody').append('<a href="quiz.php">Back to Quiz</a>'); // Add Back link
            });
        });
    </script>
    <script src='../../js/Another.js'></script>



</body>
</html>