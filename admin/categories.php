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
                            <form action=""  method="post">
                                <div class="form-group">
                                    <label for="cat-title">Add Category</label>
                                    <input type="text" class="form-control" name="cat_title" />
                                </div>
                                <div class="form-group">                               
                                    <input type="submit" class="btn btn-success" name="submit" value="Add Category" />
                                </div>

                            </form>
                        </div>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "includes/adFooter.php" ; ?>