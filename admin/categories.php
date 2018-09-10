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

                        <div class="col-xs-6">
                            <?php 
                            if(isset($_POST['submit'])){
                                $cat_title = $_POST['cat_title'];

                                if($cat_title=="" || empty($cat_title)){
                                    echo "Field should not be empty";
                                }
                                else {
                                    $query = "INSERT INTO categories(cat_title)  ";
                                    $query  .= "VALUE('{$cat_title}') " ;
                                    $Add_category = mysqli_query($connection,$query);

                                    if(!$Add_category){
                                        die("Failed To Update".mysqli_error($connection));
                                    }
                                }
                            }
                             ?>
                            <form action=""  method="post">
                                <div class="form-group">
                                    <label for="cat-title">Add Category</label>
                                    <input type="text" class="form-control" name="cat_title" />
                                </div>
                                <div class="form-group">                               
                                    <input type="submit" class="btn btn-success" name="submit" value="Add Category" />
                                </div>

                            </form>

                             <?php //FOR EDIT THEN UPDATE
                            if(isset($_GET['edit'])){
                                $edit_cat_id = $_GET['edit'];
                                $query = "SELECT * FROM categories WHERE cat_id = {$edit_cat_id} ";
                                $edit_all_from_categories = mysqli_query($connection,$query);

                        while($row= mysqli_fetch_assoc($edit_all_from_categories)){
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];  ?>

                          <input value="<?php if(isset($cat_title)){echo $cat_title ;}  ?>" type="text"  class="form-control" name="cat_title" />

                          <?php  } } ?>
                             <form action=""  method="post">
                                <div class="form-group">
                                    <label for="cat-title">Edit Category</label>
                                </div>
                                <div class="form-group"> 

                                    <input type="submit" class="btn btn-success" name="submit" value="EuP Category" />
                                </div>

                            </form>
                           



                            
                        </div>
                        <div class="col-xs-6">
                     <?php 
                          $query = "SELECT * FROM categories ";
                          $select_all_from_categories = mysqli_query($connection,$query);

                         ?>

                            <table class="table table-bordered table-dark table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th> Category Title </th>
                                    </tr>
                                </thead>
                                <tbody>                    
                  <?php
                    while($row= mysqli_fetch_assoc($select_all_from_categories)){
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];
                        echo "<tr>";
                        echo "<td>{$cat_id}</td>";
                        echo "<td>{$cat_title}</td>";
                        echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";

                        echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
                        echo "<tr>";
                       } 
                     ?>
                     <?php 
                           if(isset($_GET['delete'])){
                            $the_cat_id = $_GET['delete'];
                            $query = "DELETE FROM categories WHERE cat_id= {$the_cat_id} ";
                            $delete_query = mysqli_query($connection,$query);

                            header("LOCATION:categories.php");
                           }


                      ?>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "includes/adFooter.php" ; ?>