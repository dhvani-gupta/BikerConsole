<?php
session_start();
include "databaseconnect.php";

if(isset($_POST['Username']) && isset($_POST['Password'])) {
    
    function validate(_$data) {
        $data = trim(data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return data;
    }
    $username = validate($_POST['Username']);
    $password = validate($_POST['Password']);

    if(empty($username)){
        header ("Location: index.php?error=USERNAME. USERNAME is required.");
        exit();
    }
    else if(empty($password)){
        header ("Location: index.php?error=PASSWORD. PASSWORD is required.");
        exit();
    }

    $sql = "SELECT * FROM  users WHERE user_name = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['Username'] === $username && $row['Password'] === $password){
            echo "Logged In";
            $_SESSION['Username'] = $row['Username'];
            $_SESSION['Name'] = $row['Name'];
            $_SESSION['id'] = $row['id'];
            header("Location home.php");
            exit();
            }
            else{
                header("Location: index.php?error=Incorrect username or password");
            }
        else{
            header("Location: index.php");
            exit();
        }
        }