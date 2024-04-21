<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BloodDrop</title>
    <link rel="stylesheet" href="index.html" />
    <link rel="stylesheet" href="regstyle.css" />
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Poppins" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
</html>
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
          <li><a href="">Home</a></li>
          <li>
            <a onClick="document.getElementById('whywe').scrollIntoView();"
              >Why we?</a
            >
          </li>
          <li><a href="">About us</a></li>
          <li><a href="">Blood Bank</a></li>
          <a
            class="loginbtn"
            onclick="document.getElementById('login-form').style.display='block'"
            style="width: auto"
            >Login</a
          >
          <li class="emrg">EMERGENCY!</li>
        </ul>
      </div>
    </nav>
  </section>
</body>
