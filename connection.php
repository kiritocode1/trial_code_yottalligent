<?php
/* please make a SQL DB with name test_db and table users with params  
(
id = int  {Primary key , Auto Increment}
user_id = int 
user_name = varchar(255)
password = varchar(255)
);

and 3 other tables states  , cities  , countries ,
each with 3 attributes -> 

cities(id [primary] , user_id [foreign], city_name)
states(id [primary] , user_id [foreign], state_name)
countries(id [primary] , user_id [foreign], country_name)


thank you 



*/
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
