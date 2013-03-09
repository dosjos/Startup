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
        $query = "SELECT * FROM Starup_Egenskaper";

        $result = $mysqli->query($query);
        //Kjør spørring to ganger for å få hvite hvor mange rows, orker ikke å google hvordan man henter det ut på den enkle måten
        //Hackaton FTW
        $result2 = $mysqli->query($query);

        $antall = 0;
        while ($row = $result2->fetch_array(MYSQLI_NUM)) {
            $antall++;
        }
        echo "{";
        while ($row = $result->fetch_array(MYSQLI_NUM)) {
            echo '"egenskap":[{';
            echo '"id": '. $row[0] .",\n";
            echo '"text": "'. $row[1].'"' . "\n";
            $antall--;
            if($antall == 0){
                echo "}]\n";
            }else{
                echo "}],\n";
            }
        }

        echo "}";
    }

    if($_GET['type'] == ""){

    }

}