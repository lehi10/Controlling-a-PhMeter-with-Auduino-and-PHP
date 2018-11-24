
<?php

    // iot.php
    // Importamos la configuración

	$servername   = "localhost";
	$username     = "root";
	$password     = "root";
	$dbname       = "trakingDB";
	// Crear conexión
	$conn = new mysqli($servername, $username, $password,$dbname);

	// Revisar conexxión
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	} 


    $sqlQuery = "SELECT * FROM historialVehicles ORDER BY idVehicle DESC LIMIT 1;";
    
    // Ejecutamos la instrucción    

    $result = $conn->query($sqlQuery);


	if ($result->num_rows > 0) 
	{
    	$data = $result->fetch_assoc();
    	echo $data['ph'];
	}

	$conn->close();
?>


