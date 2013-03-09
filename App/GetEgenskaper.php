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
if(isset($_GET['type'])){

    if($_GET['type'] == "egenskaper"){
        $query = "SELECT * FROM starup_egenskaper";

        $result = $mysqli->query($query);
        echo "{";
        while ($row = $result->fetch_array(MYSQLI_NUM)) {
            echo "egenskap:{\n";
            echo "id: ". $row[0] ."\n";
            echo "text: ". $row[1]."\n";
            echo "}\n";
        }

        echo "}";
    }

    if($_GET['type'] == ""){

    }

}