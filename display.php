<?php
session_start();
//echo "Welcome ".$_SESSION['user_name'];
?>

<html>
    <head>
        <title>
            Display
        </title>
        <style>
            body{
                background: rgb(104, 131, 131) 
            }
            table{
                background-color: white;
            }
            .update, .delete{
                background-color: green;
                color: white;
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 23px;
                width: 100px;
                font-weight: bold;
                cursor: pointer;
            }
            .delete{
                background-color: red;
            }
        </style>
    </head>
</html>

<a href="logout.php"><input type="submit" name="" value="LogOut" style="background: rgb(54, 67, 54); color: white; height: 35px; width: 100px; margin-top: 20px; font-size: 18px; border: 0; border-radius: 5px; cursor: pointer;"></a>

<?php
include ("connect.php");
error_reporting(0);

$userprofile = $_SESSION['user_name'];  

if($userprofile == true){

}
else{
    header('location:login.php');
}

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
// echo $total;


if($total != 0){
    ?>
    <h2 align="center"><mark>Displaying All Records</mark></h2>
    <center><table border = "3" cellspacing = "5" width = "100%">
        <tr>
            <th width="6%">Id</th>
            <th width="5%">Image</th>
            <th width="8%">First Name</th>
            <th width="8%">Last Name</th>
            <th width="5%">Gender</th>
            <th width="13%">Email Address</th>
            <th width="9%">Phone Number</th>
            <th width="5%">Caste</th>
            <th width="12%">Languages</th>
            <th width="20%">Address</th>
            <th width="12%">Operation</th>
        </tr>
   
<?php
while ($result = mysqli_fetch_assoc($data)){
    echo "<tr>
        <td>".$result['id']."</td>
        <td><img src= '".$result['std_img']."' height='100px' width='100px'</td>
        <td>".$result['fname']."</td>
        <td>".$result['lname']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['email']."</td>
        <td>".$result['phone']."</td>
        <td>".$result['caste']."</td>
        <td>".$result['language']."</td>
        <td>".$result['address']."</td>
        <td><a href='update_design.php?ID=$result[id]'><input type='submit' value='Update' class='update'></a>
              
        <a href='delete.php?ID=$result[id]'><input type='submit' value='Delete' class='delete' onclick = 'return checkdelete()'></a></td>

        </tr>";
    }
}
else{
    echo "No records found";
}
?>
</table>
</center>



<script>
    function checkdelete(){
        return confirm('Are you sure you want to delete this data');
    }
</script>

<!-- echo $result['fname']." ".$result['lname']." ".$result['gender']." ".$result['email']." ".$result['phone']." ".$result['address']."<br>"; -->
