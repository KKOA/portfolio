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
           childSpan = $this.children('span');
           if($dropdownbtnid == $this.attr("id"))
           {
               //Check dropdown menu is open
               if($this.closest("li").hasClass('open')==false)
                {
                  childSpan.removeClass('fa-caret-down');
                  childSpan.addClass('fa-caret-up');
                }
                else
                {
                  childSpan.children('span').removeClass('fa-caret-up');
                  childSpan.children('span').addClass('fa-caret-down');
                }
           }
           else
           {
                //change caret to point down if up.
                if(childSpan.hasClass('fa-caret-up')==true)
                {
                    childSpan.removeClass('fa-caret-up');
                    childSpan.addClass('fa-caret-down');
                }
           }
       });
    }

    function revealToTopLink()
    {
      bottomlink = $("#bottom > a");
      if ($(this).scrollTop() > 80)
        {
            bottomlink.css('visibility','visible');
            bottomlink.fadeIn();
        }
        else
        {
            bottomlink.fadeOut();
            bottomlink.css('visibility','hidden');
        }
    }

    $(".no-js").each(
      function ()
      {
        $(this).switchClass("no-js","js",0);
        // Require JQuery UI
      }
    );

    //Toggle dropmenu caret icon
    $(".dropdown-toggle").on("click",toggleCaret);

    //Hide bottom > a link
    $("#bottom > a").css('visibility','hidden');

    //Only reveal link when scrolldown 80px down
    $(window).scroll(revealToTopLink);


    // Scroll To Top of page
    $("#bottom > a").click(scrolltoTop);

});