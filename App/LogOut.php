<?php
session_start();

session_unset();

// this would destroy the session variables
session_destroy();

echo "Du er logget ut, gå til hovedsiden <a href='index.php'>her</a> "


?>