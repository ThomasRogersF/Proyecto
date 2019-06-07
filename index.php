
<?php
 session_start();
if (isset($_SESSION['u_id'])) {

	session_unset();
	session_destroy();
    ?> <script> alert("se ha cerrado su sesion"); window.location.href="index.php";  </script> <?php exit();
}
else if (isset($_SESSION['Admin'])){
   
	session_unset();
	session_destroy();
   ?> <script> alert("se ha cerrado su sesion"); window.location.href="index.php"; </script> <?php exit();
}


?>




<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Custom Theme files -->
<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->

</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Creative SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="./includes/log_adm.php" method="post">
                    <input class="text" type="text" name="Username" placeholder="Username" required="">
                    <br>
					<input class="text" type="password" name="password" placeholder="Password" required="">
					
					</div>
					<input type="submit" name="submit"  value="submit">
				</form>
				<p>Don't have an Account? <a href="#"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2018 | Design by <a href="#" target="_blank">Colorlib</a></p>
		
	<!-- //main -->
</body>
</html>