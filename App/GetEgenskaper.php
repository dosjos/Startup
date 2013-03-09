<?php
/**
 * Created by JetBrains PhpStorm.
 * User: skottjan
 * Date: 09.03.13
 * Time: 21:32
 * To change this template use File | Settings | File Templates.
 */

include("dbsettings.php");


$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

$query = "SELECT * FROM starup_egenskaper";

$result = $mysqli->query($query);
print_r($result);
$row = $result->fetch_array(MYSQLI_NUM);
print_r($row);
echo "{";
foreach( $result->fetch_array(MYSQLI_NUM) as $r){

    echo "egenskap:{\n";
        echo "id: ". $r[0] ."\n";
        echo "text: ". $r[1]."\n";
      echo "}\n";
}

echo "}";