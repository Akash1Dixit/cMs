<?php   
        if(isset($_GET['p_id'])){

        	$the_post_id = $_GET['p_id'];
        }

          $query = "SELECT * FROM posts WHERE post_id= {$the_post_id} ";
          $result = mysqli_query($connection,$query);
          while($row= mysqli_fetch_assoc($result)){
         $post_id = $row['post_id'];
         $post_category_id=$row['post_category_id'];
         $post_author = $row['post_author'];
         $post_title = $row['post_title'];
         $post_content = $row['post_content'];
         $post_status = $row['post_status'];
         $post_image = $row['post_image'];
         $post_tags = $row['post_tags'];
         $post_date=$row['post_date'];
     }
 ?>
<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="post_title">Post Title</label>
		<input value="<?php echo $post_title ;  ?>" type="text" class="form-control" name="post_title">
	</div>
	<div class="form-group">
		<label for="post_category_id">Post Category Id</label>
		<select name="post_category" id="">
			<?php 
		    $query = "SELECT * FROM categories ";
		    $option_query= mysqli_query($connection,$query);
		    while($row=mysqli_fetch_assoc($option_query)){
		    	$cat_id = $row['cat-id'];
		    	$cat_title=$row['cat_title'];

		     echo "<option value={$cat_id}>$cat_title</option> ";
		    }

		  ?>
		</select>
	</div>
	<div class="form-group">
		<label for="post_author">Post Author</label>
		<input value="<?php echo $post_author ;  ?>" type="text" class="form-control" name="post_author">
	</div>
	<div class="form-group">
		<label for="post_status">Post Status</label>
		<input value="<?php echo $post_status ;  ?>" type="text" class="form-control" name="post_status">
	</div>
	<div class="form-group">
		<img width="100" src="../images/<?php echo $post_image; ?>" alt="">
		<input type="file" name="post_image">
	</div>
	<div class="form-group">
		<label for="post_tags">Post Tags</label>
		<input value="<?php echo $post_tags;?>" type="text" class="form-control" name="post_tags">
	</div>
	<div class="form-group">
		<label for="post_content">Post Content</label>
		<textarea name="post_content" class="form-control" id="" cols="30" rows="10">
			<?php echo $post_content ;  ?>
		</textarea>
	</div>
	<div class="form-group">
		
		<input type="submit" class="btn btn-success" name="create_post" value="Publish Post">
	</div>
</form>