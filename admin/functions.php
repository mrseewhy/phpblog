
<?php 
function confirm($result){
    global $con;
    if (!$result) {
        die("Query Failed . ".mysqli_error($con));
    }
}



function insert_cat(){
    global $con;
    if(isset($_POST['save'])){
        $title = $_POST['cat_title'];
        if($title == "" || empty($title)){
            echo "Field cannot be void";
        }
        else{
            $sql = "INSERT INTO categories (cat_title) VALUE ('$title')";
            $create_query = mysqli_query($con, $sql);
        }
    }
}


function findAllCat(){
    global $con;
    $sql = "SELECT * FROM categories";
    $read_query = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($read_query)){
        $id = $row["cat_id"];
        $title = $row["cat_title"];
        echo "<tr>
                <td>$id</td>
                <td>$title</td>
                <td><a href='categories.php?edit={$id}' class= 'btn btn-success btn-sm'>Edit</a> &nbsp; <a href='categories.php?delete={$id}' class= 'btn btn-danger btn-sm'>Delete</a> </td>
            </tr>";
    }
}

function deleteCat(){
    global $con;
    if(isset($_GET['delete'])){
        $cat_id = $_GET['delete'];
        $sql = "DELETE FROM categories WHERE cat_id = $cat_id";
        $del_query = mysqli_query($con, $sql);
        header("location: categories.php");
    }
}
    
?>