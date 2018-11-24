<?php 
  
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
  
?>
