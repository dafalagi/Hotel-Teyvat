<?php
                    if (isset($_POST['delete_yes'])){
                        $delete = $userObj->deleteUser($id);

                        if ($delete == true){
                            $table = base64_url_encode("Pengguna");
                            ?>
                            <script>
                                window.location.replace("home.php?t=<?php echo $table?>");
                            </script>
                            <?php
                        }else {
                            $errMsg = "Failed To Delete Data";
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
              DELETE PENGGUNA
            </div>
            <div class="card-body">
              <form method="post">
                <div class="form-group">
                  <label>Are you sure want to delete data with Username : "<?php echo $id?>"?</label>
                </div>
                
                <button type="submit" class="btn btn-warning" name="delete_yes">YES</button>
                <?php $table = base64_url_encode("Pengguna")?>
                <a href="home.php?t=<?php echo $table?>"><button type="button" class="btn btn-success" name="delete_no">NO</button></a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>