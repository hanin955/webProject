<?php
include 'config.php';
if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
     $checkEmail="select * From users where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo"Email address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO users(firstName,lastName,email,password) Values ('$firstName','$lastName','$email','$password'");
        if($conn->query($insertQuery)==True){
            header("location: C:\Users\MSI\Desktop\mon travail web\Web-Project-2\index.html");
        }
        else{
            echo "Error :".$conn->error;
        }
     }
}
?>