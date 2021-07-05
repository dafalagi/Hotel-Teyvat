<?php
session_start();
require '../booking/booking-proses.php';

  if(isset($_POST["submit1"])){
    detailtambah($_POST);
    // echo detailtambah($_POST);

    if(detailtambah($_POST) > -2 ){
      echo"
      <script>
        alert('data berhasil ditambahkan');
        document.location.href = '#';
      </script>
      ";
  } else {
      echo"<script>
        alert('data gagal ditambahkan');
        document.location.href = '#';
      </script>
      ";
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
    <link rel="stylesheet" href="../assets/styles/booking.css"/>

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
            <a class="nav-link active" href="../index.php">Home</a>
          </li>  
          <li class="nav-item active">
            <a class="nav-link active" href="#booking">Booking</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" href="#">Gallery</a>
          </li>
        </ul>
    </div>
</nav>
<!-- akhir navbar -->

<!-- form -->
<div>
<form action="booking2.php" method="post">
  <div class="wrapperform" id="booking2" data-aos="fade-up"
     data-aos-duration="1500">
    <div class="title">
      Booking Hotel
    </div>
    <div class="form">
      <div>
        <div class="input_field">
          <label>No Transaksi</label>
          <input type="text" class="input" name="NoTransaksi" required>
        </div>
        <div class="input_field">
          <label>Nominal</label>
          <input type="text" class="input" name="Nominal" required>
        </div>
        <div class="input_field">
          <label>Tipe Bayar</label>
          <input type="text" class="input" name="TipeBayar" required>
        </div>
        <div class="input_field">
          <label>Atas Nama</label>
          <input type="text" class="input" name="AtasNama" required>
        </div>
        <div class="input_field">
          <label>Check in</label>
          <input type="date" class="input" name="CheckIn" required>
        </div>
        <div class="input_field">
          <label>Check Out</label>
          <input type="date" class="input" name="CheckOut" required>
        </div>
        <div class="input_field">
          <label>Jumlah Tamu</label>
          <input type="text" class="input" name="JumlahTamu" required>
        </div>
        <div class="input_field">
          <label>Jenis Kamar</label>
          <div class="custom_select" required>
            <select name="TipeKamar">
              <option value=""></option>
              <option value="Standard Room">Standard Room</option>
              <option value="Superior Room">Superior Room</option>
              <option value="Deluxe Room">Deluxe Room</option>
              <option value="Suite">Suite</option>
            </select>
          </div>
        </div>
        <div class="input_field">
          <label>Id Pegawai</label>
          <input type="text" class="input" name="IdPegawai" required>
        </div>
        <div class="input_field">
        <input type="submit" value="Pesan" class="btn" name="submit1">
      </div>
    </div>
  </div>
</form>
</div>
<!-- akhir form -->
<div>

</div>
<!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
      crossorigin="anonymous">
    </script>

<!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>
