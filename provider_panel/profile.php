<?php
  session_start();
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
  if(!isset($_SESSION['username'])){
    header("location:../login/main_login.php");
  }
include 'profile_script.php';
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <title>Dashboard</title>

        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="icon" sizes="192x192" href="../favicon.ico">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Material Design Lite">
        <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">
        <link rel="stylesheet" type="text/css" href="dashboard.css">
        <script src="../js/jquery.form-validator.min.js"></script>

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#3372DF">

        <link rel="shortcut icon" href="images/favicon.png">

        <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
        <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!--    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.cyan-light_blue.min.css">-->
        <link rel="stylesheet" href="styles.css">

        <!--

      --------------------------- bropdown
-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

        <script>
         $(function () {
                $("#location").selectmenu();
            });
            $(function () {
                var availableTags = [
      "ActionScript",
      "Bangalore",
      "Jaynagar",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
                $("#tags").autocomplete({
                    source: availableTags
                });
            });

            //ajax

            function postData(event) {
                 $('#form').validate({
                     rules: {
        cname: {
                required: true,
            },
        phno: {
            required: true,
        },          
    },
    messages: {
        cname: {
                required: "Please enter first name",
            },        
        phno: {
            required: "Please enter the phone number!",
            minlength: "enter 10 digits phone number",
        },
      
    },
                event.preventDefault()
                submitHandler: function(form) {

                $.ajax({
                    type: "POST",
                    url: "profile_script.php",
                    data: $('#myForm').serialize()
                }).done(function (result) {
                    // do something
                    //          $("#status_text").html(data);
                    // $('#sample3').val('');
                    // $('#sample4').val('');
                    $("#successMessage").show();
                    //     $( "#dialog" ).dialog();
                    $("#dialog-message").dialog({
                        modal: true,
                        buttons: {
                            Ok: function () {
                                $(this).dialog("close");
                            }
                        }
                    });

                });
            }
        });
             }
            console.log("data updated");
            //ajax close
        </script>



        <!--

      ---------------------------
-->
        <style>
            #view-source {
                position: fixed;
                display: block;
                right: 0;
                bottom: 0;
                margin-right: 40px;
                margin-bottom: 40px;
                z-index: 900;
            }
            /*            font face*/
            
            @font-face {
                font-family: 'super-text';
                src: url('../Sequel-Regular.ttf');
                format('truetype');
            }
        </style>
    </head>

    <body>
        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
            <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
                <div class="mdl-layout__header-row">
                    <span class="mdl-layout-title">Home</span>
                    <div class="mdl-layout-spacer"></div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                        <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                            <i class="material-icons">search</i>
                        </label>
                        <div class="mdl-textfield__expandable-holder">
                            <input class="mdl-textfield__input" type="text" id="search">
                            <label class="mdl-textfield__label" for="search">Enter your query...</label>
                        </div>
                    </div>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
                        <li class="mdl-menu__item">About</li>
                        <li class="mdl-menu__item">Contact</li>
                        <li class="mdl-menu__item"><a href="../login/logout.php">Logout</a></li>
                        <!--              <a href="login/logout.php" class="btn btn-default btn-lg btn-block">Logout</a>-->
                    </ul>
                </div>
            </header>
            <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
                <header class="demo-drawer-header">
                    <img src="images/user.jpg" class="demo-avatar">
                    <div class="demo-avatar-dropdown">
                        <span><?php echo $user ?>@example.com</span>
                        <div class="mdl-layout-spacer"></div>
                        <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i class="material-icons" role="presentation">arrow_drop_down</i>
                            <span class="visuallyhidden">Accounts</span>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                            <li class="mdl-menu__item">
                                <?php echo $user ?>@example.com</li>
                            <li class="mdl-menu__item">info@example.com</li>
                            <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
                        </ul>
                    </div>
                </header>
                <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
                    <a class="mdl-navigation__link" href="../provider_panel/panel.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
                    <a class="mdl-navigation__link" href="../provider_panel/profile.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Profile</a>
                    <a class="mdl-navigation__link" href="../provider_panel/create_schedule.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i>create schedule</a>
                    <a class="mdl-navigation__link" href="../provider_panel/scancel.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i>Cancellation</a>
                    <a class="mdl-navigation__link" href="../provider_panel/cvisit.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Attendance</a>
                    <!-- <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">flag</i>Updates</a>
                    <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Booking history</a> -->
                    <!-- <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">shopping_cart</i>Purchases</a> -->
                   <!--  <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>Social</a> -->
                    <div class="mdl-layout-spacer"></div>
                    <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
                </nav>
            </div>
            <main class="mdl-layout__content mdl-color--grey-100">
                <div class="mdl-grid demo-content">
                    <h2 style="font-family:Titillium Web;color:#52a4ff">Profile</h2>&nbsp;&nbsp;&nbsp;
                    <form id="myForm" method="post">
                        <!--                        action="profile_script.php"-->
                        <div class="top-row">
                            <!-- optional-->
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="sample3" name="cname" data-validation="required">
                                <label class="mdl-textfield__label" for="sample3">center name</label>
                            </div>
                            <br>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4" name="phno">
                                <label class="mdl-textfield__label" for="sample4">Phone Number</label>
                                <span class="mdl-textfield__error">Input is not a number!</span>
                            </div>
                        </div>
                        <!-- optional-->
                        <br>

                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <label class="mdl-textfield__label" for="location">Location</label>
                                <select class="mdl-textfield__input" name="location" id="location">
                                    <option value="all" selected="selected">All</option>
                                    <?php 
$sql = $mysqli->query("SELECT lname FROM locations ORDER BY lname ASC");
        while($row = $sql->fetch_assoc()){
echo "<option>".$row['lname']."</option>";
}
?>
                                </select>
                            </div>
                        <!-- <div class="ui-widget mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="tags" name="loc">
                            <label class="mdl-textfield__label" for="tags">location</label>
                        </div> -->
                        <br>
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent  mdl-button--colored mdl-color-text--white" id="btn_submit" onclick="postData(event)">Submit</button>
                        <div id="successMessage" style="display:none;"> Data has been sucessfully updated </div>
                    </form>

                    <!--  model display
                    <div id="dialog" title="Basic dialog">
  <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div>
-->
                    <div id="dialog-message" title="confirmation" style="display:none;">
                        <p>Data has been sucessfilly updated</p>
                    </div>


                </div>
            </main>
            <style>
                #myform {
                    background-color: white;
                }
            </style>
        </div>
        <!--
        <!--        <a href="https://github.com/google/material-design-lite/blob/master/templates/dashboard/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">View Source</a>-->
        <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    </body>

    </html>