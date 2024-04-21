<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>EMERGENCY</title>
    <link rel="stylesheet" href="Emergencystyle.css" />
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
              <li><a href="">Blood Bank</a></li>
              <a class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</a>
              <li class="emrg" >EMERGENCY!</li>
            </ul>
          </div>
        </nav>

        <!--------Modal js-------->
    <script>
      var x=document.getElementById('login');;
  var z=document.getElementById('btn');
  function register()
  {
    x.style.left='-400px';
    z.style.left='110px';
  }
  function login()
  {
    x.style.left='50px';
    z.style.left='0px';
  }
</script>
<script>
      var modal = document.getElementById('login-form');
      window.onclick = function(event) 
      {
          if (event.target == modal) 
          {
              modal.style.display = "none";
          }
      }
  </script>


    <div class="container">
      <div class="card">
        <div class="box">
          <div class="content">
            <h2>HOSPITAL NAME</h2>
            <br />
            <p>
              National hospital<br />
              14/15, Chattogram 4000
            </p>
            <br />
            <p>
              United hospital limited<br />
              Plot # 15 Rd no. 71, Dhaka 1212
            </p>
            <br />
            <p>
              Oasis hospital<br />
              Subhanighat, bishwa Rd, Sylhet 3100
            </p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="box">
          <div class="content">
            <h2>AMBULANCE NUMBER</h2>
            <br />
            <p>CTG--01933-246577</p>
            <br />
            <p>DHA--01720-448666</p>
            <br />
            <p>SYL--01713-205555</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="box">
          <div class="content">
            <h2>BLOOD BANK</h2>
            <br />
            <p>
              Chittagong Blood Bank & Transfusion Centre<br />
              Mayabini building 57 K.B. Fazlul Khader RD, east Gate, Chattogram
            </p>
            <br />
            <p>
              Blood Bank - Bangladesh Red Crescent Society<br />
              7, 5 Aurangajeb Rd, Dhaka
            </p>
            <br />
            <p>
              Cresent Blood Bank <br />
              Dorgah Moholla Rd, Sylhet 3100
            </p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
