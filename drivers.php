
<?php require('backend/Driver.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

  
<div class="header">
       <?php require('navbar.php'); 
      echo' <nav class="nav nav-div">
       <ul><a href="map.php"><li class="nav-item">Map</li></a></ul>
       </nav>';
       ?>

         
           <div class="box">
               <div class="item1">
                     <div class="header-text">
               <h3 class="text-light">"Just few Clicks"</h3>
               <p class="text-light">Travel with convenience and experiance the world of simplicity</p>

                      </div>
               </div>
          
           <div class="form-overlaye">
            <h2 class="text-auto text-light mt">Register As  a Driver</h2>
                <form action="newDriver.php" class="form" method="POST">

                
            
                    <div class="form-group">
                        <input type="text" name="fullName" placeholder="Fullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="comfirm_password" placeholder="Comfirm Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="licence" placeholder="Enter Drivers licensees number" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" placeholder="Phone Number" class="form-control"> </div>
                        <div class="form-group">
                        <input type="text" name="location" placeholder="Location" class="form-control"> </div>
                        <div class="form-group">
                        <input type="text" name="experiance" placeholder="Enten the Year you started driving" class="form-control"> </div>
                        <div class="form-group">
                        <input type="text" name="vehicle" placeholder="Enter the Mark of your vehicle" class="form-control"> </div>
                        
                        
                        <div class="form-group">
                        <button type="submit" class="form-control bg-primary text-light" style ="color:green" name = "register">Register</button>
                    </div>
              


          
          
                </form>
                </div>    
</div>


</div>
</div>
   <div class="main">
   <?php

foreach ($driver as $driver) {
    # code...
    $fullname=$driver['full_name'];
    $email=$driver['email'];
    $licence_nember=$driver['licence_number'];
    $experiance=$driver['experiance'];
    $location=$driver['location'];
    $status=$driver['status'];
    $vehicle=$driver['vehicle'];



echo"
 <div class='card'>
    <img src='images/driver.jpg' alt=''>
    <h3>$fullname</h3>
    <div class='card-body'>

    <table class='table mt'>
        <tr>
            <td>Vehicle</td>
            <td> $vehicle</td>
        </tr>
        <tr>
            <td>Experience: </td>
            <td>$experiance</td>
        </tr>
       
        <tr>
            <td>Current Location</td>
            <td><a href='#'>$location</a></td>
        </tr>
        <tr>
            <td>status</td>
            <td><a href='#'>$status</a></td>
        </tr>
        <tr>
            <td>Rating:</td>
            <td> 
                <b>*</b>
                <b>*</b>
                <b>*</b>
                * *
             </td>
        </tr>
    </table>
    <hr>
    <a href='#' class='btn-link'>
        <button class='btn mt'>Board</button></a>
    
    </div>
</div>";

}
?>
   </div>
   
    
    
</body>
</html>

<?php include_once 'style.php';  ?>
<!-- // include_once 'indec-processro.php';
// include_once "newDriver.php";
// ?> -->