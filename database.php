<?php
//Connect to MySQL
$con = mysqli_connect("localhost","root","","shoutit");

//Test Connection
if(mysqli_connect_errno()){
	die('Failed to Connect to DB: '.mysqli_connect_error());
}