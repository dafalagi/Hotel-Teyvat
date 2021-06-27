<?php
                    $row = $manajer->fetch_assoc();

                    if (isset($_POST['update'])){
                        $update = $manajerObj->updateManajer($_POST);

                        if ($update == true){
                            $table = base64_url_encode("Manajer");
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
              EDIT MANAJER
            </div>
            <div class="card-body">
              <form method="post">
                <div class="form-group">
                  <label>Id Manajer</label>
                  <input type="text" name="idmanajer" value="<?php echo $row['IdManajer'] ?>" placeholder="Insert Id Manajer" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $id?>">
                </div>

                <div class="form-group">
                  <label>Nama Manajer</label>
                  <input type="text" name="namamanajer" value="<?php echo $row['NamaManajer'] ?>" placeholder="Insert Nama Manajer" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success" name="update">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>