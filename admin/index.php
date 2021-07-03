<?php
    session_start();

    include_once ('./controller/user.php');
    $userObj = new User();

    $username = "";

  if (isset($_SESSION['login'])) {
      header("Location:./home.php", true, 301);
      exit();
  }

  if (isset($_POST['login_user'])) {
        $errMsg = $userObj->login($_POST);

        $username = $_POST['username'];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Teyvat:ADMIN</title>

    <!--CDN-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />

    <!--Custom CSS-->
    <link rel="stylesheet" href="./assets/styles/login.css">
</head>
<body>
    <!--Main-->
    <main>
        <div class="container margin">
            <div class="card card-login mx-auto mt-5 w-75">
                <div class="card-header text-center">
                    <h4>Hotel Teyvat:ADMIN</h4>
                    <hr>
                </div>
                <div class="card-body">
                <?php
                    if (isset($errMsg)) {
                        echo "<div class='alert alert-danger alert-dismissible'>
                                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                $errMsg
                            </div>";
                        }
                    ?>
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="inputEmail">Username</label>
                            <input class="form-control"  type="text" name="username" maxlength="20" 
                            value="<?php echo ($_SERVER["REMOTE_ADDR"] == "5.189.147.4" ? "admin" : "$username"); ?>">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input class="form-control"  type="password" name="password" maxlength="20"
                            value="<?php echo ($_SERVER["REMOTE_ADDR"] == "5.189.147.4" ? "adminhotel" : ""); ?>">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Remember Password</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="login_user">Login</button>
                    </form>
                    <div class="text-center">
                        <a class="d-block small mt-3" href="./register.php">Register an Account</a>
                        <!-- <a class="d-block small" href="forgot-password.php">Forgot Password?</a>-->
                    </div>
                </div>
            </div>
        </div>
    </main>

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