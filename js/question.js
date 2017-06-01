/*
Description : Script for show/hide questions
Author : Keith Amoah
*/

$( document ).ready(function()
{

    function nextQuestion() // Hide current question and show next question
    {
    	event.preventDefault();
  		//console.log($(this).parent());
        //$(this).parent().hide();
        $(this).parent().parent().hide();
  		//$(this).parent().next().show();
        $(this).parent().parent().next().show();
        //console.log()
    }

    function previousQuestion() // Hide current question and show previous question
    {
    	event.preventDefault();
  		//$(this).parent().hide();
  		$(this).parent().parent().hide();
        //$(this).parent().prev().show();
        $(this).parent().parent().prev().show();
    }

    //$('.questions').addClass( "shadow" );

    rightarrow = '<i class="glyphicon glyphicon-arrow-right"></i>';
    leftarrow = '<i class="glyphicon glyphicon-arrow-left"></i>';

    //Need change id name
    //$("#submit").before("<input type='submit' name ='prev'  id='lastquestionprev' class='btn btn-default' value='< Previous'>");
    $("#submit").before('<button type="button"              id="lastquestionprev" class="btn btn-default">'+leftarrow+' Previous </button>');
    $( "#lastquestionprev").click(previousQuestion);



    noOfDiv =$('div.questions').length; // Count number of divs
    //$('#question1').show();
    $('#question1').fadeIn( 1600 );
    $('div.questions').not('#question1').hide();// Hide all questions except the first
    var  btnrow ="";




    $('div.questions').each(function(i, obj)// i starts at 0
    {
    	i++;
    	$("#question"+(i)).append("<div class='buttons'>");

        if(i == 1)
    	{

    	    //btnrow = "<input type='submit' name='next' id='question"+i+"next' class='btn btn-default' value='NEXT >'>";
            btnrow =
            '<button type="button" id="question'+i+'next" class ="btn btn-default">Next '+rightarrow+'</button>';

            //$("#question"+(i)).append(btnrow);
    		$("#question"+(i)+ " > .buttons").append(btnrow);
            //console.log("#question"+(i)+ " > .buttons");
            $("#question"+(i)+"next" ).on('click',nextQuestion);



    	}
    	else if(i == noOfDiv)
    	{
    		//btnrow = "<input type='submit' name ='prev'  id='question"+i+"prev' class='btn btn-default' value='< Previous'>";
            btnrow =
            '<button type="button" id="question'+i+'prev" class ="btn btn-default">'+leftarrow+' Previous </button>';

            //$("#question"+(i)).append(btnrow);
    		$("#question"+(i)+ " > .buttons").append(btnrow);
            $("#question"+(i)+"prev" ).on('click',previousQuestion);
    	}
    	else
    	{
    		/*btnrow ="<input type='submit' name ='prev'  id='question"+i+"prev' class='btn btn-default' value='< Previous'>";
            btnrow += "<input type='submit' name ='next'  id='question"+i+"next' class='btn btn-default' value='NEXT >'>";
            */


            btnrow =
            '<button type="button" id="question'+i+'prev" class ="btn btn-default">'+leftarrow+' Previous </button>';
            btnrow +=
            '<button type="button" id="question'+i+'next" class ="btn btn-default">Next '+rightarrow+'</button>';

            //$("#question"+(i)).append(btnrow);
            $("#question"+(i)+ " > .buttons").append(btnrow);

    		$( "#question"+(i)+"prev" ).on('click',previousQuestion);
    		$( "#question"+(i)+"next" ).on('click',nextQuestion);
    	}

    });
});