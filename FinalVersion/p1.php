<?php
  session_start();
  if (isset($_SESSION["role"]))
  {
    $role = $_SESSION["role"];
    $username = $_SESSION["username"];
  }
  else
    $role = "role";
?>


<!DOCTYPE html>
<html>
<title>Farm App</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
  height: 100%;
  line-height: 1.8;
}
.grey-background{
  background-color: #76987B;
}

.pr_column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.pr_row::after {
  content: "";
  clear: both;
  display: table;
}


.w3-bar .w3-button {
  padding: 16px;
}


.accordion {
  background-color: black;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
}
.accordion:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
  font-size: 13px;
  color: black;
  float: right;
  margin-left: 5px;
}
.active:after {
  content: "\2796"; /* Unicode character for "minus" sign (-) */
}
/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .accordion:hover {
  background-color: #ccc;
  color:black;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

</style>

<body>



<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="landing.php#home" class="w3-bar-item w3-button w3-wide"><img class="w3-image w3-round-large" src="Images/logo.jpeg" alt="LOGO" width="100" height="80"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
    <a href="experts.html" class="w3-bar-item w3-button" id="experts"><i class="fa fa-edit"></i> EXPERTS</a>
      <a href="landing.php#about" class="w3-bar-item w3-button"><i class="fa fa-info-circle"></i> ABOUT</a>
      <a href="landing.php#iot" class="w3-bar-item w3-button"><i class="fa fa-cogs"></i> IoT</a>
      <a href="landing.php#products" class="w3-bar-item w3-button"><i class="fa fa-th"></i> PRODUCTS</a>
      <a href="landing.php#dept" class="w3-bar-item w3-button"><i class="fa fa-building"></i> DEPARTMEMTS</a>
      <a href="landing.php#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#faq" class="w3-bar-item w3-button"><i class="fa fa-comment"></i> FAQs</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <a href="login.html" class="w3-bar-item w3-button" id="log"><i class="fa fa-key"></i> LOG IN</a> 
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

   



<!-- Sidebar on small screens when clicking the menu icon -->

<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">

  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>

  <a href="landing.php#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>

  <a href="landing.php#iot" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-cogs"></i>IoT</a>

  <a href="landing.php#products" onclick="w3_close()" class="w3-bar-item w3-button">PRODUCTS</a>

  <a href="landing.php#dept" onclick="w3_close()" class="w3-bar-item w3-button">DEPARTMENTS</a>

  <a href="landing.php#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>

  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>

</nav>











<!-- Product 1 -->

<div class="bgimg-1 w3-display-container w3-grayscale-min" id="p1">

  <div class="w3-container " style="padding:100px 16px">

    <!--<img style="margin-left:500px;" src="Images/farm.png">-->
    <center><img src="Images/farm.png" style="width:20%"></center>
    <div class="w3-container w3-light-grey">

      <p style="text-align:center;margin-right:100px;margin-left:100px;padding-right:60px">We are business intelligence for agriculture business and farmers.

         We integrate m2m solutions, mobile application and big data tools

         to monitor and keep on track all the different factors affecting

         crops such as: pests, unbalanced soil, extreme weather conditions

          and agrochemicals abuse.</p>

    </div><br><br>

    <div>

    <h2 style="text-align:center">Description</h2>

    <hr style="margin-left:480px;margin-right:480px;border-width: 2px;">

    <h6 style="margin-top:80px;margin-right:100px;margin-left:300px;font-weight:bold;">MONITORING</h6>

    <p style="margin-right:500px;margin-left:100px;padding-right:150px">Simplify the process of monitoring pests, diseases and beneficials with

      our easy to use mobile applications. Recording the data is easy and more

       efficient than using traditional methods such as paper.</p>

    <p style="margin-right:500px;margin-left:100px;padding-right:150px"> The following metrics can be immediately observed:<br>

      <ul>

    <li style="margin-right:500px;margin-left:100px;padding-right:150px">Satelite map with the recorded points. Allows you to get an overview of the current sanitary status of the farm.</li>

    <li style="margin-right:500px;margin-left:100px;padding-right:150px">Comparative heatmaps to easily compare previous measures with the current status</li>

    <li style="margin-right:500px;margin-left:100px;padding-right:150px">Charts and reports with the INCIDENCE and SEVERITY of pests and diseases</li>

  </ul>

    </p>



  </div>

  <div>

    <img src="Images/p1.png" width="200" height="300" style="margin-left:900px;margin-top:-350px;" onClick="onClick(this)">
    <!--<img src="Images/p1.png" style="width:10%; margin-left: 60%; margin-top: 5%" onclick="onClick(this)">-->

    </div>



    <div>

    <h6 style="margin-top:80px;margin-right:100px;margin-left:220px;font-weight:bold;">SENSORS and WEATHER STATIONS</h6>

    <p style="margin-right:500px;margin-left:100px;padding-right:150px">Farmapp offers weather forecasts based on satellite images and proprietary algorithms.</p>

    <p style="margin-right:500px;margin-left:100px;padding-right:150px">Soil sensors and weather stations to capture real time data:<br>

      <ul>

    <li style="margin-right:500px;margin-left:100px;padding-right:150px">Sensors installed in the field capturing and transmitting real-time metrics such as soil moisture, relative humidity, air & soil temperature, radiation.</li>

    <li style="margin-right:500px;margin-left:100px;padding-right:150px">Receive real-time alerts based on weather conditions and its relation to pests & diseases</li>

    </ul>

    </p>



  </div>

  <div>

    <img src="Images/p12.png" width="400" height="200" style="margin-left:800px;margin-top:-350px;" onclick="onClick(this)">
    <!--<img src="Images/p12.png" style="width:40%" onclick="onClick(this)">-->

    </div>



    <div>

    <h6 style="margin-top:80px;margin-right:100px;margin-left:220px;font-weight:bold;">SPRAYING ( FUMIGATION )</h6>

    <p style="margin-right:500px;margin-left:100px;padding-right:150px">Allows for tracking the routes and speed of movement of the sprayer in order to optimize the quantity of the product supplied and to control the application of agrochemicals and fertilizers in the field.</p>

    <p style="margin-right:500px;margin-left:100px;padding-right:150px">This module significantly reduces the use of agrochemicals and fertilizers in the crop.</p>



  </div>

  <div>

    <img src="Images/p13.png" width="400" height="200" style="margin-left:800px;margin-top:-270px;" onclick="onClick(this)">
    <!--<img src="Images/p13.png" style="width:40%" onclick="onClick(this)">-->

  </div><br>



    <div>

      <h2 style="text-align:center">Benefits</h2>

      <hr style="margin-left:500px;margin-right:500px;border-width: 2px;">

    </div>

    <div style="background-color: lightgrey;width: 300px;border: 2px;padding: 25px;margin: 25px;margin-left:150px;">COST OF PESTICIDES AND BIOLOGICAL CONTROL<br>

      <p>Save money with precision spraying and targeted release of natural enemies</p>

    </div>

    <div style="background-color: lightgrey;width: 300px;border: 2px;padding: 25px;margin: 25px;margin-left:507px;margin-top:-240px;">TIME BETWEEN MONITORING AND ACTION CONTROL<br>

      <p>Digitising the monitoring process allows you take actions on time. Forget about pen and paper</p>

    </div>

    <div style="background-color: lightgrey;width: 300px;border: 2px;padding: 25px;margin: 25px;margin-left:870px;margin-top:-240px;">WHEN, WHERE AND HOW TO SPRAY<br>

      <p>Our geo-referenced modules help you understand how and where the chemicals are applied</p>

    </div>

  </div>
  <div>
    <h3 style="text-align:center;"> Buy this for</h3>
    <hr style="margin-left:480px;margin-right:480px;border-width: 2px;">
    <h4 style="text-align:center;margin-bottom:100px;" >6000/-</h4>
  </div>

</div>



<!-- Modal for full size images on click-->

<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">

  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>

  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">

    <img id="img01" class="w3-image">

    <p id="caption" class="w3-opacity w3-large"></p>

  </div>

</div>







<!--FAQs-->

  <div class="w3-container w3-light-grey" style="padding:100px 50px" id="faq">
      <center><h3 >Frequently Asked Questions </h3></center><br>

      <button class="accordion">What risks and challenges should be considered in the Internet of Everything?</button>
    <div class="panel">
        <p>Some important considerations in the Internet of Everything include privacy, security, energy consumption and network congestion. The given products are less affected by these constraints. </p>
    </div>

    <button class="accordion">How can I know more about the products? </button>
    <div class="panel">
        <p>You can know about various products right from our website. Simply click on the 'View our products' to view them in detail and get to know more about them. </p>
    </div>

    <button class="accordion">Do you offer any discount?</button>
    <div class="panel">
        <p>Our pricing is based on a long term relationship aimed at giving maximum benefits to our customers.</p>
    </div>
    <button class="accordion">How do I contact you? </button>
    <div class="panel">
        <p>You can connect to us on our 24 hour service using the e-mail or the given customer-care number present on the website. </p>
    </div>

    <button class="accordion">Do we need internet connectivity?</button>
    <div class="panel">
        <p>Yes. Our products- FarmApp, Pycno and Cowlar require elastic internet connectivity for their working. </p>
    </div>


</div>
<!--End of FAQs-->



<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:100px 50px 0px 50px; " id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Bangalore, India</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +80 22446688</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mail@smartfarmer.com</p>
    <br>
    <form action="" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
    
  </div>
</div>






<!-- Footer -->

<footer class="w3-center w3-black w3-padding-64">

  <a href="#" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>

  <div class="w3-xlarge w3-section">

    <i class="fa fa-facebook-official w3-hover-opacity"></i>

    <i class="fa fa-instagram w3-hover-opacity"></i>

    <i class="fa fa-snapchat w3-hover-opacity"></i>

    <i class="fa fa-pinterest-p w3-hover-opacity"></i>

    <i class="fa fa-twitter w3-hover-opacity"></i>

    <i class="fa fa-linkedin w3-hover-opacity"></i>

  </div>



</footer>



<script>
// Modal Image Gallery
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    // var captionText = document.getElementById("caption");
    // captionText.innerHTML = element.alt;
  }
  function w3_open() {
      if (mySidebar.style.display === 'block') {
      mySidebar.style.display = 'none';
      } else {
      mySidebar.style.display = 'block';
      }
  }
  // Close the sidebar with the close button
  function w3_close() {
      mySidebar.style.display = "none";
  }
</script>

<?php
  
  if ($role == "admin" || $role == "expert")
  {
    echo "<script type='text/javascript'>
      var a = document.getElementById('experts');
      a.style.visibility = 'visible';
      var b = document.getElementById('log');
      b.innerHTML = 'LOGOUT';
      b.href = 'logout.php';
      </script>";
  } 
  else
  {

    if ($role == "enduser") {

    echo "<script type='text/javascript'>
      var a = document.getElementById('experts');
      a.style.visibility = 'hidden';
      var b = document.getElementById('log');
      b.innerHTML = 'LOGOUT';
      b.href = 'logout.php';
      </script>";
    }

    else {
    echo "<script type='text/javascript'>
      window.location.href = 'login.html';
      </script>";
    }
  }
?>

</body>
</html>
