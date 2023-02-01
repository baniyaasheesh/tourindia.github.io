<?php
$username= $_POST['username'];
$email= $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

//database
$conn = new mysqli('localhost','root','','ok');
if($conn->connect_error){ 
    die('Connection Faild :' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO registration(username,email,passwor,confirm_password)
    values(?,?,?,?)"); 
    $stmt->bind_param("ssss",$username,$email,$password,$confirm_password);
    $stmt->execute();
    echo "Succuesfully Registered..";
    $stmt->close();
    $conn->close();
}

?>