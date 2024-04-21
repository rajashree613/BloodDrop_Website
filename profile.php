<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BloodDrop</title>
    <link rel="stylesheet" href="profilestyle.css" />
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Poppins" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <section class="header">
        <nav class="navbar">
          <a href="index.html"
            ><img src="images/logo-header.png" alt="blooddrop logo" class="logo"
          /></a>
          <div class="mobile-nav">
            <i href="#" class="fa fa-bars" style="color: white"></i>
          </div>
          <div class="nav-links">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a  onClick="document.getElementById('whywe').scrollIntoView();">Why we?</a></li>
              <li><a href="">About us</a></li>
              <a class='fa-profile' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;"></a>
              <li class="emrg"><a href="Emergency.html"> EMERGENCY! </a></li>
            </ul>
          </div>
        </nav>

  <!--profile page-->
    <div class="profile-card">
      <div class="card-header">
        <div class="pic">
          <img src="images/undraw_female_avatar_w3jk.svg" alt="" />
        </div>
        <div class="name">Ami</div>
        <div class="sm">
          <a href="#" class="fab fa-facebook-"></a>
        </div>
        <a href="#" class="contact-btn">Contact Me</a>
      </div>
      <div class="card-footer">
        <div class="texts">
          <div class="item">
            <span></span>
            East Delta University
          </div>
          <div class="border"></div>
          <div class="item">
            <span></span>
            AB+
          </div>
          <div class="border"></div>
          <div class="item">
            <span></span>
            01635707268
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
