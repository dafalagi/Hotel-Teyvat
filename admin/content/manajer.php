<table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Id Manajer</th>
                                            <th>Nama Manajer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include_once('controller/manajer.php');
                                            $no = 1;
                                            $manajerObj = new Manajer();
                                            $result = $manajerObj->viewManajer();

                                            while($row = $result->fetch_array()){
                                                ?>
                              
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $row['IdManajer'] ?></td>
                                                    <td><?php echo $row['NamaManajer'] ?></td>
                                                    <td class="text-center">
                                                    <?php 
                                                        $manajer = $row['IdManajer'];
                                                        $id = base64_url_encode($manajer);
                                                    ?>
                                                      <a href="home.php?edit=<?php echo $id?>"><button class="btn btn-sm btn-primary" data-toggle="modal">EDIT</button></a>
                                                      <a href="home.php?delete=<?php echo $id?>"><button class="btn btn-sm btn-danger" data-toggle="modal">DELETE</button></a>
                                                    </td>
                                                </tr>
                              
                                              <?php } ?>
                                    </tbody>
</table>