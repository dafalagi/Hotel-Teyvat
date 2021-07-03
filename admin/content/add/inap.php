<?php
                    if (isset($_POST['add'])){
                        $insert = $inapObj->insertInap($_POST);
                        
                        if ($insert == true){
                            $table = base64_url_encode("Inap");
                            ?>
                            <script>
                                window.location.replace("home.php?t=<?php echo $table?>");
                            </script>
                            <?php
                        }else {
                            $errMsg = "Failed To Add Data";
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
              ADD INAP
            </div>
            <div class="card-body">
              <form method="post">
                <div class="form-group">
                  <label>No Transaksi</label>
                  <input type="text" name="notransaksi" placeholder="Insert No Transaksi" class="form-control">
                </div>

                <div class="form-group">
                  <label>No Id</label>
                  <input type="text" name="noid" placeholder="Insert No Id" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jumlah Tamu</label>
                  <input type="text" name="jumlahtamu" placeholder="Insert Jumlah Tamu" class="form-control">
                </div>

                <div class="form-group">
                  <label>Check In</label>
                  <input type="text" name="checkin" placeholder="Insert Check In" class="form-control">
                </div>

                <div class="form-group">
                  <label>Check Out</label>
                  <input type="text" name="checkout" placeholder="Insert Check Out" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success" name="add">ADD</button>
                <button type="reset" class="btn btn-warning">RESET</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>