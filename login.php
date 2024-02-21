<?php 
//  session_start();
$showerror= false;
$login=false;
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//    $conn=mysqli_connect("localhost","root","","users");
  
//   $username=$_POST['username'];
//   $password=$_POST['Password'];

  
//   $sql="Select * from user where username='$username' AND password='$password'";
 
//     $result=mysqli_query($conn,$sql);
//     $num=mysqli_num_rows($result);
//     if($num > 1){
//       // $login=true;
      
//       echo "<div class='alert alert-success'>
//    <strong>Congratulations!</strong> you are logged in.
//    </div>";
//     //   session_start();
//    
//      header("Location: welcome.php");
//     }
  
// else{
//     // $showerror="invalid credentials";
//     echo "<div class='alert alert-danger'>
//     <strong>ERROR!</strong> INVALID
//     </div>";
//   }

// }
// ...

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = mysqli_connect("localhost", "root", "", "users");
 
  $username = $_POST['username'];
  $password = $_POST['Password'];

  $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);

  if ($num == 1) {
     $login = true;
  } else {
     $showerror = "invalid credentials";
  }
}

// ...

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <style>
      .btn-primary {
            background-color: black;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            margin-left:15px;
            
        }

        .btn-primary:hover {
            background-color: grey;
        }
  </style>
  <body>
    
    <?php include("nav.php"); ?>
    <div class="container1">
   <?php 
   if($login){
   echo "<div class='alert alert-success'>
   <strong>Congratulations!</strong> you are logged in.
   </div>";
   header("Location: welcome.php");
    }
    if($showerror){
      echo "<div class='alert alert-danger'>
      <strong>ERROR!</strong> INVALID
      </div>";
       }
      ?>
    <!-- Optional JavaScript; choose one of the two! -->
  <div class=container style=" margin-top:40px; width: 550px; height:430px; background-color:#e5e504; box-shadow: 4px 8px #888888; ">
    <h1 class="text-center"style="letter-spacing:4px"><strong>LOGIN </strong></h1>

<form action="/LOGIN/login.php" method="POST">
  <div class="form-group col-md-6"><br>
    <label for="username" class="form-label" style="font-size:26px; letter-spacing:2px; margin-left:20px;">Username</label><br>
    <input type="text" class="form-control" id="username" name="username"aria-describedby="emailHelp"><br>
    
  </div>
  <div class="form-group col-md-6">
    <label for="Password" class="form-label" style="font-size:26px; letter-spacing:2px; margin-left:20px;">Password</label><br>
    <input type="password" class="form-control" id="Password" name="Password"><br>
  </div>
  
  <button type="submit" class="btn btn-primary">LOGIN</button>
  
  
  <div class="form-group col-md-6 "style="display:flex; flex-direction:row; margin-top:18px;">
    
    <h6 style="margin-left:15px; margin-top:15px;"><strong>NOT A MEMBER?</strong></h6> 
  <button type="submit" class="btn btn-primary">Signup</button>
  </div>
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