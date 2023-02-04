<?php

if(isset($_POST["loginbtn"])){

  //Get Data

  $uid = $_POST["uid"];
  $pwd = $_POST["pwd"];

  //Instance Controller

  include "../classes/class_db.php";
  include "../classes/class_login.php";
  include "../classes/class_login_controller.php";
  
  $login = new loginController($uid, $pwd);

  //Error Handler

  $login->loginUser();

  //Response

  header("location: ../index.php");

}

?>