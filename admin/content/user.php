<table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include_once('controller/user.php');
                                            $no = 1;
                                            $userObj = new User();
                                            $result = $userObj->viewUser();

                                            while($row = $result->fetch_assoc()){
                                                ?>
                              
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $row['Username'] ?></td>
                                                    <td><?php echo $row['Email'] ?></td>
                                                    <td><?php echo $row['Password'] ?></td>
                                                    <td class="text-center">
                                                        <?php 
                                                            $username = $row['Username'];
                                                            $id = base64_url_encode($username);
                                                        ?>
                                                      <a href="home.php?edit=<?php echo $id?>"><button class="btn btn-sm btn-primary">EDIT</button></a>
                                                      <a href="home.php?delete=<?php echo $id?>"><button class="btn btn-sm btn-danger">DELETE</button></a>
                                                    </td>
                                                </tr>
                              
                                              <?php } ?>                                        
                                    </tbody>   
</table>