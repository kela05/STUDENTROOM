 <table class = "table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Image</th>
                                    <th>Role</th>
                                   
                                   
                                </tr>
                            </thead>
                            
                            <tbody>
                               
                               
                               
                        <?php
                                
                          $query = "SELECT * FROM users";
                          $select_users = mysqli_query($connection, $query);
                            
                            while($row = mysqli_fetch_assoc($select_users)){
                                $user_id= $row['user_id'];
                                $username = $row['username'];
                                $password = $row['password'];
                               
                                $email = $row['email'];
                                $user_image = $row['picture'];
                                $user_role = $row['role'];
                               
                        
                            echo "<tr>";
                            
                                 echo "<td>$user_id</td>";
                                 echo "<td>$username</td>";
                                 echo "<td>$email</td>";
                                echo "<td><img width='100' src ='./images/$user_image' alt='image'></td>";
                                 echo "<td>$user_role</td>";
                            
                           
                            
                                        
          echo "<td><a href = 'users.php?source=edit_user&edit_user={$user_id}'>Edit</a></td>"; 
          echo "<td><a href = 'users.php?delete={$user_id}'>Delete</a></td>";
                    
                                            

                            
                            echo "</tr>";
                            
                            
                             }    
                            
                                
                                
                                
                                
                     ?>
                               
                               
                                
                                
                            </tbody>
                            
                            
                            
                        </table>
                        
                       
