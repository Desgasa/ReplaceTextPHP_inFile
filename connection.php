<?php

$host = "localhost";
$user = "root";
$password = "";
$db_name = "login_ubank2";

if(!$con = mysqli_connect($host,$user,$password,$db_name))
{

	die("failed to connect!");
};
?>