<table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Id Pegawai</th>
                                            <th>Id Manajer</th>
                                            <th>Nama Pegawai</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include_once('controller/resepsionis.php');
                                            $no = 1;
                                            $respObj = new Resepsionis();
                                            $result = $respObj->viewResepsionis();

                                            while($row = $result->fetch_array()){
                                                ?>
                              
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $row['IdPegawai'] ?></td>
                                                    <td><?php echo $row['IdManajer'] ?></td>
                                                    <td><?php echo $row['NamaPegawai'] ?></td>
                                                    <td class="text-center">
                                                    <?php
                                                        $idpegawai = $row['IdPegawai'];
                                                        $id = base64_url_encode($idpegawai);
                                                    ?>
                                                      <a href="home.php?edit=<?php echo $id?>"><button class="btn btn-sm btn-primary" data-toggle="modal">EDIT</button></a>
                                                      <a href="home.php?delete=<?php echo $id?>"><button class="btn btn-sm btn-danger" data-toggle="modal">DELETE</button></a>
                                                    </td>
                                                </tr>
                              
                                              <?php } ?>
                                    </tbody>
</table>