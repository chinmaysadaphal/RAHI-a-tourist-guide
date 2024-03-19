

<!-- Display the contents -->


<?php
session_start();
if(!isset($_SESSION['is_login'])){
  header('location:../signin.php');
}
?>



<?php
include("../connection.php");









$query = "SELECT * FROM `tours`";
$data = mysqli_query($conn,$query); // query execute or not

$total = mysqli_num_rows($data);    // tables number rows will be displayed

if($total !=0){

    ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>

  <style>

    body{
        background-color:rgb(245, 242, 241);
    }

    .cardimg{
        margin-top:10px;
        margin-left:400px;
        width:40%;
        height:300px;
    }
    
    img{
        text-align:center;
        
    }

    @media (max-width:426px){

      .cardimg{
        all:revert;
      }

    }
  </style>

  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                  <a class="nav-link" href="../logout.php">Logout</a>
                </li>
              </ul>
    </div>
  </div>
</nav>

    <h1 align="center" style="margin-top:30px">New Trips</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

<?php

    while($result= mysqli_fetch_assoc($data)){

      $sum =  array("  <div class='container' id='con'> 
        <div class='row'>
            <article class='card col'>
                <img class='card-img cardimg' align='center' src='".$result['img_name']."' alt='' '>
                <h4 align='center'> ".$result['names']." </h4>
                <p align='center'>".$result['descriptions']." </p>
                
    
            </article>
            </div>
            </div>
            ");

            // <button href='delete.php?names=$result[names]' align='center' onclick='return checkdelete()' >Delete</button>
        
        echo $sum[0];
         
        echo "<hr>";
    }
}
else{
    echo "table has no record";

}



?>


<script>

  function checkdelete(){

    return confirm('Are you wont to delete?')
  }

  </script>

