
<?php
include("connection.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp/SignIn</title>
    <script src="https://kit.fontawesome.com/84e67a5a3d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="container">

        <div class="form-box">
            <h1 id="title">Sign In</h1>
            <form  method="POST" action="<?php htmlentities($_SERVER['PHP_SELF']); ?>">
                <div class="input-group">

                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="email" id="email" name="email" placeholder="Email" required>

                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="password" name="password" id="pass" placeholder="Password" required>

                    </div>
                    
                </div>
                
                <div class="btn-field">
                    <input type="submit" id="SignInbtn" name="signin" value="Sign in">
                    <input type="reset" id="SignInbtn1" name="signin1" value="Reset">
                </div>
                <p>Not Have an Account? <a href="signup.php">Sign Up</a></p>
            </form>

        </div>

    </div>

   
</body>
</html>


<?php

if(isset($_POST['signin']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    $query = "Select * from signup where email='$email' ";
    $data = mysqli_query($conn,$query);
   $email_count = mysqli_num_rows($data);      // check email present in the row of the database table if yes login else no email exist
    if($email_count){
        
        $email_pass = mysqli_fetch_assoc($data);
        
        $db_email = $email_pass['email'];
        $db_pass = $email_pass['password'];

        $pass_decode = password_verify($password,$db_pass);

    // If admin pass match input pass it will go to adminInput page for adding events

    if( $db_email==="akshayshindepatil000@gmail.com" && $password==="xyz"){
        echo "<script> alert('Successful') </script>";
        header("Location: Admin/adminInput.php");
    }

    else if($pass_decode){
        session_start();
        $_SESSION['is_login']=true;    // Start the session with name is_login
        echo "<script> alert('Successful') </script>";
        header("Location: secondPage.php");
    }
    else{
        echo "<script> alert('Password not match!') </script>";
    }
}else{
        echo "<script> alert('Email not Match') </script>";

    }



  }

  

?>