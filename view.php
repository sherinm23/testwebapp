<?php
  //connection string
  // SQL Server Extension Sample Code:
  $connectionInfo = array("UID" => "apuadmin", "pwd" => "aPU123456", "Database" => "ddacdbtp044399", 
  "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
  $serverName = "tcp:ddactp044399.database.windows.net,1433";
  $conn = sqlsrv_connect($serverName, $connectionInfo);
  
if(!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
  echo "Connection Success: connected!"; 
?>
