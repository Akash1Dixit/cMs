<?php include "includes/adHeader.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/adNavigation.php"; ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                  <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin
                            <small>Author</small>
                        </h1>
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
                           echo "</tr>";

                    }

                     ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "includes/adFooter.php" ; ?>