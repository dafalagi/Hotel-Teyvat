<?php 
class booking {
    public $koneksi;

    public function __construct()
    {
        // Create database connection 
            $this->koneksi =  new mysqli('localhost', 'root', 'password', 'hotel_teyvat'); 
     
            // Check connection 
            if ($this->koneksi->connect_error) { 
                echo "Connection failed: " . $this->koneksi->connect_error; 
            }else {
                return $this->koneksi;
            }
    }

    public function tambah($data){
        $noid       = $this->koneksi->real_escape_string($data['NoId']);
        $nama       = $this->koneksi->real_escape_string($data['Nama']);
        $username   = $this->koneksi->real_escape_string($data['username']);
        $tipeid     = $this->koneksi->real_escape_string($data['TipeId']);
    
        $query1  ="INSERT INTO tamu
        VALUES('$noid', '$username','$tipeid' ,'$nama')";
        $result = $this->koneksi->query($query1);

        if ($result == true ){
            return $succMsg = "Data Berhasil Ditambahkan";
        }else {
            return $errMsg = "Data Gagal Ditambahkan";
        }
    }


}
?>