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


//Designers Query
if (isset($_POST['showcase_btn'])) {

    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $brandName = $conn->real_escape_string($_POST['brandName']);
    $phoneNum = $conn->real_escape_string($_POST['phoneNum']);
    $address = $conn->real_escape_string($_POST['address']);
    $facebook = $conn->real_escape_string($_POST['facebook']);
    $instagram = $conn->real_escape_string($_POST['instagram']);
    $specialty = $conn->real_escape_string($_POST['specialty']);
    $designerCategory = $conn->real_escape_string($_POST['designerCategory']);
    $participated = $conn->real_escape_string($_POST['participated']);
    $regCode = 'FDW'.rand(1000, 9999);
    $paymentStatus = $conn->real_escape_string($_POST['paymentStatus']);


    $check_exhibitor_query = "SELECT * FROM designers WHERE email='$email'";
    $result = mysqli_query($conn, $check_exhibitor_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user_message_title'] = "User Already Exist!";
        $_SESSION['user_message'] = "Please contact admin";
    }

    // Finally, insert details into database
    $query = "INSERT INTO designers (firstName, lastName, email, brandName, phoneNum, address, facebook, instagram, specialty, designerCategory, participated, regCode) 
                VALUES('$firstName', '$lastName', '$email', '$brandName', '$phoneNum', '$address', '$facebook', '$instagram', '$specialty', '$designerCategory', '$participated', '$regCode')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['des_success_message_title']  = "Registration Successful👋";
        $_SESSION['des_success_message']    = "You're being redirected";
        $_SESSION['regCode'] = $regCode;
        $_SESSION['designerCategory'] = $designerCategory;
        $_SESSION['firstName'] = $firstName;
        $_SESSION['email'] = $email;
        $_SESSION['brandName'] = $brandName;
        $_SESSION['paymentStatus'] = $paymentStatus;
    }else {
        $_SESSION['message_title']  = "Request Failed";
        $_SESSION['message']    = "Error sending request now: ".mysqli_error($conn).$id;
    }

}


//Models Query
if (isset($_POST['model_btn'])) {

    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $phoneNum = $conn->real_escape_string($_POST['phoneNum']);
    $age = $conn->real_escape_string($_POST['age']);
    $height = $conn->real_escape_string($_POST['height']);
    $burstChest = $conn->real_escape_string($_POST['burstChest']);
    $waist = $conn->real_escape_string($_POST['waist']);
    $hip = $conn->real_escape_string($_POST['hip']);
    $dressSuit = $conn->real_escape_string($_POST['dressSuit']);
    $shoeSize = $conn->real_escape_string($_POST['shoeSize']);
    $agency = $conn->real_escape_string($_POST['agency']);
    $agencyContact = $conn->real_escape_string($_POST['agencyContact']);


    $check_model_query = "SELECT * FROM models WHERE email='$email'";
    $result = mysqli_query($conn, $check_model_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user_message_title'] = "User Already Exist!";
        $_SESSION['user_message'] = "Please contact admin";
    }

    // Finally, insert details into database
    $query = "INSERT INTO models (firstName, lastName, email, phoneNum, age, height, burstChest, waist, hip, dressSuit, shoeSize, agency, agencyContact) 
                VALUES('$firstName', '$lastName', '$email', '$phoneNum', '$age', '$height', '$burstChest', '$waist', '$hip', '$dressSuit', '$shoeSize', '$agency','$agencyContact')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['model_success_message_title']  = "Registration Successful👋";
        $_SESSION['model_success_message']    = "You're being redirected";
    }else {
        $_SESSION['message_title']  = "Request Failed";
        $_SESSION['message']    = "Error sending request now: ".mysqli_error($conn).$id;
    }

}


//Access Query
if (isset($_POST['access_btn'])) {

    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $phoneNum = $conn->real_escape_string($_POST['phoneNum']);
    $companyName = $conn->real_escape_string($_POST['companyName']);
    $position = $conn->real_escape_string($_POST['position']);
    $accessCode = 'PHFDW'.rand(1000, 9999);


    $check_model_query = "SELECT * FROM access WHERE email='$email'";
    $result = mysqli_query($conn, $check_model_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['message_title'] = "User Already Exist!";
        $_SESSION['message'] = "Please contact admin";
    }

    // Finally, insert details into database
    $query = "INSERT INTO access (firstName, lastName, email, phoneNum, companyName, position, accessCode) 
                VALUES('$firstName', '$lastName', '$email', '$phoneNum', '$companyName', '$position','$accessCode')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['access_success_message_title']  = "Registration Successful👋";
        $_SESSION['access_success_message']    = "You're being redirected";
        $_SESSION['accessCode'] = $accessCode;
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['email'] = $email;
        $_SESSION['companyName'] = $companyName;
    }else {
        $_SESSION['message_title']  = "Submission Failed";
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

