  <?php 
        function insert_category(){

             global $connection;

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
 }
        
                ?>