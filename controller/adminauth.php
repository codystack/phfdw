<?php
// Connect Database
require_once "../config/db.php";

// Admin Login script
if (isset($_POST['adminlogin_btn'])) {

    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);

    $password = sha1($password);
    $query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $email = $row['email'];
        $id = $row['id'];
        $position = $row['position'];
    }if (mysqli_num_rows($result) == 1) {
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['id'] = $id;
        header('location: dashboard');
    }else {
        $_SESSION['message_title'] = "Incorrect Details";
        $_SESSION['message'] = "Please login with correct credentials!";
    }
}