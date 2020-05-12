<table class="table table-striped table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Tags</th>
                                    <th>Comments</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM posts";
                                $post_query = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_assoc($post_query)) {
                                    $post_id = $row ['post_id'];
                                    $post_author = $row['post_author'];
                                    $post_title = $row ['post_title'];
                                    $post_cat = $row['post_category_id'];
                                    $post_status = $row['post_status'];
                                    $post_image = $row['post_image'];
                                    $post_tag = $row['post_tags'];
                                    $post_comments = $row['post_comment_count'];
                                    $post_date = $row['post_date'];
                                    echo "<tr>
                                    <td>$post_id</td>
                                    <td>$post_author</td>
                                    <td>$post_title</td>
                                    <td>$post_cat</td>
                                    <td>$post_status</td>
                                    <td><img src='../images/$post_image' width='100px' ></td>
                                    <td>$post_tag</td>
                                    <td>$post_comments</td>
                                    <td>$post_date</td>
                                    <td><a class='btn btn-info' href='posts.php?source=edit_post&p-id=$post_id'> EDIT</a></td>
                                    <td><a class='btn btn-danger' href='posts.php?delete=$post_id'> DELETE</a></td>
                                    </tr>";
                                }

                                ?>
                                
                            </tbody>
                        </table>

    <?php 
        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];

            $sql = "DELETE FROM posts WHERE post_id = $id";

            $delete_post_query = mysqli_query($con, $sql);
            header("location: posts.php");
        }
    
    ?>