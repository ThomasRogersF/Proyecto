<?php

    $hostname = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'sistema1';

$conn = new mysqli($hostname, $username, $password);
        /*falla de prueba de conexion*/ 
		if (!$conn) {
			echo "<p>Could not connect to the server '" . $hostname . "'</p>\n";
        	echo mysql_error();
        }
        /*Funcionando*/
        else{
            echo "<p>Successfully connected to the server '" . $hostname . "'</p>\n";
        }


        
         /*database vacia*/   
	    if ($conn && !$database) {
		echo "<p>No database name was given. Available databases:</p>\n";
    }
    


    
?>