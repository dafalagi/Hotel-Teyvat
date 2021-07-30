<?php
session_start();
include_once('./php/controller/booking.php');

$bookingObj = new Booking();

if (isset($_POST['submit'])){
  $booking = $bookingObj->booking($_POST);
  if($booking == true){
    header('Location:./home.php', true, 301);
    exit();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">
    
<!-- css -->
    <link rel="stylesheet" href="./assets/styles/bookingsuc.css"/>

<!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

<!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Hotel Teyvat</title>
  </head>

  <body>

<!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow-lg" >

        <div class="container-fluid">
        <span class="navbar-brand">Hotel Teyvat</span>
    <button 
        class="navbar-toggler" 
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" 
        aria-controls="navbarNav" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link active" href="./home.php">Home</a>
          </li>  
          <li class="nav-item active">
            <a class="nav-link active" href="#">Booking</a>
          </li>
        </ul>
    </div>
</nav>
<!-- akhir navbar -->

<!-- Main -->
    <div class="cardun col-5" data-aos="fade-up"
     data-aos-duration="1000">
        <div class="card p-4 text-right">
            <div class="card-body">
                <p class="text-center fs-2">Hotel Teyvat</p>
                <!-- card body -->
                <div class="row">
                    <div class="col-4">No Kamar</div>
                    <div class="col-md-auto">: xxxxx</div>
                </div>
                <div class="row">
                    <div class="col-4">Check in</div>
                    <div class="col-md-auto">: xx-xx-xxxx</div>
                </div>
                <div class="row">
                    <div class="col-4">Check out</div>
                    <div class="col-md-auto">: xx-xx-xxxx</div>
                </div>
                <div class="row">
                    <div class="col-4">Jenis Kamar</div>
                    <div class="col-md-auto">: xxxxx</div>
                </div>
                <div class="row">
                    <div class="col-4">Jumlah kasur</div>
                    <div class="col-md-auto">: xx</div>
                </div>
                <div class="row">
                    <div class="col-4">Jumlah Kamar</div>
                    <div class="col-md-auto">: xx</div>
                </div>
                <div class="row">
                    <div class="col-4">Total</div>
                    <div class="col-md-auto">: Rp. xxxxxxx</div>
                </div>
                <div class="text-end">
                    <a href="./home.php" class="btn btn-primary">Ok</a>
                </div>
            </div>
        </div>
    </div>

<!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
      crossorigin="anonymous">
    </script>

<!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.js"></script>
  </body>
</html>
