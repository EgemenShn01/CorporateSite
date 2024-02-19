<?php
 include("connection.php");
 include("message.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
<link rel="stylesheet" href="owl/owl.theme.default.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
     <script src="https://kit.fontawesome.com/cc939b9104.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="css/menu.css">
     <title>Document</title>
</head>
<body> 
     <section id="menu">
                  <div id="logo">
                    <a href="#">LizyKA</a> 
                  </div>
                  <nav >
                    <div id="nav">
                         <a href="#home" class="button home">
                           <svg>
                              <rect x="0" y="0"  fill="none" width="100%" height="101%"/>
                              </svg><i class="fa-solid fa-house "></i> Home</a>
                       <a href="#about" class="button about">
                           <svg>
                              <rect x="0" y="0"  fill="none" width="100%" height="101%"/>
                              </svg><i class="fa-solid fa-building "></i> About</a>
                          <a href="#educations" class="button educations">                   
                           <svg>
                              <rect x="0" y="0"  fill="none" width="100%" height="101%"/>
                              </svg><i class="fa-solid fa-award "></i> Educations</a>
                           <a href="#team" class="button team">                   
                           <svg>
                              <rect x="0" y="0"  fill="none" width="100%" height="101%"/>
                              </svg><i class="fa-brands fa-teamspeak "></i> Team</a>
                             <a href="#contact" class="button contact">                                                              
                           <svg>
                              <rect x="0" y="0"  fill="none" width="100%" height="101%"/>
                              </svg><i class="fa-solid fa-id-card-clip "></i> Contact</a>
                           
                    </div>
                     <span id="hamburgerOn"><i class="fa-solid fa-bars" ></i></span>
                     <span id="hamburgerOff"><i class="fa-solid fa-xmark"></i></span>
                             
                    <!-- <button href="#"><i class="fa-solid fa-house icon"></i> Home </button> 
                    <button href="#"><i class="fa-solid fa-building icon"></i> About </button>
                    <button href="#"><i class="fa-solid fa-award icon"></i> Educations </button>
                    <button href="#"><i class="fa-brands fa-teamspeak icon"></i> Team </button>
                    <button href="#"><i class="fa-solid fa-id-card-clip icon"></i> Contact </button>  -->
                  </nav>

     </section> 
    <section id="home">
      <div id="black"></div>
      <div id="content"> 
        <h2>İstanbul Belediyesi</h2>
        <hr width=300 align="left" >
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime libero dicta, minima non ipsa adipisci harum enim, <br>
           excepturi fuga atque, inventore qui asperiores quam eius et minus. Repellat, aperiam laborum.</p>
      </div>
    </section>
    <section id="about">
   <h3 class="about-h3">About Us.</h3>
   <div class="container"> 
     <div id="left">
      <h5 id="h5-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi    <br> 
        </h5>
     </div>
     <div id="right">
      <span>L</span>
      <p id="p-right">  orem ipsum dolor sit amet, consectetur adipisicing elit. Odio quaerat sunt autem et amet aspernatur! 
        Necessitatibus distinctio voluptas quasi impedit? Esse nulla veritatis fugit numquam ipsam porro, harum animi deleniti.</p>
     </div>
      <img src="./img/rp3.jpg" alt="img" width="950px"  class="img-fluid mt100 "/>
      <p id="p-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis velit dolorem mollitia in veniam, <br>
        vitae accusantium ipsa eos laudantium facere excepturi modi quae quod aliquam nisi? Optio aut eius tenetur.</p>
   </div>
    </section>
    <section id="educations">
        <div class="container"  >
             <h3>Educations.</h3>

             <div class="owl-carousel owl-theme">

              <div class="card item"  data-merge=1.5>
                <img src="./img/rp3.jpg" alt="" width="" class="img-fluid size">
                <h5 class="card-title">php eğitim</h5>
                <p class="card-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, itaque?</p>

              </div>
               <div class="card item" data-merge=1.5>
                <img src="./img/rp3.jpg" alt="" width="" class="img-fluid size">
                <h5 class="card-title">php eğitim</h5>
                <p class="card-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, itaque?</p>

              </div>
                              <div class="card item" data-merge=1.5>
                <img src="./img/rp3.jpg" alt="" width="" class="img-fluid size">
                <h5 class="card-title">php eğitim</h5>
                <p class="card-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, itaque?</p>

              </div>

             </div>
        </div>
    </section>
    <section id="team">
        <div class="container ">
          <h3 id="team-h3">Team.</h3>
               <div class="colums-left-right">
                <img src="./img/team1.jpg" alt="img" width="211px" class="img-fluid radius1">
                <h4 class="names">Ümit Altınöz</h4>
                <p class="team-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt, quaerat.</p>
                <div class="">
                  <a href="#"><i class="fa-brands fa-facebook social"></i></a>
                  <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                  <a href="#"><i class="fa-brands fa-linkedin social"></i></a>
                </div>
               </div>
                <div class="colums-left-right">
                <img src="./img/team2.jpg" alt="img" class="img-fluid radius1">
                <h4 class="names">Metin Kaya</h4>
                <p class="team-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt, quaerat.</p>
                <div class="social">
                  <a href="#"><i class="fa-brands fa-facebook  social"></i></a>
                  <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                  <a href="#"><i class="fa-brands fa-linkedin social"></i></a>
                </div>
               </div>
                                <div class="colums-left-right">
                <img src="./img/team3.jpg" alt="img" class="img-fluid radius1">
                <h4 class="names">Bill Gates</h4>
                <p class="team-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt, quaerat.</p>
                <div class="social">
                  <a href="#"><i class="fa-brands fa-facebook social"></i></a>
                  <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                  <a href="#"><i class="fa-brands fa-linkedin social"></i></a>
                </div>
               </div>
        </div>
    </section>
    <section id="contact">
      <div id="black1"></div>
      <div class="container">
        <form action="index.php" method="post">
        <div id="box">
          <h3 id="contact-h3">Contact.</h3>
          <div id="form">
            <div id="left-form">
              <input type="text" name="name" placeholder="Name Surname" required class="input-">
            <input type="text" name="phone" placeholder="Phone Number" required class="input-">
            </div>
            <div id="right-form">
              <input type="email" name="mail" placeholder="Mail Address" required class="input-">
              <input type="text" name="subject" placeholder="Topic Title" required class="input-">
            </div>
            
           <textarea name="message" id="" cols="30" rows="10" class="input-" placeholder="Your Message" required></textarea>
          
           
          <input type="submit" class="hover" value="Send">
             
          </div>
          <div id="address">
            <h1 class="adr-h4">Address :</h1>
            <p class="p-">Demokrasi Mah.</p>
            <p class="p-">Gülhan Cad.</p>
            <p class="p-">Arif Sağ Sok. No:123</p>
            <p class="p-">0212 656 23 45</p>
            <p class="p-">Email : info@lizyka.com</p>
          </div>
         </div>
        </form>   
      </div>
    </section>
    <section id="footer">
        <div class="container">
          <p>
            © 2024| Tüm Hakları Saklıdır
          </p>
          <div><a href="#"><i class="fa-brands fa-facebook social"></i></a>
            <a href="#"><i class="fa-brands fa-instagram social"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin social"></i></a>
          </div>
            <a href="#menu"><i class="fa-solid fa-caret-up social animate" ></i></a>
        </div>
    </section>









     <script src="js/toggleeffect.js"></script>
     <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" 
     integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
      crossorigin="anonymous"></script>
      <script src="owl/owl.carousel.min.js"></script>
      <script src="owl/script.js"></script>
</body>
</html>
