<?php
  session_start();
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
  if(!isset($_SESSION['username'])){
    header("location:../login/main_login.php");
  }
include 'appointment_script.php';
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
        <link rel="icon" sizes="192x192" href="images/android-desktop.png">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Material Design Lite">
        <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">
        <link rel="stylesheet" type="text/css" href="dashboard.css">

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#3372DF">

        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">

        <!--       jquery-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
        <!--       jquery-->

        <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
        <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!--    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.cyan-light_blue.min.css">-->
        <link rel="stylesheet" href="styles.css">
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
            
            .demo-card-square > .mdl-card__title {
                color: #fff;
                background: url('../images/resizeploy.JPG') bottom right 15% no-repeat #46B6AC;
            }
            
            .mdl-navigation__link {
                font-size: 15px;
            }
        </style>
        <script>
            $(function () {
                $("#location").selectmenu();
                $("#provider").selectmenu();
                $("#service").selectmenu();
            });
        </script>
        <script type="text/javascript">
            function send() {
                console.log("booked");
            }

            function postData(event) {
                event.preventDefault()
                $.ajax({
                    type: "POST",
                    url: "booking_script.php",
                    data: $('#myForm').serialize()
                }).done(function (result) {
                    // do something
                    //          $("#status_text").html(data);
                    $('#sample3').val('');
                    $('#sample4').val('');
                    $('#lname').val('');
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
        </script>
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
                        <span>hello@example.com</span>
                        <div class="mdl-layout-spacer"></div>
                        <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i class="material-icons" role="presentation">arrow_drop_down</i>
                            <span class="visuallyhidden">Accounts</span>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                            <li class="mdl-menu__item">hello@example.com</li>
                            <li class="mdl-menu__item">info@example.com</li>
                            <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
                        </ul>
                    </div>
                </header>
                <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
                        <a class="mdl-navigation__link" href="../panel/panel.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
                    <a class="mdl-navigation__link" href="../panel/cinfo.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Profile</a>
                     <a class="mdl-navigation__link" href="../panel/profile.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Edit Profile</a>
                    <a class="mdl-navigation__link" href="../panel/booking.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i>Booking</a>
                    <a class="mdl-navigation__link" href="../panel/cancellation.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i>Cancellation</a>
                    <!-- <a class="mdl-navigation__link" href="../map/savedata.html"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Forums</a> -->
                    <a class="mdl-navigation__link" href="../panel/map.html"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">flag</i>Maps</a>
                    <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Booking history</a>
                    <a class="mdl-navigation__link" href="../payment/payment.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">shopping_cart</i>Buy Credits</a>
                    <!-- <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>Social</a> -->
                    <div class="mdl-layout-spacer"></div>
                    <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
                </nav>
            </div>

            <main class="mdl-layout__content mdl-color--grey-100">
                <div class="mdl-grid demo-content">
                    <div class="mdl-grid">
                        <?php
                      while($row = $result->fetch_assoc()) { 
echo $row["app_id"]."  ".$row["firstname"];
}
?>
                    </div>
                </div>
            </main>
        </div>
        <!-- <a href="https://github.com/google/material-design-lite/blob/master/templates/dashboard/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">View Source</a> -->
        <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    </body>

    </html>