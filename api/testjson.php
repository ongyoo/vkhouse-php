<?php 
  // require_once "controllers/";
      require_once('controllers/intercalls.php');
      $data_intercall = array();
      $data_intercall = test_intercall();
      //$data_intercall2 = test_intercallWhere($id);
      //print_r($data_intercall);
      // print_r($data_intercall[0]);
      // echo $data_intercall[0]['id'];
      // echo $data_intercall[0]['name'];
      echo json_encode($data_intercall);

      
      
?>