<?php include "./includes/functions.php";
 

?>
<?php include "./includes/header.php";

?>
    <!-- Navigation -->
    <?php include "./includes/nav.php" ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
            <h1 class="page-header">
                Page Heading <small>Secondary Text</small>
            </h1>



<?php
    
    if (isset($_POST["search"])){
        global $con;
        $search = $_POST["search"];
        $sql = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
        $result = mysqli_query($con,$sql);
        if(!$result){
            die();
            
        }
        else {$count = mysqli_num_rows($result);
            if ($count == 0){
                echo "<h1>No Result Found</h1>";
            } 
            else{              
            
                while ($row = mysqli_fetch_assoc($result)) {
                    $post_id = $row ["post_id"];
                    $post_title = $row ["post_title"];
                    $post_author = $row ["post_author"];
                    $post_date = $row ["post_date"];
                    $post_content = $row ["post_content"];
                    $post_tags = $row ["post_tags"];
                    $post_image = $row ["post_image"]
                    ?>

                    <!-- First Blog Post -->
                    <h2>
                        <a href="#"><?php echo $post_title ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php"><?php echo $post_author ?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date ?></p>
                    <hr>
                    <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="" width= "700px" height="300px">
                    <hr>
                    <p><?php echo $post_content ?></p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>
                    
                    <?php 
                }
            }
        }
    }
    
?>
                
                

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "./includes/sidebar.php" ?>

        </div>
        <!-- /.row -->

        <?php include "./includes/footer.php" ?>