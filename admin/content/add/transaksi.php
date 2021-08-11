<?php
                    if (isset($_POST['add'])){
                        $insert = $transaksiObj->insertTransaksi($_POST);

                        if ($insert == true){
                            $table = base64_url_encode("Transaksi");
                            ?>
                            <script>
                                window.location.replace("home.php?t=<?php echo $table?>");
                            </script>
                            <?php
                        }else {
                            $errMsg = "Failed To Add Data. Username Not Found";
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
              ADD TRANSAKSI
            </div>
            <div class="card-body">
              <form method="post">
                <div class="form-group">
                  <label>Nominal</label>
                  <input type="text" name="nominal" placeholder="Insert Nominal" class="form-control">
                </div>

                <div class="form-group">
                  <label>Tipe Bayar</label>
                  <input type="text" name="tipebayar" placeholder="Insert Tipe Bayar" class="form-control">
                </div>

                <div class="form-group">
                  <label>Atas Nama</label>
                  <input type="text" name="atasnama" placeholder="Insert Atas Nama" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success" name="add">ADD</button>
                <button type="reset" class="btn btn-warning">RESET</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>