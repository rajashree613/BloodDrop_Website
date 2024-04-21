<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BloodDrop</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Poppins" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
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
            <li><a href="">Home</a></li>
            <li><a  onClick="document.getElementById('whywe').scrollIntoView();">Why we?</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Blood Bank</a></li>
            <a class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</a>
            <li class="emrg"> <a href="Emergency.php"> EMERGENCY! </a></li>
          </ul>
        </div>
      </nav>
      <div class="textbox">
        <h1>Blood is Life, Pass it on</h1>
        <p>
          A donation of blood means a few minutes to you, but a lifetime for
          somebody else.
        </p>
        <a href="register.php" class="Don-btn">I am a DONATOR</a>
        <a class="recv-btn" onClick="document.getElementById('middle').scrollIntoView();">I am a Receiver</a>
      </div>
      <!-------Wave-------->
      <div class="custom-shape-divider-bottom-1650531447">
        <svg
          data-name="Layer 1"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1200 120"
          preserveAspectRatio="none"
        >
          <path
            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
            class="shape-fill"
          ></path>
        </svg>
      </div>
      <!-------Modal section-------->
      <div id='login-form'class='login-page'>
        <div class="form-box">
            <div class='button-box'>
                <h3 type="button" class='toggle-btn'>Welcome back <br>savior!</h3>
            </div>
            <form id='login' class='input-group-login'>
                <input type='text'class='input-field'placeholder='Name' required >
    <input type='password'class='input-field'placeholder='Enter Password' required>
    <input type='checkbox'class='check-box'><span>Remember Password</span>
    <button type='submit'class='submit-btn'>Log in</button>
 </form>
    </section>

    <!------------------------Section 3---------------------->
    <section class="hero" id="middle">
      <div class="srchbox">
        <h1>Search Donors</h1>
        <div class="container">
          <div class="select-box">
            <div class="options-container" method="POST">
              <div class="option">
                <input
                  type="radio"
                  class="radio"
                  id="automobiles"
                  name="category"
                />
                <label for="automobiles">A+</label>
              </div>

              <div class="option">
                <input type="radio" class="radio" id="film" name="category" />
                <label for="film">B+</label>
              </div>

              <div class="option">
                <input
                  type="radio"
                  class="radio"
                  id="science"
                  name="category"
                />
                <label for="science">AB+</label>
              </div>

              <div class="option">
                <input type="radio" class="radio" id="art" name="category" />
                <label for="art">O+</label>
              </div>

              <div class="option">
                <input type="radio" class="radio" id="music" name="category" />
                <label for="music">A-</label>
              </div>

              <div class="option">
                <input type="radio" class="radio" id="travel" name="category" />
                <label for="travel">B-</label>
              </div>

              <div class="option">
                <input type="radio" class="radio" id="sports" name="category" />
                <label for="sports">AB-</label>
              </div>

              <div class="option">
                <input
                  type="radio"
                  class="radio"
                  id="tutorials"
                  name="category"
                />
                <label for="tutorials">O-</label>
              </div>
            </div>

            <div class="selected">Select Blood Type</div>

            <div class="search-box">
              <input type="text" placeholder="Start Typing..." />
            </div>
          </div>

          <div class="select-box">
            <div class="options-container">
              <div class="option">
                <input
                  type="radio"
                  class="radio"
                  id="automobiles"
                  name="category"
                />
                <label for="automobiles">Dhaka</label>
              </div>

              <div class="option">
                <input type="radio" class="radio" id="film" name="category" />
                <label for="film">Lakhipur</label>
              </div>

              <div class="option">
                <input
                  type="radio"
                  class="radio"
                  id="science"
                  name="category"
                />
                <label for="science">Mirpur</label>
              </div>

              <div class="option">
                <input type="radio" class="radio" id="art" name="category" />
                <label for="art">Nababganj</label>
              </div>

              <div class="option">
                <input type="radio" class="radio" id="music" name="category" />
                <label for="music">Chittagong</label>
              </div>

              <div class="option">
                <input type="radio" class="radio" id="travel" name="category" />
                <label for="travel">Cumilla</label>
              </div>

              <div class="option">
                <input type="radio" class="radio" id="sports" name="category" />
                <label for="sports">Noakhali</label>
              </div>

              <div class="option">
                <input type="radio" class="radio" id="news" name="category" />
                <label for="news">Rajshahi</label>
              </div>

              <div class="option">
                <input
                  type="radio"
                  class="radio"
                  id="tutorials"
                  name="category"
                />
                <label for="tutorials">Rangpur</label>
              </div>
            </div>

            <div class="selected">Select your Location</div>

            <div class="search-box">
              <input type="text" placeholder="Start Typing..." />
            </div>
          </div>

          <div class="select-box">
            <div class="options-container">
              <div class="option">
                <input
                  type="radio"
                  class="radio"
                  id="automobiles"
                  name="category"
                />
                <label for="automobiles">Varified</label>
              </div>

              <div class="option">
                <input type="radio" class="radio" id="film" name="category" />
                <label for="film">Not varified</label>
              </div>

              <div class="option">
                <input
                  type="radio"
                  class="radio"
                  id="tutorials"
                  name="category"
                />
                <label for="tutorials">Both</label>
              </div>
            </div>

            <div class="selected">Select Donor type</div>

            <div class="search-box">
              <input type="text" placeholder="Start Typing..." />
            </div>
          </div>
          <button class="buttons"><a href="Search.php>"> Search</a></button>
        </div>
        <div class="custom-shape-divider-bottom-1650621276">
          <svg
            data-name="Layer 1"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1200 120"
            preserveAspectRatio="none"
          >
            <path
              d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
              opacity=".25"
              class="shape-fill"
            ></path>
            <path
              d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
              opacity=".5"
              class="shape-fill"
            ></path>
            <path
              d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
              class="shape-fill"
            ></path>
          </svg>
        </div>
      </div>
    </section>
    <!------------------------Section 4---------------------->
    <section class="whywe" id="whywe">
      <div class="section3">
        <div class="whywe-text">
          <h1>Why us?</h1>
          <p>
            There is a shortage to active blood donors to meet the need of
            increased blood demand. An integrated strategy for blood safety is
            required for the provision of safe and adequate blood. Recruiting a
            sufficient number of safe blood donors is an emerging challenge.
          </p>
        </div>
        <img class="animate__animated animate__bounce" src="images/why-we-blood.png" />
      </div>
    </section>
    <!----------------------------------footer---------------------------->
    <section>
    <footer class="footer">
      <div class="container">
          <div class="footer-col">
            <h4>Useful links</h4>
            <a href="#">About Us</a>
            <a href="#">Our Services</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Blog</a>
          </div>
          <div class="footer-col">
            <h4>Get Help</h4>
            <a href="#">FAQ</a>
            <a href="#">Blood bank</a>
            <a href="#">Eligibility</a>
            <a href="#">Contact us</a>
          </div>
          <div class="footer-col">
            <h4>Stay UPDATE!</h4>
            <form class="formin">
              <input type="text" placeholder="Your E-mail Address" />
              <button class='form-button'type="Submit">Subscribe Now!</button>
            </form>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fa fa-facebook-f"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
    <!------------------------Java script for toggle menu---------------------->
    <section id="hero-section"></section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--------nav sticky js-------->
    <script>
      $(document).ready(function () {
        $(window).scroll(function () {
          var scroll = $(window).scrollTop();
          if (scroll > 200) {
            $(".nav-links ul").addClass("red");
          } else {
            $(".nav-links ul").removeClass("red");
          }
        });
      });
    </script>
    <!--------search js-------->
    <script>
      const selectedAll = document.querySelectorAll(".selected");

      selectedAll.forEach((selected) => {
        const optionsContainer = selected.previousElementSibling;
        const searchBox = selected.nextElementSibling;

        const optionsList = optionsContainer.querySelectorAll(".option");

        selected.addEventListener("click", () => {
          if (optionsContainer.classList.contains("active")) {
            optionsContainer.classList.remove("active");
          } else {
            let currentActive = document.querySelector(
              ".options-container.active"
            );

            if (currentActive) {
              currentActive.classList.remove("active");
            }

            optionsContainer.classList.add("active");
          }

          searchBox.value = "";
          filterList("");

          if (optionsContainer.classList.contains("active")) {
            searchBox.focus();
          }
        });

        optionsList.forEach((o) => {
          o.addEventListener("click", () => {
            selected.innerHTML = o.querySelector("label").innerHTML;
            optionsContainer.classList.remove("active");
          });
        });

        searchBox.addEventListener("keyup", function (e) {
          filterList(e.target.value);
        });

        const filterList = (searchTerm) => {
          searchTerm = searchTerm.toLowerCase();
          optionsList.forEach((option) => {
            let label =
              option.firstElementChild.nextElementSibling.innerText.toLowerCase();
            if (label.indexOf(searchTerm) != -1) {
              option.style.display = "block";
            } else {
              option.style.display = "none";
            }
          });
        };
      });
    </script>
    <!--------search js icon toogle-------->
    <script>
      var selectfield = document.getElementById("selectfield");
      var selecttext = document.getElementById("selecttext");
      var options = document.getElementsByClassName("options");
      var list = document.getElementById("list");
      var arrowicon = document.getElementById("arrowicon");

      selectfield.onclick = function () {
        list.classList.toggle("hide");
        arrowicon.classList.toggle("rotate");
      };

      for (option of options) {
        option.onclick = function () {
          selecttext.innerHTML = this.textcontent;
          list.classList.toggle("hide");
          arrowicon.classList.toggle("rotate");
        };
      }
    </script>
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
    <!--------menu js-------->
    <script>
      $(document).ready(function () {
        $(".mobile-nav i").click(function () {
          $(".nav-links").toggleClass("mobile-nav");
        });
      });
    </script>
  </body>
</html>
