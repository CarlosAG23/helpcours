<?php
$conn = new mysqli("localhost","helpcour_admin","@helpcours4","helpcour_login_register_pure_coding");
	
	if($conn->connect_errno)
	{
		echo "No hay conexion: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>