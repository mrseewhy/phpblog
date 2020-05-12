<?php
if (isset($_POST['publish'])) {
    $post_title = $_POST['title'];
    $post_category = $_POST['category'];
    $post_author = $_POST['author'];
    $post_status = $_POST['status'];

    $file = $_FILES['image'];
    $post_image = $file['name'];
    $post_image_temp = $file['tmp_name'];

    $post_tags = $_POST['tags'];
    $post_content = $_POST['content'];
    $post_date = date('d-m-y');
    $post_comment_count = 4;

    move_uploaded_file($post_image_temp, "../images/$post_image");

    $sql = "INSERT INTO posts (post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status ) VALUES ({$post_category}, '{$post_title}', '{$post_author}', now(), '{$post_image}','{$post_content}', '{$post_tags}', {$post_comment_count}, '{$post_status}')" ;

    $add_post_query = mysqli_query($con, $sql);
    confirm($add_post_query);

    header("Location: ./posts.php?source=add_post");
}
?>



<div class="container p-3" style="width:100%">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="post title">Post Title</label>
          <input type="text" class="form-control" name="title" >
        </div>
        <div class="form-group">
          <label for="Post Category">Post Category</label>
          <input type="text" class="form-control" name="category" >
        </div>
        <div class="form-group">
          <label for="Post Author">Post Author</label>
          <input type="text" class="form-control" name="author" >
        </div>
        <div class="form-group">
          <label for="Post Status">Post Status</label>
          <input type="text" class="form-control" name="status" >
        </div>
        <div class="form-group">
           <label for="post image ">Post Image</label>
           <input type="file" class="form-control-file" name="image" placeholder="Upload Image Here" >
        </div>
        <div class="form-group">
          <label for="Post Tags">Post Tags</label>
          <input type="text" class="form-control" name="tags" >
         </div>
         <div class="form-group">
           <label for="Post Content">Post Content</label>
           <textarea class="form-control" name="content" rows="10"></textarea>
         </div>
         <button type="submit" class="btn btn-primary" name= "publish">Publish</button>

    </form>
</div>