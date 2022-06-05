<?php
$conn = new mysqli("","","","");
	
	if($conn->connect_errno)
	{
		echo "No hay conexion: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>
