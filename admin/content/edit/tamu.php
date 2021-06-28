<?php
                    $row = $tamu->fetch_assoc();

                    if (isset($_POST['update'])){
                        $update = $tamuObj->updateTamu($_POST);

                        if ($update == true){
                            $table = base64_url_encode("Tamu");
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
              EDIT TAMU
            </div>
            <div class="card-body">
              <form method="post">
                <div class="form-group">
                  <label>No Id</label>
                  <input type="text" name="noid" value="<?php echo $row['NoId'] ?>" placeholder="Insert No Id" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $id?>">
                </div>

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" value="<?php echo $row['Username'] ?>" placeholder="Insert Username" class="form-control" disabled>
                </div>

                <div class="form-group">
                  <label>Tipe Id</label>
                  <input type="text" name="tipeid" value="<?php echo $row['TipeId'] ?>" placeholder="Insert Tipe Id" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" value="<?php echo $row['Nama'] ?>" placeholder="Insert Nama" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success" name="update">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>