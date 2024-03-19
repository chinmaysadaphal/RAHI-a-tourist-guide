
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
            <h1 id="title">Sign Up</h1>
            <form  method="POST">
                <div class="input-group">
                    <div class="input-field " id="namefield">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="username" placeholder="Name" >

                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="email" name="email" placeholder="Email" required>

                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="password" name="password" placeholder="Password" required>

                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="password" name="cpassword" placeholder="Confirm Password" required>

                    </div>

                    
                </div>
                
                <div class="btn-field">
                    <input type="submit" id="SignUpbtn" name="signup" value="Sign up">
                </div>
                <p>Have an Account? <a href="signin.php">Log in</a></p>
            </form>

        </div>

    </div>

    <script>

        let SignUp = document.getElementById("SignUpbtn");
        let SignIn = document.getElementById("SignInbtn");
        let namefield= document.getElementById("namefield");
        let title = document.getElementById("title");

        SignIn.onclick = function(){
            namefield.style.maxHeight=0;
            title.innerHTML = "Sign In";
        }

        SignUp.onclick = function(){
            namefield.style.maxHeight="65px";
            title.innerHTML = "Sign Up";
        }
    </script>
    
</body>
</html>


<?php

if(isset($_POST['signup']))
{
    // echo "akshay";
  $name = $_POST['username'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  $passs = password_hash($pass,PASSWORD_BCRYPT);
  $cpass = password_hash($cpassword,PASSWORD_BCRYPT);
  
  $emailquery = "select * from signup where email='$email'";
  
  
  $q = mysqli_query($conn,$emailquery);
  $emailcount = mysqli_num_rows($q);
  
  if($emailcount>0){
      echo "<script> alert('email already exist') </script>";
    }else{
        if($pass === $cpassword){
            
            $query = "INSERT INTO signup (name,email,password,confirm_password) VALUES ('$name','$email','$passs','$cpassword')";
            $data = mysqli_query($conn,$query);
        }
        else{
            
            echo "<script> alert('password not match') </script>";
        
    }
  }


 if($data)
 {
   echo "<script> alert('Data Inserted Successfully') </script>";
   header("Location: secondPage.php");
  }
  
  
}

?>