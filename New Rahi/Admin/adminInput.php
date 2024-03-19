

<?php
include("../connection.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Form</title>
  </head>
  <style>
    
    
    
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
      height: 50%;
      border-radius: 6px;
      margin-bottom: 10px;
    }
    .desc{
      background-color: #eeeeee;
      width: 100%;
      height: 8%;
      border-radius: 6px;
      margin-bottom: 10px;
    }
    
    
    
    .submit{
      font-weight: bold;
      color: white;
        background-color: rgb(88, 88, 253);
        width: 100%;
        border-radius: 25px;
        height: 40px;
      }
      
      
      
      .text{
        margin-top: 50px;
        margin-bottom: -40px;
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
  
    <!-- enctype="multipart/form-data" security purpose -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">RAHI- THE TOURISUM WEBSITE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../secondPage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Display.php">Lists</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- enctype="multipart/form-data" security purpose -->

    <h1 align="center" class="text">TO DO LIST</h1>
    <div class="container">
        <div class="form" style="margin-left: 40px;">
    <form method="post" enctype="multipart/form-data">
        <label>Enter Tour</label><br>
        <input type="text" class="name" name="fname" id="fname" placeholder="Enter Tour" ><br>
        <label>Enter Description</label><br>
        <input type="text" class="desc" name="descrip" id="descrip" placeholder="Enter Description"><br>
        <label>Enter Image</label><br>
        <input type="file" class="name" name="upload_file" id=""><br>
        <input type="submit" id="creates" class="submit" name="create" class="button" value="Create">
    </form>
    </div>
    </div>


    
    
</body>
</html>

<?php



// $filename = $_FILES["upload_file"]["name"];  // display termss as array bring its name
// $tempname = $_FILES["upload_file"]["tmp_name"];  // display termss as array automaticaly generated bring its temperaroy name

// // print_r($_FILES["upload_file"]);  // print the array

// $folder = "images/".$filename;  // here name of the file is known

// // echo $folder;

// move_uploaded_file($tempname,$folder);  // file will be uploaded to images folder from temperary name

// // <img src="images/IMG-20211003-WA0036.jpg" height="100px" width="200px">
// echo "<img src= '$folder' height='100px' width='200px'>" ;



// ?>

<?php

if($_POST['create']){


    $filename = $_FILES["upload_file"]["name"];  // display termss as array bring its name
$tempname = $_FILES["upload_file"]["tmp_name"];  // display termss as array automaticaly generated bring its temperaroy name

$folder = "images/".$filename;  // here name of the file is known

move_uploaded_file($tempname,$folder);  // file will be uploaded to images folder from temperary name





    
    $name = $_POST['fname'];
    $des = $_POST['descrip'];
    $query = "INSERT INTO tours (names,img_name,descriptions) VALUES ('$name','$folder','$des')";

    // echo $name;
    // echo $des;
    // $data = mysqli_query($conn,$query);
    $data = mysqli_query($conn,$query);
    // echo"akshay";

if($data){
    echo "<script> alert('You Successfully get Registered!') </script>";
}
else{
    echo "<script> alert('You UnSuccessfully get Registered!') </script>";

}
}
?>




