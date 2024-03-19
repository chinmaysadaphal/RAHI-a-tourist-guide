
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
    <title>UpComing Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<style>
    .container {
        display: flex;
        /* max-width: 40%; */
        background-color: #f2f2f2;
    }

    .first {
        width: 10%;
        background-color: purple;
        color: white;
        text-align: center;
        height: 20%;

    }

    .second {
        background-color: #f2f2f2;
        margin-left: 30px;
        margin-right: 80px;
    }
    
    .footer {
        padding-top: 20px;
        width: 100%;
        min-height: 40px;
        text-align: center;
        background: #e5e2e2;
    }
    
    @media (max-width:426px){
        .container{
            all:revert;
            flex-direction: column;
            text-align: center;
        }
        .first {
            all:revert;
            
        margin-left: 150px;
        margin-right: 150px;
        background-color: purple;
        }
        
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Upcoming Events</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav><br><br><br>

    <div class="container">
        <div class="first">
            <h1>29</h1>
            <p>Nov</p>

        </div>
        <div class="second">
            <h2>Balaji Temple</h2>
            <p>this one of the best tour of our life</p>

        </div>
        <div class="first">
            <h1>02</h1>
            <p>Dec</p>

        </div>
        <div class="second">
            <h2>Ladakh</h2>
            <p>this one of the best tour of our life</p>

        </div>
    </div><br>

    <div class="container">
        <div class="first">
            <h1>10</h1>
            <p>Dec</p>

        </div>
        <div class="second">
            <h2>Italy</h2>
            <p>this one of the best tour of our life</p>

        </div>
        <div class="first">
            <h1>01</h1>
            <p>Jan</p>

        </div>
        <div class="second">
            <h2>Germany</h2>
            <p>this one of the best tour of our life</p>

        </div>
    </div><br>
    <div class="container">
        <div class="first">
            <h1>20</h1>
            <p>Jan</p>

        </div>
        <div class="second">
            <h2>Jyotirling</h2>
            <p>this one of the best tour of our life</p>

        </div>
        <div class="first">
            <h1>31</h1>
            <p>Jan</p>

        </div>
        <div class="second">
            <h2>Sun Temple</h2>
            <p>this one of the best tour of our life</p>

        </div>
    </div><br>
    <div class="container">
        <div class="first">
            <h1>1</h1>
            <p>feb</p>

        </div>
        <div class="second">
            <h2>Zarkhand</h2>
            <p>this one of the best tour of our life</p>

        </div>
        <div class="first">
            <h1>2</h1>
            <p>March</p>

        </div>
        <div class="second">
            <h2>colombo fligt will be held</h2>
            <p>this one of the best tour of our life</p>

        </div>
    </div><br>
    <footer class="footer" id="footer">
        <h2>Travelers And Tours</h2>
        <div class="footer-col">
            <p>Looking to explore the world? We can help you with 'just' what you've been looking for.<br> Call/Whatsapp
                our travel agents to gain the best travel experience there is on +91-1234567899</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>