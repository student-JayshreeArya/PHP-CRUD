<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>Login Page</title>
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form action="#" method="POST" autocomplete="OFF">
        <div class="form">
            <input type="text" name="username" class="textfiled" placeholder="Username">
            <input type="password" name="password" class="textfiled" placeholder="Password">
            <div class="forgetpass"><a href="#" class="link" onclick="message()">Forgot Password ?</a></div>
            <input type="submit" name="login" value="Login" class="btn">
            <div class="signup">New Member ?<a href="#" class="link">SignUp Here</a></div>
        </div>
    </div>
</form>
    <script>
        function message(){
            alert("Reset Password");
        }
    </script>
</body>
</html>

<?php
include("connect.php");

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pwd = $_POST['password'];

    $query = "SELECT * FROM form WHERE email = '$user' && password = '$pwd' ";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    //echo $total;

    if($total == 1){
        $_SESSION['user_name'] = $user;
        header('location:display.php');
        }   
        //echo "Login successful";


    //     <meta http-equiv = "refresh" content = "0; url = http://localhost/PHP%20CRUD/display.php"/>
                // in place of header
    else{
        echo "Login Failed";
    }
}
?>