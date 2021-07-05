<?php
// koneksi databases
$koneksi = mysqli_connect("localhost", "root", "password", "hotel_teyvat");

// func tambah
function tambah($data){
  global $koneksi;
  $noid            = htmlspecialchars($data["NoId"]);
  $nama            = htmlspecialchars($data["Nama"]);
  $username        = $_SESSION['username'];
  $tipeid          = htmlspecialchars($data["TipeId"]);

  $query ="INSERT INTO tamu
  VALUES('$noid', '$username','$tipeid' ,'$nama')";
  mysqli_query($koneksi,$query);

  return mysqli_affected_rows($koneksi);
}

// func detail tambah
function detailtambah($data1){
  global $koneksi;
  // t_transaksi
  $notransaksi    = htmlspecialchars($data1["NoTransaksi"]);
  $nominal        = htmlspecialchars($data1["Nominal"]);
  $tipebayar      = htmlspecialchars($data1["TipeBayar"]);
  $atasnama       = htmlspecialchars($data1["AtasNama"]);
  // t_inap
  $checkin        = htmlspecialchars($data1["CheckIn"]);
  $checkout       = htmlspecialchars($data1["CheckOut"]);
  $jumlahtamu     = htmlspecialchars($data1["JumlahTamu"]);



  $query1 ="INSERT INTO transaksi(NoTransaksi,Nominal,TipeBayar,AtasNama)
  VALUES('$notransaksi','$nominal','$tipebayar','$atasnama')";
  $result = mysqli_query($koneksi,$query1);

  if($result == true){
    $notransaksi    = $koneksi -> query("SELECT NoTransaksi FROM transaksi");

    $query2         = "INSERT INTO inap 
                        VALUES ('$notransaksi', '$jumlahtamu','$checkin','$checkout')";
    mysqli_query($koneksi, $query2);

  }


  return mysqli_affected_rows($koneksi);

}
?>