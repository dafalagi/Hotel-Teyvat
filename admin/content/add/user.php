<?php
                    if (isset($_POST['add'])){
                        $insert = $userObj->insertUser($_POST);

                        if ($insert == true){
                            $table = base64_url_encode("Pengguna");
                            ?>
                            <script>
                                window.location.replace("home.php?t=<?php echo $table?>");
                            </script>
                            <?php
                        }else {
                            $errMsg = "Data Gagal Ditambah";
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
              ADD PENGGUNA
            </div>
            <div class="card-body">
              <form method="post">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" placeholder="Insert Username" class="form-control">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" placeholder="Insert Email" class="form-control">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" placeholder="Insert Password" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success" name="add">ADD</button>
                <button type="reset" class="btn btn-warning">RESET</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>