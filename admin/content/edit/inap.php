<?php
                    $row = $inap->fetch_assoc();

                    if (isset($_POST['update'])){
                        $update = $inapObj->updateInap($_POST);

                        if ($update == true){
                            $table = base64_url_encode("Inap");
                            ?>
                            <script>
                                window.location.replace("home.php?t=<?php echo $table?>");
                            </script>
                            <?php
                        }else {
                            $errMsg = "Failed To Update Data";
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
              EDIT INAP
            </div>
            <div class="card-body">
              <form method="post">
                <div class="form-group">
                  <label>Id Inap</label>
                  <input type="text" value="<?php echo $row['IdInap'] ?>" class="form-control" disabled>
                  <input type="hidden" name="id" value="<?php echo $id?>">
                </div>

                <div class="form-group">
                  <label>No Transaksi</label>
                  <input type="text" value="<?php echo $row['NoTransaksi'] ?>" class="form-control" disabled>
                </div>

                <div class="form-group">
                  <label>No Id</label>
                  <input type="text"value="<?php echo $row['NoId'] ?>" class="form-control" disabled>
                </div>

                <div class="form-group">
                  <label>Jumlah Tamu</label>
                  <input type="text" name="jumlahtamu" value="<?php echo $row['JumlahTamu'] ?>" placeholder="Insert Jumlah Tamu" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Check In</label>
                  <input type="text" name="checkin" value="<?php echo $row['CheckIn'] ?>" placeholder="Insert Check In" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Check Out</label>
                  <input type="text" name="checkout" value="<?php echo $row['CheckOut'] ?>" placeholder="Insert Check Out" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success" name="update">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>