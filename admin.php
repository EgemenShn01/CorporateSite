<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/admin.css">

</head>
<body>

<form action="admin.php" method="post" style="max-width:500px;margin:auto">
  <h2>Login Panel</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="userName">
  </div>

  <!-- <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div> -->
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password">
  </div>

  <button type="submit" class="btn">Login </button>
</form>

</body>
</html>
<?php
session_start();
if(isset($_POST["userName"],$_POST["password"])){
  if($_POST["userName"]=="lizyka" && $_POST["password"]=="123456")
  {
    $_SESSION["user"]=$_POST["userName"];
    header("Location:panel.php");
    echo "<script>alert('Login Successful')</script>";
  }
  else{
    echo "<script>alert('Username and password were incorrect')</script>";
  }
}
?>
