<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/styles/login.css">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow-lg">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Home</a>
    <button 
        class="navbar-toggler" 
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#navbarNavAltMarkup" 
        aria-controls="navbarNavAltMarkup" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Booking</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Gallery</a>
          </li>
        </ul>
    </div>
</nav>
 <div class="container px-5 py-5 mx-auto login">
   <div class="card cd1">
     <div class="d-flex flex-lg-row flex-coloum-reverse">
       <div class="card cd2">
         <div class="row justify-content-center my-auto">
           <div class="col-md-8 col-10 my-5">
             <h3>Welcome</h3>
             <h6 class="msg-info">Please Login to your account</h6>
             <div class="form-group"> <label class="form-control-label text-muted">Username</label> <input type="text" id="email" name="email" placeholder="Email or Username" class="form-control"> </div>
             <div class="form-group"> <label class="form-control-label text-muted">Password</label> <input type="password" id="psw" name="psw" placeholder="Password" class="form-control"> </div>
             <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color">Login</button> </div>
             <div class="row justify-content-center my-2"> <a href="#"><small class="text-muted">Forgot Password?</small></a> </div>
           </div>
         </div>
         <div class="bottom text-center mb-5">
         <p href="#">Don't have an account?<button class="btn btn-white ml-2">Create new</button></p>
         </div>
       </div>
       <div class="card cd3">
       <div class="my-auto mx-md-5 px-md-5 right">
                    <h3 class="text-white">Become a member to get more discount!</h3> <small class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</small>
            </div>
     </div>
   </div>
 </div>
 </div>     
  </body>
</html>