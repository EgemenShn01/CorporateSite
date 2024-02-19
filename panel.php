<?php
  session_start();
  ob_start();


  if(empty($_SESSION["user"]))
  {
    header("Location: ./exit.php");
  }
  else
  {
      include("connection.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/panel.css">
  <title>Document</title>
</head>
<body>
  <div id="wrapper">
      <div id="menu">
        <div class="logo"><img src="./img/lizyKa-light.png" alt="logo" width="100px" style="margin:35px 50px;";></div>
             <div id="nav">   
                     <button  href="" class="button" id="collapseOne">
                      <svg>
                      <rect x="0" y="0"  fill="none" width="100%" height="101%"/>
                      </svg>Home</button>
                      <button href="" class="button">
                      <svg>
                      <rect x="0" y="0"  fill="none" width="100%" height="101%"/>
                      </svg>Messages</button>
                       <a href="./exit.php" class="button mt10">
                      <svg>
                      <rect x="0" y="0"  fill="none" width="100%" height="101%"/>
                      </svg>Exit</a>
                    </div>   
                   
              </div>
  <div id="messages">
    <h2>Your Messages.</h2>
  <table id="customers">
  <tr>
    <th>Name Surname</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
  </tr>
  <?php
$select="SELECT * FROM contact";

$result=$connect->query($select); 
if($result->num_rows>0){
 while($get=$result->fetch_assoc()){
    echo  "
    <tr>
    <td>".$get['nameSurname']."</td>
    <td>".$get['phone']."</td>
    <td>".$get['email']."</td>
    <td>".$get['subject']."</td>
    <td>".$get['message']."</td>
  </tr>";
    
 }
}
else 
{
  echo "<script>alert('No recorded data found.')</script>";
}


     
?>
</table>
       </div>
  </div>
  
  

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

