<?php
  session_start();

  if(isset($_SESSION['username'])){
	session_start();
	session_destroy();
  }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Signup</title><meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<link rel="shortcut icon" href="favicon.ico">
    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.min.css">
    <link rel="stylesheet" href="../styles.css">
    <!-- <link rel="stylesheet" href="css/material.min.css"> -->
    <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/external.css">
    <link rel="stylesheet" href="../css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="resource/material.min.js"></script>
      <link type="text/css" rel="stylesheet" href="../css/loginstyle.css">
          <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
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
        @font-face{
		font-family: 'super-text';
		src:url('Sequel-Regular.ttf');
		format('truetype');

	}
    </style>
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
      
  </head>

  <body>
       <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

        <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
            <div class="mdl-layout__header-row">
                <span class="android-title mdl-layout-title">
            <img class="" src="../images/logo.png">
          </span>
                <!-- Add spacer, to align navigation to the right in desktop -->
                <div class="android-header-spacer mdl-layout-spacer"></div>
                <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
                        <i class="material-icons">search</i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" id="search-field">
                    </div>
                </div>
                <!-- Navigation -->
                <div class="android-navigation-container">
                    <nav class="android-navigation mdl-navigation">
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Phones</a>
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Tablets</a>
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Wear</a>
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">TV</a>
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Auto</a>
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">One</a>
                        <a class="mdl-navigation__link mdl-typography--text-uppercase" href="../login/main_login.php">Login</a>
                    </nav>
                </div>
                <span class="android-mobile-title mdl-layout-title">
          <a href="index1.html"><img class="android-logo-image" src="images/android-logo.png"></a>
          </span>
                <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
                    <i class="material-icons">more_vert</i>
                </button>
                <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
                    <li class="mdl-menu__item">5.0 Lollipop</li>
                    <li class="mdl-menu__item">4.4 KitKat</li>
                    <li disabled class="mdl-menu__item">4.3 Jelly Bean</li>
                    <li class="mdl-menu__item">Android History</li>
                </ul>
            </div>
        </div>

        <div class="android-drawer mdl-layout__drawer">
            <span class="mdl-layout-title">
          <img class="" src="images/translogo.png" >  <!--class=android-logo-image   src=images/android-logo-white.png-->
        </span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="">Phones</a>
                <a class="mdl-navigation__link" href="">Tablets</a>
                <a class="mdl-navigation__link" href="">Wear</a>
                <a class="mdl-navigation__link" href="">TV</a>
                <a class="mdl-navigation__link" href="">Auto</a>
                <a class="mdl-navigation__link" href="">One</a>
                <a class="mdl-navigation__link" href="">Play</a>
                <div class="android-drawer-separator"></div>
                <span class="mdl-navigation__link" href="">Versions</span>
                <a class="mdl-navigation__link" href="">Lollipop 5.0</a>
                <a class="mdl-navigation__link" href="">KitKat 4.4</a>
                <a class="mdl-navigation__link" href="">Jelly Bean 4.3</a>
                <a class="mdl-navigation__link" href="">Android history</a>
                <div class="android-drawer-separator"></div>
                <span class="mdl-navigation__link" href="">Resources</span>
                <a class="mdl-navigation__link" href="">Official blog</a>
                <a class="mdl-navigation__link" href="">Android on Google+</a>
                <a class="mdl-navigation__link" href="">Android on Twitter</a>
                <div class="android-drawer-separator"></div>
                <span class="mdl-navigation__link" href="">For developers</span>
                <a class="mdl-navigation__link" href="">App developer resources</a>
                <a class="mdl-navigation__link" href="">Android Open Source Project</a>
                <a class="mdl-navigation__link" href="">Android SDK</a>
            </nav>
        </div>

              <div class="android-content mdl-layout__content">
      
      
<!--
    <div class="container">

      <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
        <h2 class="form-signup-heading">Register</h2>
        <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Username" autofocus>
        <input name="email" id="email" type="text" class="form-control" placeholder="Email">
<br>
        <input name="password1" id="password1" type="password" class="form-control" placeholder="Password">
        <input name="password2" id="password2" type="password" class="form-control" placeholder="Repeat Password">

        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

        <div id="message"></div>
      </form>

    </div>  /container 
-->
           
           
           <!------registration ------------------->
                 <div class="form">
      

<!--
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
-->
<!--      <div class="tab-content">-->
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input name="newuser" id="newuser" type="text" class="form-control" autofocus required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input name="email" id="email" type="text" class="form-control" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input name="password1" id="password1" type="password" class="form-control"required autocomplete="off"/>
          </div>
              
                 <div class="field-wrap">
            <label>
              Repeat password<span class="req">*</span>
            </label>
            <input name="password2" id="password2" type="password" class="form-control" required autocomplete="off"/>
          </div>
          
          <button name="Submit" id="submit" type="submit" class="button button-block"/>Get Started</button>
            <div id="message"></div>
          </form>

        </div>
        
<!--
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
-->
        

      
</div> <!-- /form -->
           
   </div>          <!------registration ------------------->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script src="js/signup.js"></script>
    <script src="../js/loginindex.js"></script>


    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>      
<script>

$( "#usersignup" ).validate({
  rules: {
	email: {
		email: true,
		required: true
	},
    password1: {
      required: true,
      minlength: 4
	},
    password2: {
      equalTo: "#password1"
    }
  }
});
</script>
 <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
  </body>
</html>
