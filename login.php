<?php
require_once('connection.php');

$email=$_POST['email'];
$password=$_POST['password'];
$cpassword= md5($password);

$sql = "SELECT * FROM  signin WHERE Email='$email'AND PpassWord='$password'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $id=$row["id"];
        $email=$row["Email"];
        session_start();
        $_SESSION['id']=$id;
        $_SESSION['email']=$email;
    }
    header("Location: aromatic.php");
}
else{
    echo "Invalid email or password";
}
?>