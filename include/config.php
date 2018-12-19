<?php


//create connection
$con=new mysqli("localhost","root","","tag8");

if($con->connect_error)
{
	die("connection failied".$con->connect_error);

}

?>