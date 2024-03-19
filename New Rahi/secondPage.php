
<?php
session_start();
if(!isset($_SESSION['is_login'])){
  header('location:signin.php');
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rahi Tours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="home.css">
    <script src="search.js"></script>
    
  </head>

  <style>

header{
  background-image: url("img/home1.jpg");
}

.image{
  background-image: url("img/bg.png");
  }

  .imageview{

background-image: url("img/bg2.png");

}


    .container1{
      display: flex;
    }

    .container3{
      margin-left: 500px;
    }

    @media(max-width:1048px){
      .container1{
        flex-direction: column;
      }

      .container2{
        all:revert;
        text-align: center;
      }

      .container3{
        all:revert;
        text-align: center;
      }
    }
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="color: rgb(172, 5, 250);">RAHI- THE TOURISUM WEBSITE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="firstPage.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tours">Tour</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#con">Explore</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Admin/Display.php">Upcoming Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" id="box" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit" onclick=" search()" >Search</button>
            </form>
          </div>
        </div>
      </nav>

      <!-- header - Website content logo header of website -->
      <header class="home">
        <div class="header-content">
            <h2  id="quote">Make Your Tour Beautiful</h2>
            <h1 >"RAHI"- A website of a tourism agency for tourists </h1>
        </div>
    </header>


    <!--Events-->
    <div class="container" id="con"> <!-- container used to leave margin from all the side  -->
      <h1 class="text" align="center" style="margin-top:30px">Choose Your Trip</h1>
      <h2>India</h2>
      <div class="row">
          <article class="card col">
              <img class="card-img cardimg" src="img/banglore2.jpg" alt="" height="65%">
              <h4 align="center">Banglore</h4>
              <p>Bengaluru (also called Bangalore) is the capital of India's southern Karnataka state. The center
                 of India.</p>
              <a href="Journeys/j6.php" class="ctn">View Details</a>
          </article>
          <article class="card col">
              <img class="card-img" src="img/delhi.jpg" alt="" height="65%">
              <h4 align="center">Delhi</h4>
              <p>Delhi, officially the National Capital Territory (NCT) of Delhi, is a city and a union territory 
                  the capital of India.</p>
              <a href="Journeys/j5.php" class="ctn">View Details</a>
          </article>
          <article class="card col">
              <img class="card-img" src="img/nepal1.jpg" alt="" height="65%">
              <h4 align="center">Nepal</h4>
              <p>Nepal officially the Federal Democratic Republic of Nepal is a landlocked country in South Asia.</p>
              <a href="Journeys/j4.php" class="ctn">View Details</a>
          </article>
      </div><br>
      <h2>Europe</h2>
      <div class="row">
          <article class="card col">
              <img class="card-img cardimg1" src="img/usa1.jpg" alt="" height="65%">
              <h4 align="center">USA</h4>
              <p>The United States of America, commonly known as the United States or
                     America</p>
              <a href="Journeys/j2.php" class="ctn">View Details</a>
          </article>
          <article class="card col">

              <img class="card-img " src="img/everest1.jpg" alt="" height="65%">
              <h4 align="center">Everest</h4>
              <p>Everest base camp track is without a doubt, one of the most renowned travel destinations </p>

              <a href="Journeys/j1.php" class="ctn">View Details</a>
          </article>
          <article class="card col">
              <img class="card-img "  src="img/russia.jpg" alt="" height="65%">
              <h4 align="center">Rassia</h4>
              <p>Russia or the Russian Federation, is a transcontinental country Eastern Europe.It is 
                    the largest country</p>
              <a href="Journeys/j3.php" class="ctn">View Details</a>
          </article>
      </article>
     
  </div>
  </div>

  <div class="image">

  </div>


 <!--tours-->
   <h1 align="center" style="margin-top: 20px; margin-bottom: 20px;">UPCOMING TOURS & DESTINATION</h1>
    <div class="container1" id="tours">
      <div class=" container2 content-col" >
          <p>Wed 28 sept 2023 : Port of Spain Tour and Birds Fort View. </br>
             Sat 1 oct 2023 : Tour the Gasparee Caves.</br>
             Tues 4 oct 2023 : Trinidad North Coast Experience. </br> 
              and many more ......
           </p>
          <a href="upcoming_tour.php" class="ctn">Explore more</a>
      </div>
      <div class="container3">
              <img src="img/img3.png" alt="" class="img1">
      </div>
  </div><br>



<section class="imageview">
</section>
    
<!--footer-->
<footer class="footer" id="footer">
  <h2>Travelers And Tours</h2>
      <div class="footer-col">
        <h4>Contact Us</h4>
        <p >Looking to explore the world? We can help you with 'just' what you've been looking for.<br> Call/Whatsapp our travel agents to gain the best travel experience there is on +91-1234567899</p>
  </div>
</footer>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>