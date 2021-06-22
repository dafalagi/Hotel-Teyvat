<?php
  session_start();

  if (isset($_SESSION['username'])) {
      header("Location:home.php");
  }

  // Include database connectivity
    
  include_once('../php/server.php');
  
  if (isset($_POST['submit'])) {

      $errorMsg = "";

      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $password = mysqli_real_escape_string($conn, $_POST['password']); 
      
  if (!empty($username) || !empty($password)) {
        $query  = "SELECT * FROM akun WHERE username = '$username'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
          while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['Password'])) {
                $_SESSION['username'] = $row['Username'];
                header("Location:home.php");
            }else{
                $errorMsg = "Email or Password is invalid";
            }    
          }
        }else{
          $errorMsg = "No user found on this email";
        } 
    }else{
      $errorMsg = "Email and Password is required";
    }
  }

?>

<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PHP Password hash Login in PHP Mysql</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="margin-top:50px">
<h1 style="text-align: center;">PHP Password_hash Login in PHP Mysql</h1><br>
  <div class="row">
     <div class="col-md-4"></div>
      <div class="col-md-4" style="margin-top:20px">
        <?php
            if (isset($errorMsg)) {
                echo "<div class='alert alert-danger alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        $errorMsg
                      </div>";
            }
        ?>
        <form action="" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <p>Are you new user? <a href="index.php">Sign Up</a></p>
          <input type="submit" class="btn btn-warning btn btn-block" name="submit" value="Login">
        </form>
      </div>
    </div>
  </div>
</body>
</html>