<?php

//DISCLAIMER!! Jal, ini gw coding based on video BE pertemuan ke-7 yak di menit 1 jam 26 - 1 jam 35.

//Copy coding below to your index file
/* <a class="btn btn-danger" href="./src/crud/delete.php?id=<?= $user['id]?>" 
 role="button" onclick="return confirm{'Are you sure want to delete this user?'};">Delete</a> */

//Config with index 

// include database connection file
require('../../config/config_db.php');
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$query = "DELETE FROM users WHERE id=$id";
$delete = mysqli_query( $mysqli, $query );
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../../index.php?delete=".$delete);

/* 
1.copy ini ke file index buat nampilin status kehapus
2. trus paste di atas table section

<?php if(isset($_GET['delete'])):?>
    <div type="alert alert-success" role="alert">
        User Deleted Successfully  
    </div>
<?php endif ?>
 */

?>