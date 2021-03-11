<?php

$conn = new mysqli('localhost','root','','fitness');

if($conn->connect_error)
{
	echo "not connected";
}
else
{
	echo "";
}
?>