<?php
                    if (isset($_POST['add'])){
                        $insert = $kamarObj->insertKamar($_POST);

                        if ($insert == true){
                            $table = base64_url_encode("Kamar");
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
              ADD KAMAR
            </div>
            <div class="card-body">
              <form method="post">
                <div class="form-group">
                  <label>No Kamar</label>
                  <input type="text" name="nokamar" placeholder="Insert No Kamar" class="form-control">
                </div>

                <div class="form-group">
                  <label>Tipe Kamar</label>
                  <input type="text" name="tipekamar" placeholder="Insert Tipe Kamar" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success" name="add">ADD</button>
                <button type="reset" class="btn btn-warning">RESET</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>