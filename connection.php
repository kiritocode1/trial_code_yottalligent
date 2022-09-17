<?php
/* please make a SQL DB with name test_db and parameters 




*/
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
