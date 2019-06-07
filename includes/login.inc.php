<?php

session_start();

#first if
if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';

	$uid = mysqli_real_escape_string( $conn , $_POST['uid'] );
	$pwd = mysqli_real_escape_string( $conn , $_POST['pwd'] );

	//Error handerlers
	//Check if this input are empty
	#second if
	if (empty($uid) || empty($pwd)) {
		header("Location: ../log_user.php?login=empty");
		exit();
	}/*second else*/ else {
		$sql = "SELECT * FROM usuario WHERE usuario_cedula='$uid'";
       
		$result = mysqli_query($conn,$sql);
        //mysqli_query Realizar consultas en la base de datos: Perform queries against the database:
		$resultCheck = mysqli_num_rows($result);
         // mysqli_num_rows Devuelve el número de filas en un conjunto de resultados:  Return the number of rows in a result set:
		#third if
		if ($resultCheck < 1) {
			header("Location: ../log_user.php?login=error");                                                                                                      
			exit();                                  
		}/*third else*/ else {                                                                    
			#forth if  
            //Obtener una fila de resultados como una matriz asociativa:
			if ($row = mysqli_fetch_assoc($result)) {                                
				//de-hashing the password
				$hashedPwdCheck = password_verify($pwd , $row['usuario_contra']);
				#fifth ifhttp://localhost
				if ($hashedPwdCheck == false) {
					header("Location: ../log_user.php?login=error");
					exit();
				} /*fifth else*/ elseif ($hashedPwdCheck == true) {
					//Log in the user here
					$_SESSION['u_id'] = $row['id_usuario'];
					$_SESSION['u_first'] = $row['usuario_nombre'];
					$_SESSION['u_last'] = $row['usuario_apellido'];
					$_SESSION['u_uid'] = $row['usuario_cedula'];
					header("Location: ../usuario.php?login=success");
					exit();
				}
			}
		}
	}
}




/*first else*/ else {
	header("Location: ../log_user.php?login=error");
	exit();
}