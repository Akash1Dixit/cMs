<?php include "./includes/db.php"; ?>
                        
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Auhtor</th>
                                    <th>Comment</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Approve</th>
                                    <th>Unapprove</th>
                                    <th>In Response To</th>
                                    <th>Date</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                    <?php 
                          $query = "SELECT * FROM posts ";
                          $result = mysqli_query($connection,$query);
                        while($row= mysqli_fetch_assoc($result)){
                         $comment_id = $row['comment_id'];
                         $comment_author = $row['comment_author'];
                         $comment_post_id = $row['comment_post_id'];
                         $comment_email = $row['comment_email'];
                         $comment_status = $row['comment_status'];
                         $comment_content = $row['comment_content'];
                         $comment_date=$row['comment_date'];

                          echo "<tr>";
                               echo "<td>$comment_id</td>";
                               echo "<td>$comment_author</td>";
                               echo "<td>$comment_email</td>";
                               echo "<td>$comment_status</td>";
                               echo "<td>$comment_content</td>";
                              
                               echo "<td> $comment_date</td>";
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
                       