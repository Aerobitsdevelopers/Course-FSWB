<?php
include("./config.php");
session_start();

$error = "Login to continue";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($mysqli, substr($_POST['username'], 0, 60));
    $mypassword = mysqli_real_escape_string($mysqli, substr($_POST['password'], 0, 16));

    $myusernameformatted = strtolower(preg_replace('/\s+/', '', $myusername));

    $result = $mysqli->query("SELECT id,username,password FROM users WHERE username = '$myusernameformatted'");

    if ($result) {
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        if ($count == 1 && password_verify($mypassword, $row['password'])) {
            $_SESSION['login_user'] = $myusernameformatted;
            header("location: index.php");
        } else {
            header("location: login.php?status=invalid-credentials");
        }
    }
}
?>