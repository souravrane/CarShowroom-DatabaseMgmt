<?php
$db=mysqli_connect("localhost","root","root","car_showroom");
if(!$db)
{
	die("could not connect".mysqli_error());
}
?>