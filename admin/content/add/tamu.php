<?php
                    if (isset($_POST['add'])){
                        $insert = $tamuObj->insertTamu($_POST);

                        if ($insert == true){
                            $table = base64_url_encode("Tamu");
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
              ADD TAMU
            </div>
            <div class="card-body">
              <form method="post">
                <div class="form-group">
                  <label>No Id</label>
                  <input type="text" name="noid" placeholder="Insert No Id" class="form-control">
                </div>

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" placeholder="Insert Username" class="form-control">
                </div>

                <div class="form-group">
                  <label>Tipe Id</label>
                  <input type="text" name="tipeid" placeholder="Insert Tipe Id" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" placeholder="Insert Nama" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success" name="add">ADD</button>
                <button type="reset" class="btn btn-warning">RESET</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>