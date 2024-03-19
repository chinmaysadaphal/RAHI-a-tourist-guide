

<?php
session_start();
if(!isset($_SESSION['is_login'])){
  header('location:signin.php');
}
?>

<?php
include("connection.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>

  <style>

    .text1{
        text-align: center;
        margin-top: 25px;
        margin-bottom: -70px;
    }

    .container{
        display: flex;
        background: white;
        width:70%;
        margin-left: 200px;
        margin-top: 100px;
    }

    body{
        background-color: #c0d9f4;
    }


    .form{
        margin: 70px 81px 21px 200px;
    }
    .name{
        background-color:#eeeeee;
        width: 100%;
        height: 8%;
        border-radius: 10px;
        margin-bottom: 10px;
    }
    .email{
        background-color: #eeeeee;
        width: 100%;
        height: 8%;
        border-radius: 10px;
        margin-bottom: 10px;
    }
    
    .text{
        background-color: #eeeeee;
        width: 100%;
        margin-bottom: 10px;
        border-radius: 18px;
    }
    
    .submit{
        font-weight: bold;
        color: white;
        background-color: rgb(88, 88, 253);
        width: 100%;
        border-radius: 25px;
        height: 40px;
    }

    .image{
      margin-top:100px;
    }

    .footer {
            padding-top: 20px;
            width: 100%;
            min-height: 40px;
            text-align: center;
            background: #e5e2e2;
        }

    @media (max-width: 768px){
      .container{
        all:revert;
        flex-direction:column;
        text-align:center;
      }
    }

    
</style>

  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">RAHI- THE TOURISUM WEBSITE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="secondPage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">logout</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>

<h1 class="text1"> Contact Form</h1>
    <div class="container">
      <div class="form" style="margin-left: 40px;">
        <h2 >Get in touch</h2>
            <form action="" method="post">
            <input type="text" class="name" id="name" name="name" placeholder=" Name"><br>
            <input type="text" class="email" id="email" name="email" placeholder=" Email"><br>
                <textarea class="text" rows="10" cols="50" name="commentfield" id="commentfield" style="height:auto" placeholder="  Message"></textarea>

            <input type="submit" value="submit" class="submit" name="submit1" onclick="validate()">

          </form>
        </div>
        <div class="image11" style="background-image: url(img/message.png); background-repeat: no-repeat;">
            <img src="message.png" alt="" width="100%" height="70%">
            
          
            </div>
  </div> <br> <br>
 
    
    <!--footer-->
    <footer class="footer" id="footer">
        <h2>Travelers And Tours</h2>
        <div class="footer-col">
            <h4>Contact Us</h4>
            <p>Looking to explore the world? We can help you with 'just' what you've been looking for.<br> Call/Whatsapp
                our travel agents to gain the best travel experience there is on +91-1234567899</p>
        </div>
    </footer>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>


<?php

// isset - variable contains data or not
if(isset($_POST['submit1']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sugg = $_POST['commentfield'];
  
  $query = "INSERT INTO contact_form (name,email,suggestions) VALUES ('$name','$email','$sugg')";
  $data = mysqli_query($conn,$query);
  


 if($data)
 {
   echo "<script> alert('Data Inserted Successfully') 
   window.location = 'contact.php';</script>";
  }
  else{
    echo "<script> alert('Failed to Insert Data') </script>";
  }
  
}
?>
