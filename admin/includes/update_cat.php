<form action="" method="post">
                            <div class="form-group">
                              <label for="cat_title">Update Category:</label>
                              <?php
                                    if(isset($_GET['edit'])){
                                        $cat_id = $_GET['edit'];
                                        $sql = "SELECT * FROM categories WHERE cat_id = $cat_id";
                                        $del_query = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_assoc($del_query)){
                                            $cat_id = $row["cat_id"];
                                            $title = $row["cat_title"];
                                            ?>
                                            
                                            <input type= 'text' class='form-control' name= 'cat_title' placeholder='Enter Category Name' value = '<?php if (isset($title)){echo $title ;}?>'   >

                                            <?php
                                        }

                                        
                                    }

                                    ?>
                            </div>
                            <button type="submit" class="btn btn-success" name="update">Update</button>
                            </form>

                            <?php
                                    if(isset($_POST['update'])){
                                        $title = $_POST['cat_title'];
                                        $sql = "UPDATE categories SET cat_title = '$title' WHERE cat_id = $cat_id";
                                        $up_query = mysqli_query($con, $sql);
                                        if(!$up_query){
                                            die("Query Failed ". mysqli_error($con));
                                        }
                                        
                                    }

                                    ?>