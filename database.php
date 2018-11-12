<?php
$connect=mysqli_connect('localhost','root','','mydatabase');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

?>