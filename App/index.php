<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ratchet template page</title>

    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Set Apple icons for when prototype is saved to home screen -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="touch-icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="touch-icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="touch-icons/apple-touch-icon-57x57.png">

    <link rel="stylesheet/less" type="text/css" href="css/main.less" />
    <script src="js/less.js" type="text/javascript"></script>

      <script src="js/popovers.js" type="text/javascript"></script>
      <script src="js/push.js" type="text/javascript"></script>
      <script src="js/sliders.js" type="text/javascript"></script>


    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>


      <script type="text/javascript">

          function test(name, pass){
              alert(name);
              var ajaxRequest = new XMLHttpRequest();

              ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){

                      alert(ajaxRequest.responseText);
                  }
              }

              var queryString = "http://localhost/startup/App/checkuserlogin.php?user=" + name + "&pass=" + pass;
              ajaxRequest.open("GET", queryString, true);
              ajaxRequest.send(null);

          }

      </script>


  </head>
  <body>

<div data-role="page">

    <header data-role="header" class="bar-title">
        <h1 class="title">Push</h1>
    </header>

    <div data-role="content" class="content">
        <ul class="list">
            <li>
                <a href="#login" data-transition="slide">Login
                </a>
                <span class="chevron"></span>
            </li>
            <li>
                <a href="#register" data-transition="slide">Register</a>
                <span class="chevron"></span>
            </li>
            <li>
                <a href="#home" data-transition="slide">Home</a>
                <span class="chevron"></span>
            </li>
            <li>
                <a href="#howto" data-transition="slide">Howto</a>
                <span class="chevron"></span>
            </li>
            <li>
                <a href="#task" data-transition="slide">Task</a>
                <span class="chevron"></span>
            </li>
        </ul>
    </div>
</div>

<?php include('Home.php'); ?>
<?php include('Register.php'); ?>
<?php include('Login.php'); ?>
<?php include('Task.php'); ?>
<?php include('HowTo.php'); ?>

</body>
</html>