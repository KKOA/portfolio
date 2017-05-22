<?php 
include_once("../../includes/config.php");
?>

<?php
/*
Description : Retrieve list of question, possible answer and correct answer from database
Author : Keith Amoah
Date : 03/11/2016
*/

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

?>

<form action="quiz_result.php" method="post" id="quizForm">
<?php
for($qid=0;$qid < count($questions);$qid++)
{
    echo '<div  id="question'.($qid+1).'" class="questions">';
    for($j=0;$j < count($questions[$qid]);$j++)
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
     }
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
<script src="../../js/question.js"></script>
               