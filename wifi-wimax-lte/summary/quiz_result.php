<?php
include_once("../../includes/config.php");
$title = "Quiz"; 
$author;
$date;
$keword;
$summary ='';
$correctAnswers =0;
$totalQuestion = 0;

//Declare $question array
$questions =[];

$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM quiz ORDER BY question_Id";

if ($result=mysqli_query($conn,$sql))
{

  while ($row=mysqli_fetch_row($result))// Fetch one and one row
  {
      $questions [] = array($row[1],explode(",",$row[2]),$row[3]);// Assign to global array
  }

  mysqli_free_result($result);// Free result set
}

mysqli_close($conn);// Close Database Connection

//Number of Questions
$totalQuestion = count($questions);


$summary ='';
for ($i=0; $i <$totalQuestion;$i++)// Rename $i variable
{

		$msg='';
		$msg = "<h3>Question ".($i+1)." : ".$_POST['question'.$i.'_text'].'</h3>';

	for($j=0; $j <$totalQuestion; $j++)// Rename $j variable
	{

			if($questions[$j][0] == $_POST['question'.$i.'_text'])// Match questions
			{
					if(isset($_POST['question'.$i.'_answer']) AND $questions[$j][2] == $_POST['question'.$i.'_answer'])// check was answered and answer was correct
					{
						$msg .="<p><b>Correct</b> - The answer was {$questions[$j][2]}.</p>";
						$correctAnswers++;
					}
					else // answer was wrong
					{
						if(!isset($_POST['question'.$i.'_answer']))// Check question was not answered
						{
								$msg .="<p><b>You did not answer the question .</b>";
						}
						else
						{
								$msg .='<p>'.$_POST['question'.$i.'_answer']." is <b>wrong answer</b>.";
						}
						$msg .="The answer was {$questions[$j][2]}.</p>";
					}
			}
	}

	$msg .= '</p>';
	$summary .= $msg;
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
    <link rel="stylesheet" href="../../stylesheets/vendor/app.css">
    <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="../../stylesheets/vendor/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link rel="stylesheet" href="../../stylesheets/mystyleV4.css">
    
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
                
                <p> You have finished the quiz and got <b><?=$correctAnswers;?></b> out of <b><?=$totalQuestion?></b> questions correct.</p>
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
            document.write(unescape("%3Cscript src='js/vendor/jquery-3.2.1.js' type='text/javascript'%3E%3C/script%3E"));
        }

    </script>
    <?php /* Load Bootstrap Javascript Library (Require JQuery to Load first) */ ?>
    <!--<script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>-->
    <script src="../../js/vendor/bootstrap.min.js"></script>
    <script src="../../js/myscriptV2.js"></script>
    <script src='../../js/vendor/modernizr-custom.js'></script>
    
</body>
</html>