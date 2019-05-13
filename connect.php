<?php
	$connection = new mysqli("localhost","root","","uasmateri");
	if(!$connection)
	{
		echo "Connection Error!";
		exit();
	}