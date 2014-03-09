<!DOCTYPE html> 
<html> 
    <head> 
        <title>MIS EEPIS</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="include/jquery.mobile-1.4.2.min.css" />
        <link rel="stylesheet" href="include/themes/tema-custom.min.css" />
        <link rel="stylesheet" href="include/table.css"/>
        <script src="include/misonline.js"></script>
        <script src="include/jquery-1.10.2.min.js"></script>
        <script src="include/jquery.mobile-1.4.2.min.js"></script>
        

        <script>
            $(document).ready(function() {
                $("#login").click(function() {
                    var action = $("#lg-form").attr('action');
                    var form_data = {
                        username: $("#username").val(),
                        password: $("#password").val(),
                        is_ajax: 1
                    };
                    $.ajax({
                        type: "POST",
                        url: action,
                        data: form_data,
                        success: function(response)
                        {
                            if (response == "success")
                                location.replace('menu.php');
                            else
                                $("#message").html('<p class="error">ERROR: Invalid username and/or password.</p>');
                        }
                    });
                    return false;
                });
            });
        </script>
    </head> 
    <body> 
        <div id="login_page" data-role="page">
            <div data-role="header" data-theme="c" style="border-style:none"> 
                <img border="0" src="include/gambar/LOGO1.jpg" alt="mis logo" width="100%" 
                     style="float:left;display:inline-block;position:relative"/> 

            </div><!-- /header -->
            <div data-role="content">
                <div id='message'>	
                </div>
                <form action="login-login.php" id="lg-form" name="lg-form" method="post">

                    <div>
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" placeholder="@student.eepis-its.edu"/>
                    </div>

                    <div>
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" placeholder="password" />
                    </div>

                    <div>				
                        <button class="show-page-loading-msg" data-textonly="false" data-textvisible="true" data-msgtext=""  data-theme="a" type="submit" class="button" id="login">Login</button>
                    </div>

                </form>
            </div><!-- /content -->


            <!-- /page -->
    </body>
</html>