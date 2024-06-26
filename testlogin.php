<?php
include 'connect.php';

$sql = "SELECT * FROM admin";
$result = mysqli_query($con,$sql);


if(isset($_POST['submit'])){
    while ($admin =(mysqli_fetch_assoc($result))) {

$_SESSION['username'] = $admin['Username'];
        $_user = $admin['Username'];
        $_pass = $admin['Password'];
        
        if ($_POST['username']==$_user && $_POST['mypassword']==$_pass)
        {
            header("location:controlpanel.php");
            session_start();
            $_SESSION['username'] = $_user;
        }else{
            echo '<script type="text/javascript">';
            echo 'alert("Incorrect Mot de passe ou nom d\'utilisateur!");';
            echo 'window.location.href = "adminlogin.html";';
            echo '</script>';
            exit; // Make sure to exit after displaying the alert and redirecting

           
        }
    }

}


?>