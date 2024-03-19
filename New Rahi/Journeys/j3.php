
<?php
include("../connection.php");

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tours</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="journey.css">
</head>

<style>
.box{
    background-image: url(../img/russia5.jpg) ;
}


    @keyframes slider {
    0%{
        background-image: url(../img/russia1.jpg);
    }

    35%{
        background-image: url(../img/russia2.jpg);
    }
    75%{
        background-image: url(../img/russia3.jpg);
    }
}

.maindiv{
    background-image: url(../img/russia1.jpg);

}

.row1{
  text-align:center;
}
.row2{
  text-align:center;
}

</style>

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
            <a class="nav-link active" aria-current="page" href="../secondPage.php">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#explore">Explore</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact.php">Contact</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="../signin.php">Logout</a>
          </li> -->
        </ul>
       
      </div>
    </div>
  </nav>

  <div class="box">
  <div class="bg1">

    <!-- <img src="../img/russia1.jpg" alt="" class="img2" width="100%" height="100%" > -->
  </div>
</div>

  <div class="flex">

    <div class="imgs">
      <div class="row1">
      <img src="../img/russia1.jpg" alt="" width="390px" height="330px" style="border-radius: 20px;">
      <img src="../img/russia2.jpg" alt="" width="390px" height="330px"  style="border-radius: 20px;">
    </div>
    <div class="row2">
      <img src="../img/russia3.jpg" alt="" width="390px" height="330px" style="border-radius: 20px;">
      <img src="../img/russia4.jpg" alt="" width="390px" height="330px " style="border-radius: 20px;">
    </div>
    </div>


  <div class="container ">
    <h1 class="header">Registration Form</h1>

    <div class="form-container ">
  <form class="signup-form"  method="post">

    <!-- form body -->

      <!-- Firstname and Lastname -->
      <div class="ffname input-name">
          <label for="firstname" class="label-title">First name *</label><br>
          <input type="text" id="firstname" name="fname" class="name" placeholder="enter your first name" required="required" /><br>
        </div>
        
        <div class="flname input-name">
          <label for="lastname" class="label-title">Last name</label><br>
          <input type="text" id="lastname" name="lname" class="name" placeholder="enter your last name" /><br>
        </div>

      <!-- Email -->
      <div class="femail input-name">
        <label for="email" class="label-title">Email*</label><br>
        <input type="email" id="email" name="eemail" class="name" placeholder="enter your email" required="required"><br>
      </div>

      <div class="femail input-name">
        <label for="text" class="label-title">Source*</label><br>
        <input type="text" id="stext" name="source" placeholder="enter your Source City" required="required"><br>
      </div>

      <div class="femail input-name">
        <label for="text" class="label-title">Destination*</label><br>
        <input type="text" id="stext" name="destination" class="name" placeholder="enter your Destination city" required="required"><br>
      </div>

      <!-- Gender and Hobbies -->
      <div class="fgender input-name">
          <label class="label-title">Gender:</label><br>
            <label for="male"><input type="radio" name="r1" value="male" id="male"> Male</label>
            <label for="female"><input type="radio" name="r1" value="female" id="female"> Female</label><br>
          </div>
    
          <!-- Prrof -->
      <div class="fproof input-name">
        <label for="text" class="label-title">Passport Number*</label><br>
        <input type="text" id="stext" name="passname" class="name" placeholder="enter your Password number" required="required"><br>
        </div>

        <!-- Country -->
        <div class="input-name">
          <select class="country" name="country">
            <option>Select a Country</option>
            <option>India</option>
            <option>Rassia</option>
            <option>USA</option>
            <option>Nepal</option>
            <option>Japan</option>
          </select>
        </div> 



      <!-- Bio -->
      <div class="fbio input-name">
        <label  class="label-title">Bio</label><br>
        <textarea class="form-input" name="bio" rows="4" cols="50" style="height:auto"></textarea>
      </div>

      <p name="para">

      </p>

    <!-- form-footer -->
    <div class="input-name">
      <span>* required</span>
      <input type="submit" id="creates" name="create" class="button" value="Create">
    </div>

      </div>
    </div>
  </form>
