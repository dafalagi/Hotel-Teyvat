<table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>No Kamar</th>
                                            <th>Tipe Kamar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include_once('controller/kamar.php');
                                            $no = 1;
                                            $kamarObj = new Kamar();
                                            $result = $kamarObj->viewKamar();

                                            while($row = $result->fetch_array()){
                                                ?>
                              
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $row['NoKamar'] ?></td>
                                                    <td><?php echo $row['TipeKamar'] ?></td>
                                                    <td class="text-center">
                                                    <?php
                                                        $kamar = $row['NoKamar'];
                                                        $id = base64_url_encode($kamar);
                                                    ?>
                                                      <a href="home.php?edit=<?php echo $id?>"><button class="btn btn-sm btn-primary" data-toggle="modal">EDIT</button></a>
                                                      <a href="home.php?delete=<?php echo $id?>"><button class="btn btn-sm btn-danger" data-toggle="modal">DELETE</button></a>
                                                    </td>
                                                </tr>
                              
                                              <?php } ?>
                                    </tbody>
</table>