<?php
include_once("../../includes/config.php");
require_once("../../includes/quizdb.php");
?>


<form action="quiz-result.php" method="post" id="quizForm">
<?php
for($qid=0;$qid < count($questions);$qid++)
{
    echo '<div  id="question'.($qid+1).'" class="questions">';

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
    <div class="buttons">
      <input type='submit' name ='submit' id="submit" class='btn btn-default' value='RESULT' >
    </div>
</div>
</form>
<script type="text/javascript">
    var questions = <?php echo json_encode($questions); ?>;
    var correctAnswers = <?php echo json_encode($correctAnswers); ?>;
</script>
