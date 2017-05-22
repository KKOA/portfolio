     $(document).ready(function()
    {
        active();
    });


    function active()
    {
        var currentUrl = window.location.pathname;        

        //Remove href attributes from anchor tags with sibling that class of dropmenu
        $('.nav li').each(function()
        {
            $this = $(this);
            if($this.children(".dropdown-menu").length > 0) //Check if has child with class name of dropdown-menu
            {
                $this.children('a').removeAttr('href');// Remove href
            }
        });


        if(currentUrl == '/portfolio-15-05-2017/wifi-wimax-lte/')
        { 
            currentUrl='/portfolio-15-05-2017/wifi-wimax-lte/index.php';
        }

        $('.nav a').each(function()
        {
            $this = $(this);
            let attr = $this.attr('href');

            if (typeof attr !== typeof undefined && attr !== false && attr !== '#') 
            {// Element has this attribute
                console.log($this.attr('href'));
                if($this.attr('href') == '/portfolio-15-05-2017/wifi-wimax-lte')
                {
                  $this.attr('href','/portfolio-15-05-2017/wifi-wimax-lte/index.php');
                  console.log($this.attr('href'));
                  console.log('');
                }

                if(currentUrl == $this.attr('href'))
                {
                    console.log('match');
                    $this.parent('li').addClass('active');
                }
            }
        });
    }
        
    