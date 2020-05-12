<?php include "db.php"; 
function showCatInMenu(){
    global $con;
    $sql = "SELECT * FROM categories";
    $result = mysqli_query($con, $sql);
    if (!$result){
        die("We cannot connect to category table " . mysqli_error($con));
    } else {
        echo "connected to category table";
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $catname = $row ["cat_title"];
        
        echo
        "<li><a href='index.php/category/$catname'>$catname</a></li>";
    }
}



?>