<?php
session_start();
include_once('./php/controller/user.php');

$userObj = new User();

if(isset($_SESSION['login'])) {
  header('Location:./home.php', true, 301);
  exit();
}

if(isset($_POST['login'])){
  $userObj->login($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Teyvat</title>

    <!--CDN-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />

    <!--Custom CSS-->
    <link rel="stylesheet" href="./assets/styles/login.css" />
  </head>
  <body>
  <div class="container px-5 py-5 mx-auto login">
                <div class="card cd1">
                  <div class="d-flex flex-lg-row flex-coloum-reverse">
                    <div class="card cd2">
                      <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-10 my-5">
                          <h3 class="welcome">Welcome</h3>
                          <h6 class="msg-info">Please Login to your account</h6>
                          <form method="POST">
                          <div class="form-group">
                            <label class="form-control-label text-muted">Username</label>
                            <input type="text" id="username" name="username" placeholder="Username" class="form-control" />
                          </div>
                          <div class="form-group">
                            <label class="form-control-label text-muted">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control" />
                          </div>
                          <div class="row justify-content-center my-3 px-3"><button class="btn-block btn-color" name="login">Login</button></div>
                          </form>
                          <div class="row justify-content-center my-2">
                            <a href="#"><small class="text-muted">Forgot Password?</small></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card cd3">
                      <div class="my-auto mx-md-5 px-md-5 right">
                        <h3 class="text-white">Become a member to get more discount!</h3>
                        <small class="text-white"
                          >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</small
                        >
                      </div>
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
<!--php-->
