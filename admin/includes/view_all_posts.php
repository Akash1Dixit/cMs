
                        
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Auhtor</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Status</th>
                                    <th>Images</th>
                                    <th>Tags</th>
                                    <th>Comments</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>

                    <?php 
                          $query = "SELECT * FROM posts ";
                          $result = mysqli_query($connection,$query);
                        while($row= mysqli_fetch_assoc($result)){
                         $post_id = $row['post_id'];
                         $post_author = $row['post_author'];
                         $post_title = $row['post_title'];
                         $post_content = $row['post_content'];
                         $post_status = $row['post_status'];
                         $post_image = $row['post_image'];
                         $post_tags = $row['post_tags'];
                         $post_date=$row['post_date'];

                          echo "<tr>";
                               echo "<td>$post_id</td>";
                               echo "<td>$post_author</td>";
                               echo "<td>$post_title</td>";
                               echo "<td>$post_content</td>";
                               echo "<td>$post_status</td>";
                               echo "<td><img width=100 src='../images/$post_image'></td>";
                               echo "<td> $post_tags</td>";
                               echo "<td></td>";
                               echo "<td> $post_date</td>";
                               echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
                               echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";

                           echo "</tr>";


                    }

                           if(isset($_GET['delete'])){

                              $delete = $_GET['delete'];

                              $query =  "DELETE FROM posts WHERE post_id= {$delete} ";
                              $result = mysqli_query($connection,$query);
                              header("LOCATION:posts.php");
                              if(!$result){
                                die("Failed to connect".mysqli_error($connection));

                              }
                             }

                     ?>
                                
                            </tbody>
                        </table>
                       