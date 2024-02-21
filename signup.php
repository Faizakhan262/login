<?php 
$err= false;
$showerror=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  $conn=mysqli_connect("localhost","root","","users") or die("connection failed");
  $username=$_POST['username'];
  $password=$_POST['Password'];
  $cpassword=$_POST['ConfirmPassword'];
  $exists=false;
 if(($password == $cpassword) && $exists==false){
  $sql="INSERT INTO user(username,password,date) VALUES ('{$username}', '{$password}', current_timestamp())";
 
    $result=mysqli_query($conn,$sql);
    if($result){
      
      $err=true;
    
    }
  }
else{
    $showerror="passwords don't match";
  }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MY PAGE</title>
  </head>
  <style>
    .container1 {
            /* margin: 0;
            padding: 0; */
            background-image: url('background-image.jpg'); /* Replace 'background-image.jpg' with your image URL */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 50vh;
        }
         .container {
            background-color: black;/* Adjust the opacity and color as needed */
             padding: 10px; */
            border-radius: 20px;
            width: 600px;
            height:150px;
            margin-bottom:20px;

        } 

        .text-center {
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Adjust the opacity and color as needed */
            padding: 20px;
            border-radius: 10px;
            width: 300px;
        }

        .text-center {
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: black;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            
        }

        .btn-primary:hover {
            background-color:  grey;
        }
  </style>
  <body>
    
    <?php include("nav.php"); ?>
    <div class="container1">  
   <?php 
   if($err){
   echo "<div class='alert alert-success'>
   <strong>Success!</strong> Account Created.
   </div>";
   header("Location: login.php");
    }
    if($showerror){
      echo "<div class='alert alert-danger'>
      <strong>ERROR!</strong> Password Donot Match
      </div>";
       }
      ?>
    <!-- Optional JavaScript; choose one of the two! -->
  <div class=container style=" margin-top:40px; width: 550px; height:430px; background-color:#e5e504; box-shadow: 4px 8px #888888; ">
  <h2 class="text-center"><strong>Create Your Account</strong></h2>
  <br>      
<form action="signup.php" method="POST" showConfirmation()>
  <div class="form-group col-md-6">
    <label for="username" class="form-label"><strong>username</strong></label>
    <input type="text" class="form-control" id="username" name="username"aria-describedby="emailHelp">
    
  </div>
  <div class="form-group col-md-6">
    <label for="Password" class="form-label"><strong>Password</strong></label>
    <input type="password" class="form-control" id="Password" name="Password">
  </div>
  <div class="form-group col-md-6">
  <label for="ConfirmPassword" class="form-label"><strong>Confirm Password</strong></label>
    <input type="confirmpassword" class="form-control" id="ConfirmPassword" name="ConfirmPassword">
    <div id="emailHelp" class="form-text">Make sure to type the same password.</div>
  </div>
     
  <button type="submit" class="btn btn-primary">SIGN UP</button>
</form>
      </div>
      
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
    function showConfirmation() {
        // Display a confirmation dialog
        var confirmed = window.confirm("Are you sure you want to submit the form?");

      
            alert("RECORD ENTERED!");
        
         window.location.href ="index.php";
     
        
    }
    </script>
    </div>
  </body>
</html>