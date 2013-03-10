<?php
/**
 * Created by JetBrains PhpStorm.
 * User: skottjan
 * Date: 09.03.13
 * Time: 20:20
 * To change this template use File | Settings | File Templates.
 */

$item1 = false;

if(isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET['pass'])){

    $name = $_GET["name"];
    $email = $_GET["email"];
    $pass = $_GET['pass'];

    include("dbsettings.php");

    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    $query = "insert into Startup_Users (name, email, pass)  values ('$name', '$email', '$pass')";
    $mysqli->query($query);

//Hent id
    $query = "SELECT * FROM Startup_Users where email = '$email' and pass = '$pass'";
    $result = $mysqli->query($query);

    /* numeric array */
    $row = $result->fetch_array(MYSQLI_NUM);

    $item1 = true;
}

echo "{";
echo "item1: ", json_encode($item1), "\n";
echo "itemid: ", json_encode($row[0]), ",\n";
echo "itemname: ", json_encode($row[1]), "\n";
echo "}";