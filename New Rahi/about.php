
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
  <title>About Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <style>
    body {
      background: rgb(234, 236, 235);
    }

    .container {
      display: flex;
      background: white;
      /* margin-top: 100px;
      margin-right: -220px; */
      /* margin-left: 220px; */
      width: 70%;
      /* text-align: center; */
    }

    .part1{
      margin-left:100px;
    }

    img {
      margin-bottom: 10px;
      margin-top: 50px;
    }

    @media(max-width:768px) {



      .container {
        all: revert;
        text-align: center;
        flex-direction: column;
      }


    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color: rgb(172, 5, 250);">RAHI- THE TOURISUM WEBSITE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="secondPage.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <h1 style="text-align: center; margin-top: 25px;"> About Us</h1>
  <div class="container">

    <div class="part1">
      <div class="image">
        <img src="img/chinmay.jpg" alt="" class="img" width="30%" height="20%">
        <h3>Chinmay Sadafal</h3>
        <p>html,css, c/c++, Data Science</p>
      </div>
      <div class="image">
        <img src="/img/om.png" alt="" class="img" width="30%" height="30%">
        <h3>Om Sabne</h3>
        <p>html css javascript c/c++ python AIML</p>
      </div>
    </div>
    <div class="part2">
      <div class="image">
        <img src="/img/ashu.png" alt="" class="img" width="70%" height="70%">
        <h3>Ashutosh Rohom</h3>
        <p>html css javascript c/c++ Python</p>
      </div>
    
      <div class="image">
        <img src="img/akshay.jpg" alt="" class="img" width="70%" height="70%">
        <h3>Akshay Shinde</h3>
        <p>Html css javascript, Java, php, c/c++</p>
  </div>
  </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>