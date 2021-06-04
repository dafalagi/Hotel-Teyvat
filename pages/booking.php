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
    <link rel="stylesheet" href="booking.css"/>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <title>Hotel Teyvat</title>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow-lg" style="background-color: #4d4d4d">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Home</a>
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
          <li class="nav-item">
            <a class="nav-link" href="#">Booking</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Gallery</a>
          </li>
        </ul>
    </div>
</nav>
<!-- akhir navbar -->

<!-- form -->
  <div class="wrapperform">
    <div class="title">
      Booking Hotel
    </div>
    <div class="form">
      <div>
        <div class="input_field">
          <label>Tujuan Kota</label>
          <input type="text" class="input">
        </div>
        <div class="input_field">
          <label>Check in Date</label>
          <input type="text" class="input">
        </div>
        <div class="input_field">
          <label>Check Out Date</label>
          <input type="text" class="input">
        </div>
        <div class="input_field">
          <label>Jenis Kamar</label>
          <div class="custom_select">
            <select>
              <option value=""></option>
              <option value="Kamar1">Kamar Kelas 1</option>
              <option value="kamar2">Kamar Kelas 2</option>
              <option value="kamar3">Kamar Kelas 3</option>
            </select>
       </div> 
      </div>
      <div class="input_field">
        <input type="submit" value="Pesan" class="btn">
      </div>
    </div>
  </div>
<!-- akhir form -->

<!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
      crossorigin="anonymous">
    </script>


  </body>
</html>