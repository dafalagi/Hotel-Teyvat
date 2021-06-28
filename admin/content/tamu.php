<table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>No Id</th>
                                            <th>Username</th>
                                            <th>Tipe Id</th>
                                            <th>Nama</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include_once('controller/tamu.php');
                                            $no = 1;
                                            $tamuObj = new Tamu();
                                            $result = $tamuObj->viewTamu();

                                            while($row = $result->fetch_array()){
                                                ?>
                              
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $row['NoId'] ?></td>
                                                    <td><?php echo $row['Username'] ?></td>
                                                    <td><?php echo $row['TipeId'] ?></td>
                                                    <td><?php echo $row['Nama'] ?></td>
                                                    <td class="text-center">
                                                        <?php 
                                                            $noid = $row['NoId'];
                                                            $id = base64_url_encode($noid);
                                                        ?>
                                                      <a href="home.php?edit=<?php echo $id?>"><button class="btn btn-sm btn-primary" data-toggle="modal">EDIT</button></a>
                                                      <a href="home.php?delete=<?php echo $id?>"><button class="btn btn-sm btn-danger" data-toggle="modal">DELETE</button></a>
                                                    </td>
                                                </tr>
                              
                                              <?php } ?>                                        
                                    </tbody>   
</table>