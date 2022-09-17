<?php
/* please make a SQL DB with name test_db and parameters -> 
id = int  {Primary key , Auto Increment}
user_id = int 
user_name = varchar(255)
password = varchar(255)




*/
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
