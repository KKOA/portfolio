<?php

/*
Description : Retrieve list of question, possible answer and correct answer from database
Author : Keith Amoah
Date : 03/11/2016
*/

//Declare $question array
$questions =[];
$possibleAnswers = [];
$correctAnswers = [];

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
      //$questions [] = array($row[1],explode(",",$row[2]),$row[3]);// Assign to global array
      $questions [] = $row[1];
      $possibleAnswers[] = explode(",",$row[2]);
      $correctAnswers[] = $row[3];
  }

  mysqli_free_result($result);// Free result set
}

mysqli_close($conn);// Close Database Connection

//Number of Questions
$totalQuestion = count($questions);
