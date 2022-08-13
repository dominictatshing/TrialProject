<!DOCTYPE html>
<html>
    <head>
        <!-- Jquery 3.6.0 -->
        <script type="text/javascript" src="jquery-3.6.0.js"></script>
    </head>
    <body>
        <div>hello, welcome here!</div>

        <form action="" method="GET">
            <input  name="email" type="text" value=""/>
            <input type="submit" value="Submit"/>
        </form> 
    </body>

    <h1>go</h1>

    <script type="text/javascript">

        //function to retrieve url query string's key value
        var getUrlParameter = function (sParam) {
            
            var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }

            return false;
        };

        var email = getUrlParameter('email');

        console.log("email: " + email);

        $("form input[type=text]").val(email);

    </script>

    

</html>
