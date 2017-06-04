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
                if($this.attr('href') == '/portfolio-15-05-2017/wifi-wimax-lte')
                {
                  $this.attr('href','/portfolio-15-05-2017/wifi-wimax-lte/index.php');
                }

                if(currentUrl == $this.attr('href'))
                {
                    $this.parent('li').addClass('active');
                }
            }
        });


        //Disable active link
        $(".active").on('click','a',function(event)
        {
            //event.preventDefault();
            return false;
        });
    }

    function loadJS(file) // Dynamically add a JavaScript file to end of page
    { //More info see https://stackoverflow.com/questions/5235321/how-do-i-load-a-javascript-file-dynamically
        // DOM: Create the script element
        var jsElm = document.createElement("script");
        // set the type attribute
        jsElm.type = "application/javascript";
        // make the script element load file
        jsElm.src = file;
        // finally insert the element to the body element in order to load the script
        document.body.appendChild(jsElm);
    }

