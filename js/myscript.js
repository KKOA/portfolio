$(document).ready(function()
{
    function scrolltoTop(event)
    {
      event.stopPropagation();
      $('html,body').animate({scrollTop: 0}, 600);
    }

    function toggleCaret()
    {
      $dropdownbtnid = $(this).attr("id");

       /// Loop link acting as drop down
       $(".nav > li >a.dropdown-toggle").each(function()
       {
           $this = $(this);
           if($dropdownbtnid == $this.attr("id"))
           {

               //Check dropdown menu is open
               if($this.closest("li").hasClass('open')==false)
                {

                    $this.children('span').removeClass('fa-caret-down');
                    $this.children('span').addClass('fa-caret-up');
                }
                else
                {
                   $this.children('span').removeClass('fa-caret-up');
                   $this.children('span').addClass('fa-caret-down');
                }
           }
           else
           {
                //change caret to point down if up.
                if($this.children('span').hasClass('fa-caret-up')==true)
                {
                    $this.children('span').removeClass('fa-caret-up');
                    $this.children('span').addClass('fa-caret-down');
                }
           }
       });
    }

    function revealToTopLink()
    {
      if ($(this).scrollTop() > 80)
        {
            $("#bottom > a").css('visibility','visible');
            $("#bottom > a").fadeIn();
        }
        else
        {
            $("#bottom > a").fadeOut();
            $("#bottom > a").css('visibility','hidden');
        }
    }



    //Toggle dropmenu caret icon
    $(".dropdown-toggle").on("click",toggleCaret);


    //Hide bottom > a link
    $("#bottom > a").css('visibility','hidden');

    //Only reveal link when scrolldown 80px down
    $(window).scroll(revealToTopLink);
    /*$(window).scroll(function() {
        if ($(this).scrollTop() > 80)
        {

            $("#bottom > a").css('visibility','visible');
            $("#bottom > a").fadeIn();

        }
        else
        {

            $("#bottom > a").fadeOut();
            $("#bottom > a").css('visibility','hidden');
        }

    });*/

    // Scroll To Top of page
    $("#bottom > a").click(scrolltoTop);
    //$("#bottom > a").click(function(event)
    //{
        /*event.stopPropagation();
        $('html,body').animate({scrollTop: 0}, 600);*/
    //});
});