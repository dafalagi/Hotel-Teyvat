<table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>No Transaksi</th>
                                            <th>Nominal</th>
                                            <th>Tipe Bayar</th>
                                            <th>Atas Nama</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include_once('controller/transaksi.php');
                                            $no = 1;
                                            $transaksiObj = new Transaksi();
                                            $result = $transaksiObj->viewTransaksi();

                                            while($row = $result->fetch_array()){
                                                ?>
                              
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $row['NoTransaksi'] ?></td>
                                                    <td><?php echo $row['Nominal'] ?></td>
                                                    <td><?php echo $row['TipeBayar'] ?></td>
                                                    <td><?php echo $row['AtasNama'] ?></td>
                                                    <td class="text-center">
                                                        <?php 
                                                            $notransaksi = $row['NoTransaksi'];
                                                            $id = base64_url_encode($notransaksi);
                                                        ?>
                                                      <a href="home.php?edit=<?php echo $id?>"><button class="btn btn-sm btn-primary" data-toggle="modal">EDIT</button></a>
                                                      <a href="home.php?delete=<?php echo $id?>"><button class="btn btn-sm btn-danger" data-toggle="modal">DELETE</button></a>
                                                    </td>
                                                </tr>
                              
                                              <?php } ?>                                        
                                    </tbody>   
</table>