<?php
 include("connection.php");

 
 if(isset($_POST['name'],$_POST['phone'],$_POST['mail'],$_POST['subject'],$_POST['message'])){
    $nameSurname = $_POST['name'];
      $phone = $_POST['phone'];
      $mail =  $_POST['mail'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $insert="INSERT INTO contact (nameSurname, phone, email, subject, message) 
      VALUES ('".$nameSurname."','".$phone."','".$mail."','".$subject."','".$message."')";

      if($connect->query(@$insert)==true){
            echo "<script>alert('Your message has been sent successfully')</script>";
      }
      else {
            echo "<script>alert('An error occurred while sending your message.')</script>";
      }
}
?>