<?php
   
    $Db_server="localhost";
    $Db_user="root";
    $Db_password="";
    $Db_name="lizyka";


      $connect=mysqli_connect(
      $Db_server,
      $Db_user,
      $Db_password,
      $Db_name
      );
      if(!$connect){
        die("Database operation fails".mysqli_connect_error());
      }
      else{}
?>