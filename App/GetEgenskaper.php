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
            echo '"egenskap'.$antall.'":{';
            echo '"id": '. $row[0] .",\n";
            echo '"text": "'. $row[1].'"' . "\n";
            $antall--;
            if($antall == 0){
                echo "}\n";
            }else{
                echo "},\n";
            }
        }

        echo "}";
    }

    //?type=getman&id=4
    if($_GET['type'] == "getman"){
        $id = $_GET["id"];
        $query = "SELECT * FROM Startup_UsersEgenskaper";

        $result = $mysqli->query($query);
        $row = $result->fetch_array(MYSQLI_NUM);

        echo "{";
        echo '"id": '. $row[0] .",\n";
        echo '"1": '. $row[2] .",\n";
        echo '"2": '. $row[3] .",\n";
        echo '"3": '. $row[4] .",\n";
        echo '"4": '. $row[5] .",\n";
        echo '"5": '. $row[6] .",\n";
        echo '"6": '. $row[7] ."\n";
        echo "}";
    }


    if($_GET['type'] == "setman"){
        $id = $_GET["id"];
        $e1 = $_GET["e1"];
        $e2 = $_GET["e2"];
        $e3 = $_GET["e3"];
        $e4 = $_GET["e4"];
        $e5 = $_GET["e5"];
        $e6 = $_GET["e6"];

        $result = mysql_query("SELECT * FROM Startup_UsersEgenskaper WHERE userid=$id");
        if(mysql_num_rows($result)) {
            mysql_query("UPDATE Startup_UsersEgenskaper SET egenskapOne='$e1' and egenskapTwo='$e2' and
            egenskapThree='$e3' and egenskapFour='$e4' and egenskapFive='$e5' and egenskapSix='$e6' and  WHERE userid=$id");
        }else{
            mysql_query("INSERT INTO Startup_UsersEgenskaper (userid, egenskapOne,egenskapTwo,egenskapThree,egenskapFour,egenskapFive,egenskapSix)
            VALUES ('$id','$e1','$e2','$e3','$e4','$e5','$e6' )");
        }
    }

    //$result = mysql_query("SELECT id FROM stats WHERE zone=$zone AND date=$today LIMIT 1");
    //if(mysql_num_rows($result)) {
    //    $id = mysql_result($result,0);
    //    mysql_query("UPDATE stats SET hits=hits+1 WHERE id=$id");
    //} else {
    //    mysql_query("INSERT INTO stats (zone, date, hits) VALUES ($zone, $today, 1)");
    //}

}