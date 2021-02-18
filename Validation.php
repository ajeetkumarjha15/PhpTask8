<?php
session_start();

$message = "";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cedcoss";


$conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
  
  if (isset($_POST['Login'])){
    $email = trim($_POST['email']);
    $pwd = trim($_POST['pwd']);


if(empty($email) && empty($pwd)) {
    $message = "Username/Password can't be empty";
    } 
        else 
            {
            $sql = "SELECT `email`, `password` FROM `Registration_Table` WHERE `email`= $email AND `pwd` = $pwd;
            
            $query = $conn->prepare($sql);
            $query->execute(array($email,$pwd));

        if($query->rowCount() >= 1) {
            $_SESSION['email'] = $email;
            header('location: https://192.168.2.197/Ajax/Php_task/Task8.1/LoginSucess.php');
            } 
            else 
                {
                $message = "Username/Password is wrong";
            }
        }
    }

?>