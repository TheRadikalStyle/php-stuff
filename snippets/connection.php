<?php
  $connectionInstance;

  function CreateConnection(){
    $dbname = "";
    $dbhostname = "";
    $dbusername = "";
    $dbuserpassword = "";

    $conn = new mysqli($dbhostname, $dbusername, $dbuserpassword, $dbname);

    if($conn->connect_errno){
      //$response = "Failed to connect to MySQL: " . mysqli_connect_error();
      $conn = null;
      exit();
    }

    return $conn;
  }

  function CloseConnection(){
    if(isset($connectionInstance)){
      mysqli_close($connectionInstance);
    }
  }

?>
