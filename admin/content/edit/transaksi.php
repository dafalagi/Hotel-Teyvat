<?php
                    $row = $transaksi->fetch_assoc();

                    if (isset($_POST['update'])){
                        $update = $transaksiObj->updateTransaksi($_POST);

                        if ($update == true){
                            $table = base64_url_encode("Transaksi");
                            ?>
                            <script>
                                window.location.replace("home.php?t=<?php echo $table?>");
                            </script>
                            <?php
                        }else {
                            $errMsg = "Data Gagal Diupdate";
                        }
                    }
?>
<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
        <?php
    if (isset($errMsg)){
        echo "<div class='alert alert-danger alert-dismissible'>
                                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                $errMsg
                            </div>";
    }
?>
          <div class="card">
            <div class="card-header">
              EDIT TRANSAKSI
            </div>
            <div class="card-body">
              <form method="post">
                <div class="form-group">
                  <label>No Transaksi</label>
                  <input type="text" name="notransaksi" value="<?php echo $row['NoTransaksi'] ?>" placeholder="Insert No Transaksi" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $id?>">
                </div>

                <div class="form-group">
                  <label>Nominal</label>
                  <input type="text" name="nominal" value="<?php echo $row['Nominal'] ?>" placeholder="Insert Nominal" class="form-control">
                </div>

                <div class="form-group">
                  <label>Tipe Bayar</label>
                  <input type="text" name="tipebayar" value="<?php echo $row['TipeBayar'] ?>" placeholder="Insert Tipe Bayar" class="form-control">
                </div>

                <div class="form-group">
                  <label>Atas Nama</label>
                  <input type="text" name="atasnama" value="<?php echo $row['AtasNama'] ?>" placeholder="Insert Atas Nama" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success" name="update">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>