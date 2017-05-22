     $(document).ready(function()
    {
        active();
    });


    function active()
    {
        var currentUrl = window.location.pathname;
        console.log(currentUrl);
       /* $('.nav > li').each(function(i)
        {
            $this = $(this);
            if($this.children('.dropdown-menu').length == 1)
            {
               console.log('Yes'); 
            }
            else
            {
                console.log($this.children('a').attr('href'));
            }
            console.log( ($this.children('.dropdown-menu').length == 1));
        }
        );*/

        //Remove href attributes from anchor tags with sibling that class of dropmenu
        $('.nav li').each(function()
        {
            //console.log($(this));
            $this = $(this);
            //console.log($this.children(".dropdown-menu").length);
            if($this.children(".dropdown-menu").length > 0)
            {
                //console.log('yes');
                $this.children('a').removeAttr('href');
            }
            /*else
            {
                //console.log('no');
            }
            console.log("");*/
        });


        if(currentUrl == '/wifi-wimax-lte/')
        {
            currentUrl='/wifi-wimax-lte/index.php';
        }

        console.log('');
        console.log(currentUrl);
        $('.nav a').each(function()
        {
            let attr = $(this).attr('href');

            if (typeof attr !== typeof undefined && attr !== false && attr !== '#') 
            {// Element has this attribute
                console.log($(this).attr('href'));
                if($(this).attr('href') == '/wifi-wimax-lte')
                {
                  $(this).attr('href','/wifi-wimax-lte/index.php');
                  console.log($(this).attr('href'));
                  console.log('');
                }

                if(currentUrl == $(this).attr('href'))
                {
                    console.log('match');
                    //console/log()
                    $(this).parent('li').addClass('active');
                }

            }
        });
    }
        
    