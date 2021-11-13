<?php
	$connection = mysqli_connect("localhost","root","","project_mgmt");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySql: ".mysqli_connect_error();
	}
?>