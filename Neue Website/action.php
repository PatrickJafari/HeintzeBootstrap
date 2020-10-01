<?php
 require("lib/DbClass.php");  
 session_start();  
 $db = new Db();
 if(isset($_POST["username"]))  
 {
     $db->bind("username",$_POST["username"]);
     $db->bind("password",$_POST["password"]);
     $user = $db->query("SELECT * FROM benutzer WHERE username = :username AND password = :password");  

      if($user != NULL)  
      {  
           $_SESSION['username'] = $_POST['username'];  
           echo 'Yes';  
      }  
      else  
      {  
           echo 'No';  
      }  
 }  
 if(isset($_POST["action"]))  
 {  
      unset($_SESSION["username"]);  
 }  
 ?> 