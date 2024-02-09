<?php
include("connect.php");

$ids = $_GET['ID'];

$query = "DELETE FROM form WHERE id = '$ids' ";
$data = mysqli_query($conn,$query);

if($data){
    echo "<script>alert('Record Deleted')</script>";
    ?>
        <meta http-equiv = "refresh" content = "0; url = http://localhost/PHP%20CRUD/display.php" />

    <?php
}
else{
    echo "<script>alert('Failed to Delete')</script>s";
}
?>