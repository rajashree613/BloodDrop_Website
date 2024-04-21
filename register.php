<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>BloodDrop</title>
    <link rel="stylesheet" href="regstyle.css" />
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Poppins" />
  </head>
  <body>

  

    <section class="header">
      <nav class="navbar">
        <a href="index.php"
          ><img src="images/logo-header.png" alt="blooddrop logo" class="logo"
        /></a>
        <div class="mobile-nav">
          <i href="#" class="fa fa-bars" style="color: white"></i>
        </div>
        <div class="nav-links">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a  onClick="document.getElementById('whywe').scrollIntoView();">Why we?</a></li>
            <li><a href="">About us</a></li>
            <a class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</a>
            <li class="emrg"><a href="Emergency.php"> EMERGENCY! </a></li>
          </ul>
        </div>
      </nav>
      <div id='login-form'class='login-page'>
         <div class="form-box">
             <div class='button-box'>
                 <h3 type="button" class='toggle-btn'>Welcome back <br>savior!</h3>
             </div>
             <form id='login' class='input-group-login'>
                 <input type='text'class='input-field'placeholder='Email Id' required >
     <input type='password'class='input-field'placeholder='Enter Password' required>
     <input type='checkbox'class='check-box'><span>Remember Password</span>
     <button type='submit'class='submit-btn'>Log in</button>
  </form>
     </section>

     <?php

    include 'connect.php';

    if(isset($_POST['submit'])){

      $name = $_POST['name'];
      $address = $_POST['address'];
      $contactno = $_POST['contactno'];
      $bloodgroup = $_POST['bloodgroup'];
      $password = $_POST['password'];
      $cpass = $_POST['cpass'];

      $insertquery = " insert into register(name,address,contactno,bloodgroup,password,cpass) values('$name','$address','$contactno','$bloodgroup','$password','$cpass')";

      $res = mysqli_query($con,$insertquery);

      if($res){
  ?>
        <script>
          alert("Registration Successful");
          </script>
          <?php
      }else{
        ?>
        <script>
          alert("Registration Not Successful");
          </script>
          <?php
      }

    }

    ?>

    
        <div class="row">
          <div class="col-1">
            <div class="form-box">
               <img src="images/reg.png" alt="">
              <div class="form">
                <form class="register-form" action="" method="POST">
                  <h1 class="main-heading">Be a DONATOR!</h1>
                  <h4 class="sub-heading">Save the world!</h4>
                  <input type="name" name="name" placeholder="Name" required/>
                  <input type="text" name="address" placeholder="Address" required/>
                  <input type="text" name="contactno" placeholder="Contact Number" required/>
                  <input type="text" name="bloodgroup" placeholder="Blood Group" required/>
                  <input type="password" name="password" placeholder="Password" required/>
                  <input type="password" Name="cpass" placeholder="Confirm Password" required/>


        
                
                  <button type="submit" name="submit"><a href="profile.php">REGISTER</a></button>
                  <!---<p class="message">
                    Already Registered?<a href="#">Login</a>
                  </p>-->
                </form>
                <!---<form class="login-form">
                  <center><h1 class="main-heading">Login Form</h1></center>
                  <input type="text" placeholder="user name" />
                  <input type="password" placeholder="password" />
                  <button>LOGIN</button>
                  <p class="message">
                    Not Registered? <a href="#">Register</a>
                  </p>
                </form>--->
                
              </div>
            </div>
          </div>
          
    <!--<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
      $(".message a").click(function () {
        $("form").animate({ height: "toggle", opacity: "toggle" }, "slow");
      });
    </script>--->
  </body>
</html>

