/*
Description : Script for show/hide questions
Author : Keith Amoah
*/

$( document ).ready(function()
{

    function nextQuestion() // Hide current question and show next question
    {
    	event.preventDefault();
  		$(this).parent().hide();
  		$(this).parent().next().show();
    }

    function previousQuestion() // Hide current question and show previous question
    {
    	event.preventDefault();
  		$(this).parent().hide();
  		$(this).parent().prev().show();
    }

    //$('.questions').addClass( "shadow" );

    //Need change id name
    $("#submit").before("<input type='submit' name ='prev'  id='lastquestionprev' class='btn btn-default' value='< Previous'>");
    $( "#lastquestionprev").click(previousQuestion);

    noOfDiv =$('div.questions').length; // Count number of divs
    $('div.questions').not('#question1').hide();// Hide all questions except the first
    var  btnrow ="";
    $('div.questions').each(function(i, obj)// i starts at 0
    {
    	i++;
    	$("#question"+(i)).append("<div class='buttons'>");
        if(i == 1)
    	{
            
    	    btnrow = "<input type='submit' name='next' id='question"+i+"next' class='btn btn-default' value='NEXT >'>";
            $("#question"+(i)).append(btnrow);
    		$("#question"+(i)+"next" ).on('click',nextQuestion);
    	}
    	else if(i == noOfDiv)
    	{
    		btnrow = "<input type='submit' name ='prev'  id='question"+i+"prev' class='btn btn-default' value='< Previous'>";
            
            $("#question"+(i)).append(btnrow);
    		$("#question"+(i)+"prev" ).on('click',previousQuestion);
    	}
    	else
    	{
    		btnrow ="<input type='submit' name ='prev'  id='question"+i+"prev' class='btn btn-default' value='< Previous'>";
            btnrow += "<input type='submit' name ='next'  id='question"+i+"next' class='btn btn-default' value='NEXT >'>";
            
            $("#question"+(i)).append(btnrow);
            
    		$( "#question"+(i)+"prev" ).on('click',previousQuestion);
    		$( "#question"+(i)+"next" ).on('click',nextQuestion);
    	}

    });
});