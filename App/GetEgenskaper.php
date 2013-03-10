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
        echo '"limb1" :{ ';
        echo '"id":'. $row[2] .",\n";
        echo '"state":'. $row[9] ."\n";
        echo '},';
        echo '"limb2" :{ ';
        echo '"id":'. $row[3] .",\n";
        echo '"state":'. $row[10] ."\n";
        echo '},';
        echo '"limb3" :{ ';
        echo '"id":'. $row[4] .",\n";
        echo '"state":'. $row[11] ."\n";
        echo '},';
        echo '"limb4" :{ ';
        echo '"id":'. $row[5] .",\n";
        echo '"state":'. $row[12] ."\n";
        echo '},';
        echo '"limb5" :{ ';
        echo '"id":'. $row[6] .",\n";
        echo '"state":'. $row[13] ."\n";
        echo '},';
        echo '"limb6" :{ ';
        echo '"id":'. $row[7] .",\n";
        echo '"state":'. $row[14] ."\n";
        echo '}';
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

        $result2 = $mysqli->query("SELECT * FROM Startup_UsersEgenskaper WHERE userid='$id'");
        $result = $mysqli->query("SELECT * FROM Startup_UsersEgenskaper WHERE userid='$id'");
        $rekker = 0;
        while ($row = $result2->fetch_array(MYSQLI_NUM)) {
            $rekker++;
        }
        if($rekker != 0) {
            $mysqli->query("UPDATE Startup_UsersEgenskaper SET egenskapOne='$e1', egenskapTwo='$e2',
            egenskapThree='$e3', egenskapFour='$e4', egenskapFive='$e5', egenskapSix='$e6' WHERE userid='$id'");
        }else{
            $mysqli->query("INSERT INTO Startup_UsersEgenskaper (userid, egenskapOne,egenskapTwo,egenskapThree,egenskapFour,egenskapFive,egenskapSix)
            VALUES ('$id','$e1','$e2','$e3','$e4','$e5','$e6' )");
        }
    }


    if($_GET['type'] == "updateman"){
        echo"her";
        $id = $_GET["id"];
        $e1 = $_GET["s1"];
        $e2 = $_GET["s2"];
        $e3 = $_GET["s3"];
        $e4 = $_GET["s4"];
        $e5 = $_GET["s5"];
        $e6 = $_GET["s6"];


            $mysqli->query("UPDATE Startup_UsersEgenskaper SET stateOne='$e1', stateTwo='$e2',
            stateThree='$e3', stateFour='$e4', stateFive='$e5', stateSix='$e6' WHERE userid='$id'");

        echo "UPDATE Startup_UsersEgenskaper SET stateOne='$e1', stateTwo='$e2',
            stateThree='$e3', stateFour='$e4', stateFive='$e5', stateSix='$e6' WHERE userid='$id'";

    }
}