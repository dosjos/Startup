<?php

$item1 = true;

$name = $_GET["name"];
$pass = $_GET['pass'];

include("dbsettings.php");

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT * FROM Startup_Users where email = '$name' and pass = '$pass'";
$result = $mysqli->query($query);

/* numeric array */
$row = $result->fetch_array(MYSQLI_NUM);
//NO SAFETY HERE WEEEEEEEEEEEEEEEEEEEEEE

if($row[0]){
    $item1 = true;
}else{
    $item1 = false;
}

session_start();
$_SESSION["inne"] = true;
echo "{";
echo "item1: ", json_encode($item1), ",\n";
echo "itemid: ", json_encode($row[0]), ",\n";
echo "itemname: ", json_encode($row[1]), "\n";
echo "}";