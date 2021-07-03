<table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Id Inap</th>
                                            <th>No Transaksi</th>
                                            <th>No Id</th>
                                            <th>Jumlah Tamu</th>
                                            <th>Check In</th>
                                            <th>Check Out</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include_once('controller/inap.php');
                                            $no = 1;
                                            $inapObj = new Inap();
                                            $result = $inapObj->viewInap();

                                            while($row = $result->fetch_array()){
                                                ?>
                              
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $row['IdInap'] ?></td>
                                                    <td><?php echo $row['NoTransaksi'] ?></td>
                                                    <td><?php echo $row['NoId'] ?></td>
                                                    <td><?php echo $row['JumlahTamu'] ?></td>
                                                    <td><?php echo $row['CheckIn'] ?></td>
                                                    <td><?php echo $row['CheckOut'] ?></td>
                                                    <td class="text-center">
                                                    <?php
                                                        $inap = $row['IdInap'];
                                                        $id = base64_url_encode($inap);
                                                    ?>
                                                      <a href="home.php?edit=<?php echo $id?>"><button class="btn btn-sm btn-primary" data-toggle="modal">EDIT</button></a>
                                                      <a href="home.php?delete=<?php echo $id?>"><button class="btn btn-sm btn-danger" data-toggle="modal">DELETE</button></a>
                                                    </td>
                                                </tr>
                              
                                              <?php } ?>
                                    </tbody>
</table>