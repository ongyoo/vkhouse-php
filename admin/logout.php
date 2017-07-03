<?php 
	session_start();
	unset($_SESSION["strName"]); // ลบบาง Session
	unset($_SESSION["strSiteName"]); // ลบบาง Session
	session_destroy(); // ลบ Session ทั้งหมด


	header("location:login.php");
 ?>