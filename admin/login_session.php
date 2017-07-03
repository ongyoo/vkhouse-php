<?php 
  	require_once('controllers/intercalls.php');
      //insert('komsit');
   	$data_intercall = login($_POST["input_email"],$_POST["input_password"]);
   	print_r($data_intercall);
   	if(count($data_intercall) != 0){
   		//echo "main test = ".count($data_intercall);
   		session_start();
		$_SESSION["strName"] = $data_intercall[0]["first_name"]." ".$data_intercall[0]["last_name"];
      print("TestData".$data_intercall[0]["first_name"]." ".$data_intercall[0]["last_name"]);
      //print_r("TEST".isset($_SESSION['authen']));
		session_write_close();

   		header("location:index.php");

   	}else{
   		header("location:login.php");
   		//echo "index test = ".count($data_intercall);
   	}
      
   	

?>