</div>
  
  <!-- Animations -->
  <h1 class="h1tag" id="explore">Russia Tour</h1>
  <div class="textalign">
  <ul>
    
    <li>Tourism in Russia has seen rapid growth since the late Soviet times, first domestic tourism and then international tourism as well. Rich cultural heritage and natural variety place Russia among the most popular tourist destinations in the world.</li><br>

    <li>Major tourist routes in Russia include a travel around the Golden Ring of ancient cities, cruises on the big rivers including the Volga, and long journeys on the Trans-Siberian Railway. </li><br>
    
    <li>Diverse regions and ethnic cultures of Russia offer different foods and souvenirs, and show a great variety of traditions, including Russian Maslenitsa, Tatar Sabantuy, or Siberian shamanist rituals.</li><br>
    <li>Over 25 years of experience in high altitude expeditions</li>
    <br>
    <li>This section discusses various aspects of climbing Mount Everest. From basic information like how to climb it to more technical details like how people get oxygen on their way up.</li>
    <br>
    <li>Central European Russia (e.g. Moscow, Saint Petersburg, Nizhny Novgorod, Kazan, etc.) is in the same climate zone as the Baltic states, Belarus, and northern Ukraine. </li>
     <br>Without a doubt, Mt. Everest(8848 m) is one of the most challenging mountains to climb in the world;</li><br>
     <li> Many experienced mountaineers have seen life giving up on them at this very peak. Extreme willpower, discipline, and courage are what you must have in you for the Everest expeditions. </li><br>
     <li>And another thing that you have to have is years of experience in mountaineering, especially above 6000 meters. Going unprepared is never an option when it comes to life-threatening adventures. </li><br>
     <li> Alpinist who dreams to summit Mt. Everest must be well equipped for the Everest expedition.
    </ul>
  </div>


  <div class="maindiv">
  </div><br>

  <div class="resposives">
  <div class="description">

    <h1>Description</h1>
    <ol class="lists">
      <li>Domestic airport drop / pickup in private vehicle</li>
        <li>Twin sharing lodge accommodation during the trek.</li>
        <li>Full board meals (breakfast, lunch and dinner) during the trek.</li>
        <li>Experienced, helpful and friendly guide 
        <li>Round trip flight Kathmandu – Lukla and Lukla – Kathmandu including departure taxes
        <li>First aid medical kit</li>
        <li>Sagarmatha National Park Permits fee.</li>
        <li>TIMS Fee- Trekkers' Information Management System</li>
        <li>Government taxes & office service charge</li>
      </ol>
  </div><br>

  <div class="details ">
    <h3>Route Description: </h3> &nabla; Leh (4N)
    <br><br>

    <h3>Duration: </h3>04 Nights and 05 Days
    <br><br>

    <h3>Highlights:</h3>
    <ol class="lists">
          <li>Stay in Hotels for Solos, Couples, Friends, and Family with Breakfast and Dinner.</li>
          <li>4 Nights and 5 Days</li>
          <li>Leh Local Sightseeing</li>
          <li>Sightseeing in Nubra Valley and Pangong Tso</li>
</ol>
  </div>
<br>

  <h1 style="margin-left: 200px;">Price Per Person</h1>
  <div class="tables">
    <table border="1" cellspacing="0" align="center" width=80% class="tb">
      <tr>
        <th>Per Person</th>	
        <th>Deluxe</th>
        <th>Super Deluxe	</th>
        <th>Premium</th>
        <th>Luxury</th>
      </tr>
      <tr>
        <td>2</td>			
        <td>25,625</td>
        <td>26,875</td>
        <td>34,313</td>
        <td>56,813</td>
      </tr>
      <tr>
        <td>4</td>			
        <td>25,625</td>
        <td>26,875</td>
        <td>34,313</td>
        <td>56,813</td>
      </tr>
      <tr>
        <td>6</td>			
        <td>25,625</td>
        <td>26,875</td>
        <td>34,313</td>
        <td>56,813</td>
      </tr>
      <tr>
        <td>8</td>			
        <td>25,625</td>
        <td>26,875</td>
        <td>34,313</td>
        <td>56,813</td>
      </tr>
      <tr>
        <td>10</td>			
        <td>25,625</td>
        <td>26,875</td>
        <td>34,313</td>
        <td>56,813</td>
      </tr>
    </table>
  </div></div><br><br>

  <div class="toggle">
  <button class="btn1" name="button1" id='1' onclick="changeText1()">Inclusion</button>
  <button class="btn2" name="button2" id='2' onclick="changeText2()">Exclusion</button>
  <div id="text" >

    

  </div>
  
