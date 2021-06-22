<?php
  
  // Include database connectivity
      
  include_once('.././php/server.php');

  $username = '';
  $email = '';
  $password = '';
  
  if (isset($_POST['reg_user'])) {
      
      $errorMsg = "";
      
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $password1 = mysqli_real_escape_string($conn, $_POST['password_1']);
      $password2 = mysqli_real_escape_string($conn, $_POST['password_2']);
      $password = password_hash($password, PASSWORD_BCRYPT);
      
      $sql = "SELECT * FROM akun WHERE email = '$email'";
      $execute = mysqli_query($conn, $sql);
        
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errorMsg = "Email is not valid try again";
      }else if ($execute) {
          $errorMsg = "This Email is already exists";
      }else if ($password1 != $password2) {
          $errorMsg = "Password does not match";
      }else if(strlen($password) < 8) {
          $errorMsg  = "Password should be eight digits";
      }else{
          $query= "INSERT INTO akun 
                  VALUES('$username','$email','$password')";
          $result = mysqli_query($conn, $query);
      if ($result == true) {
          header("Location: ./home.php");
      }else{
          $errorMsg  = "You are not Registred.. Please Try again";
      }
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="">
 <title>Hotel Teyvat:ADMIN</title>

 <!-- Bootstrap core CSS-->
 <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />

 <!-- Custom styles for this template-->
 <link href=".././assets/styles/register.css" rel="stylesheet">
</head>
<body>
 <div class="container margin">
   <div class="card card-register mx-auto mt-5 w-75">
     <div class="card-header text-center">
        <h4>Register an Account</h4>
     </div>
     <div class="card-body">
     <?php
            if (isset($errorMsg)) {
                echo "<div class='alert alert-danger alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        $errorMsg
                      </div>";
            }
        ?>
       <form method="post" action="">
         <div class="form-group">
           <div class="form-row">
             <div class="col-md-12">
               <label for="InputName">Username</label>
               <input class="form-control" id="InputName" type="text" name="username" value="<?php echo $username; ?>" required>
             </div>
           </div>
         </div>
         <div class="form-group">
           <label for="InputEmail">Email address</label>
           <input class="form-control" id="InputEmail" type="email" aria-describedby="emailHelp" name="email" value="<?php echo $email; ?>" required>
         </div>
         <div class="form-group">
           <div class="form-row">
             <div class="col-md-6">
               <label for="InputPassword1">Password</label>
               <input class="form-control" id="InputPassword1" type="password" name="password_1" required>
             </div>
            <div class="col-md-6">
               <label for="InputPassword2">Confirm Password</label>
               <input class="form-control" id="InputPassword2" type="password" name="password_2" required>
             </div>
           </div>
         </div>
          <button type="submit" class="btn btn-primary btn-block" name="reg_user">Register</button>
       </form>
       <div class="text-center">
         <a class="d-block small mt-3" href="../index.php">Login Page</a>
       <!--- <a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->
       </div>
     </div>
   </div>
 </div>

 <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>
</body>
</html>