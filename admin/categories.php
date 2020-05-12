<?php include "./includes/admin-header.php "; ?>


    <div id="wrapper">

        <!-- Navigation -->
        <?php include "./includes/admin-nav.php "; ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Author</small>
                        </h1>
                        <div class="col-sm-6">
                            <form action="" method="post">
                            <div class="form-group">
                              <label for="cat_title">Add Category:</label>
                              <input type="text" class="form-control" name="cat_title" placeholder="Enter Category Name">
                            </div>
                            <button type="submit" class="btn btn-primary" name="save">Submit</button>
                            </form>
                                <?php
                                    if(isset($_GET['edit'])){
                                        $cat_id = $_GET['edit'];
                                        include "./includes/update_cat.php";
                                    }
                                 ?>
                                <?php insert_cat() ?>
                        </div>


                        <div class="col-sm-6 text-center">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Categories</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php findAllCat() ?>
                                    <?php deleteCat() ?>

                                   
                                    
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

        <?php include "./includes/admin-footer.php "; ?>