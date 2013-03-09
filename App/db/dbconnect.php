<?php
$dbhost = 'localhost';
$dbuser = 'janole';
$dbpass = 'passord';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Kunne ikke kontakte databasen, prøv igjen senere');

$dbname = 'startup';
mysql_select_db($dbname);

?>