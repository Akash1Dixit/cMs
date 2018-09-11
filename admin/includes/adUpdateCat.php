
                             <form action=""  method="post">
                                <div class="form-group">
                                    <label for="cat-title">Edit Category</label>
                                </div>



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



                            <?php 
                           if(isset($_POST['update_category'])){
                            $the_cat_title = $_POST['cat_title'];
                            $query = "UPDATE categories SET cat_title = '{$the_cat_title}' WHERE cat_id= {$cat_id} ";
                            $update_query = mysqli_query($connection,$query);
                           }
                      ?>

                                <div class="form-group"> 

                                    <input type="submit" class="btn btn-success" name="update_category" value="EuP Category" />
                                </div>

                            </form>
