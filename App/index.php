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

    <!-- Include the compiled Ratchet CSS -->
    <link rel="stylesheet" href="ratchet/ratchet.css">

    <!-- Include the compiled Ratchet JS -->
    <script src="ratchet/ratchet.js"></script>

    <link rel="stylesheet/less" type="text/css" href="css/main.less" />
    <script src="js/less.js" type="text/javascript"></script>
      <script src="js/popovers.js" type="text/javascript"></script>
      <script src="js/push.js" type="text/javascript"></script>
      <script src="js/sliders.js" type="text/javascript"></script>
      <script src="js/fingerblast.js" type="text/javascript"></script>

  </head>
  <body>
<body>
<header class="bar-title">
    <h1 class="title">Push</h1>
</header>
<div class="content">
    <ul class="list">
        <li>
            <a href="Login.php" data-transition="slide-in">Login
            </a>
            <span class="chevron"></span>
        </li>
        <li>
            <a href="Register.php" data-transition="slide-in">Register</a>
            <span class="chevron"></span>
        </li>
        <li>
            <a href="Home.php" data-transition="slide-in">Home</a>
            <span class="chevron"></span>
        </li>
        <li>
            <a href="HowTo.php" data-transition="slide-in">Howto</a>
            <span class="chevron"></span>
        </li>
        <li>
            <a href="Task.php" data-transition="slide-in">Task</a>
            <span class="chevron"></span>
        </li>
    </ul>
</div>
</body>
</html>