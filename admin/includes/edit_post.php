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