<?php

$username=$_POST['Username'];
$password=($_POST['password']);
$login=$_POST['submit'];





if(isset($login)){
  
  include 'dbh.inc.php';

  $sql = "SELECT * FROM us where id_us='$username' and pas='$password'";
  $res = mysqli_query($conn, $sql);

  
  $name = $fila["id_us"];
  $user = $fila["pas"];
  $pass = $fila["nivel"];
  
  
   
   promt ($res, $fila);
   
exit();

  if($user==$username && $pass=$password){
    session_start();
    
     //   $_SESSION['usuario_nombre']=$name;
     // $_SESSION['Admin']=$pass;
    //  $_SESSION[1]=$type;
      header("Location: ../admin_user.php?login=success");
    
  }
      else{
?> <script> alert("Datos incorrectos"); window.location.href="../log_admin.html"; </script> <?php exit();
    }
  } else{
       
 header("Location: ../log_admin.html?login=error");

    
  }*/

?>