</div><br>

<p class="textalign">Our participation process is very simple. You may book online to reserve your seat or call us at 7827956056 between 09:00 AM to 09:00 PM on any working day.
   Alternatively, you may email us at info@rahi.org for booking and assistance. You may deposit Rs.1,000 Per Person and Balance as per our Payment Policy.</p>

<a href="../payment.html"><input type="submit" class="btn1" value="Proceed to Pay" style="width: 150px;"></a> <br><br>

  <!-- <section class="footer">
    <h2>Travelers And Tours</h2>
     
  </section> -->

  <footer class="footer">
    <h2>Travelers And Tours</h2>
        <div class="footer-col">
          <h4>Contact Us</h4>
          <p >Looking to explore the world? We can help you with 'just' what you've been looking for.<br> Call/Whatsapp our travel agents to gain the best travel experience there is on +91-1234567899</p>
    </div>
  </footer>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

<script>
  function changeText1(){
    let id=document.getElementsByName("button1")[0].id;
          document.getElementById("text").innerHTML = "<ol type='1'><li>Stay in pre-booked hotels at Leh.</li><li> Buffet Breakfast will be available from Day 2 till Day 5 and Buffet Dinner will be available from Day 1 till Day 4.</li><li> Inner Line Permits for all the travelers.</li><li> Private Taxi for all the sightseeing as per the itinerary.</li><li> Leh Local Sightseeing.</li><li> Transfers to Nubra Valley and Pangong Tso.</li></ol>";
    }
    
    function changeText2(){
    let id=document.getElementsByName("button2")[0].id;
      document.getElementById("text").innerHTML = "<ol type='1'><li>Personal expenses like Telephone, Laundry, Tips, and Table Drinks, etc.</li><li>Any type of Insurance Medical, Accidental, and Theft.</li> <li> Pick-up or Drop – Airport, Railway station, or Bus Stop</li>  <li> Any Airfare / Rail fare other than what is mentioned in “Inclusions”.</li> <li> Parking, Monastery, and Monument entry fees during sightseeing.</li></ol>";
  }
</script>

</html>




<?php


if(isset($_POST['create']))
{
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['eemail'];
  $source = $_POST['source'];
  $destination = $_POST['destination'];
  $gender = $_POST['r1'];
  $passnumber = $_POST['passname'];
  $country = $_POST['country'];
  $bio = $_POST['bio']; 


  $emailquery = "select * from signup where email='$email'";
  
  
  $q = mysqli_query($conn,$emailquery);
  $emailcount = mysqli_num_rows($q);
  
  if($emailcount>0){
      echo "<script> alert('email already exist! ') 
      window.location = 'j3.php';
      </script>";
    }else{
        if($pass === $cpassword){
            
          $query = "INSERT INTO registration (first_name,	last_name,email,source,destination,gender,passport_number,country,bio	) VALUES ('$fname','$lname','$email','$source','$destination','$gender','$passnumber','$country','$bio')";
            $data = mysqli_query($conn,$query);
        }
  }


 if($data)
 {
  echo "<script> alert('You Successfully get Registered!') 
 window.location = 'j3.php';
</script>";
  }

  else{
    echo "<script> alert('Failed to Insert Data') ;
    window.location = 'j3.php';
    </script>";
    }
  
  
}


  
//   $query = "INSERT INTO registration (first_name,	last_name,email,source,destination,gender,passport_number,country,bio	) VALUES ('$fname','$lname','$email','$source','$destination','$gender','$passnumber','$country','$bio')";
  
//   $data = mysqli_query($conn,$query);
  
//   $para = $_POST['para']; 

// if($data)
// {
//  echo "<script> alert('You Successfully get Registered!') 
//  window.location = 'journey.php';
// </script>";
    
// }
// else{
//   // echo "<script> alert('Failed to Insert Data') </script>";
// }
// }

?>