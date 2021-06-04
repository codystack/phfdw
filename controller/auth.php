<?php
// Connect Database
require_once "config/db.php";

//Exhibitors Query
if (isset($_POST['exhibit_btn'])) {

    $email = $conn->real_escape_string($_POST['email']);
    $companyName = $conn->real_escape_string($_POST['companyName']);
    $phoneNum = $conn->real_escape_string($_POST['phoneNum']);
    $address = $conn->real_escape_string($_POST['address']);
    $contactperson = $conn->real_escape_string($_POST['contactperson']);
    $items = $conn->real_escape_string($_POST['items']);
    $boothSize = $conn->real_escape_string($_POST['boothSize']);
    $regCode = 'FDW'.rand(1000, 9999);
    $paymentStatus = $conn->real_escape_string($_POST['paymentStatus']);


    $check_exhibitor_query = "SELECT * FROM exhibitors WHERE email='$email'";
    $result = mysqli_query($conn, $check_exhibitor_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user_message_title'] = "User Already Exist!";
        $_SESSION['user_message'] = "Please contact admin";
    }

    // Finally, insert details into database
    $query = "INSERT INTO exhibitors (email, companyName, phoneNum, address, contactperson, items, boothSize, regCode) 
                VALUES('$email', '$companyName', '$phoneNum', '$address', '$contactperson', '$items', '$boothSize', '$regCode')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['success_message_title']  = "Registration Successful👋";
        $_SESSION['success_message']    = "You're being redirected";
        $_SESSION['regCode'] = $regCode;
        $_SESSION['boothSize'] = $boothSize;
        $_SESSION['contactperson'] = $contactperson;
        $_SESSION['email'] = $email;
        $_SESSION['companyName'] = $companyName;
        $_SESSION['paymentStatus'] = $paymentStatus;
    }else {
        $_SESSION['message_title']  = "Request Failed";
        $_SESSION['message']    = "Error sending request now: ".mysqli_error($conn).$id;
    }

}


//Contact Query
if (isset($_POST['contact_btn'])) {

    $email = $conn->real_escape_string($_POST['email']);
    $fullName = $conn->real_escape_string($_POST['fullName']);
    $companyName = $conn->real_escape_string($_POST['companyName']);
    $phoneNum = $conn->real_escape_string($_POST['phoneNum']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $comment = $conn->real_escape_string($_POST['comment']);

    // Finally, insert details into database
    $query = "INSERT INTO contact (email, fullName, companyName, phoneNum, subject, comment) 
  			        VALUES('$email', '$fullName', '$companyName', '$phoneNum', '$subject', '$comment')";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['contact_success_message_title'] = "Contact Request Sent!";
        $_SESSION['contact_success_message'] = "We will get back to you ASAP.";
    }else {
        $_SESSION['message_title']  = "Request Failed";
        $_SESSION['message']    = "Error sending request now: ".mysqli_error($conn).$id;
    }
}

