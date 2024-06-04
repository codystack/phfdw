<?php
// Connect Database
require_once "config/db.php";


//Future Designers Query
if (isset($_POST['future_designers_btn'])) {

    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $brandName = $conn->real_escape_string($_POST['brandName']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $yearEstablished = $conn->real_escape_string($_POST['yearEstablished']);
    $fashionAcademyAttended = $conn->real_escape_string($_POST['fashionAcademyAttended']);
    $yearGraduated = $conn->real_escape_string($_POST['yearGraduated']);
    $listQualifitions = $conn->real_escape_string($_POST['listQualifitions']);
    $regCode = 'PHFW'.rand(1000, 9999);


    // Finally, insert details into database
    $query = "INSERT INTO future (email, firstName, lastName, brandName, phone, yearEstablished, fashionAcademyAttended, yearGraduated, listQualifitions, regCode) 
                VALUES('$email', '$firstName', '$lastName', '$brandName', '$phone', '$yearEstablished', '$fashionAcademyAttended', '$yearGraduated', '$listQualifitions', '$regCode')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['future_success_message_title']  = "Registration Successful👋";
        $_SESSION['future_success_message']    = "You're being redirected";
        $_SESSION['regCode'] = $regCode;
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['brandName'] = $brandName;
    }else {
        $_SESSION['message_title']  = "Request Failed";
        $_SESSION['message']    = "Error sending request now: ".mysqli_error($conn).$id;
    }

}



//Summit Query
if (isset($_POST['summit_btn'])) {

    $email = $conn->real_escape_string($_POST['email']);
    $brandName = $conn->real_escape_string($_POST['brandName']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $instagram = $conn->real_escape_string($_POST['instagram']);
    $regCode = 'PHFW'.rand(1000, 9999);


    // Finally, insert details into database
    $query = "INSERT INTO summit (email, brandName, phone, firstName, lastName, instagram, regCode) 
                VALUES('$email', '$brandName', '$phone', '$firstName', '$lastName', '$instagram', '$regCode')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['summit_success_message_title']  = "Summit Registration Successful👋";
        $_SESSION['summit_success_message']    = "You're being redirected";
        $_SESSION['regCode'] = $regCode;
        $_SESSION['instagram'] = $instagram;
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['email'] = $email;
        $_SESSION['brandName'] = $brandName;
    }else {
        $_SESSION['message_title']  = "Request Failed";
        $_SESSION['message']    = "Error sending request now: ".mysqli_error($conn).$id;
    }

}



//Registration Query
if (isset($_POST['register_btn'])) {

    $email = $conn->real_escape_string($_POST['email']);
    $brandName = $conn->real_escape_string($_POST['brandName']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $interest = $conn->real_escape_string($_POST['interest']);
    $regCode = 'PHFW'.rand(1000, 9999);


    $check_exhibitor_query = "SELECT * FROM registration WHERE email='$email'";
    $result = mysqli_query($conn, $check_exhibitor_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user_message_title'] = "User Already Exist!";
        $_SESSION['user_message'] = "Please contact admin";
    }

    // Finally, insert details into database
    $query = "INSERT INTO registration (email, brandName, phone, firstName, lastName, interest, regCode) 
                VALUES('$email', '$brandName', '$phone', '$firstName', '$lastName', '$interest', '$regCode')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['success_message_title']  = "Registration Successful👋";
        $_SESSION['success_message']    = "You're being redirected";
        $_SESSION['regCode'] = $regCode;
        $_SESSION['interest'] = $interest;
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['email'] = $email;
        $_SESSION['brandName'] = $brandName;
    }else {
        $_SESSION['message_title']  = "Request Failed";
        $_SESSION['message']    = "Error sending request now: ".mysqli_error($conn).$id;
    }

}



//Exhibitors Query
if (isset($_POST['exhibit_btn'])) {

    $email = $conn->real_escape_string($_POST['email']);
    $companyName = $conn->real_escape_string($_POST['companyName']);
    $phoneNum = $conn->real_escape_string($_POST['phoneNum']);
    $address = $conn->real_escape_string($_POST['address']);
    $contactperson = $conn->real_escape_string($_POST['contactperson']);
    $items = $conn->real_escape_string($_POST['items']);
    $regCode = 'PHFW'.rand(1000, 9999);
    $paymentStatus = $conn->real_escape_string($_POST['paymentStatus']);


    // Finally, insert details into database
    $query = "INSERT INTO exhibitors (email, companyName, phoneNum, address, contactperson, items, regCode) 
                VALUES('$email', '$companyName', '$phoneNum', '$address', '$contactperson', '$items', '$regCode')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['exhibition_success_message_title']  = "Registration Successful👋";
        $_SESSION['exhibition_success_message']    = "You're being redirected";
        $_SESSION['regCode'] = $regCode;
        $_SESSION['contactperson'] = $contactperson;
        $_SESSION['email'] = $email;
        $_SESSION['phoneNum'] = $phoneNum;
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
    $participated = $conn->real_escape_string($_POST['participated']);
    $regCode = 'PHFW'.rand(1000, 9999);
    $paymentStatus = $conn->real_escape_string($_POST['paymentStatus']);


    // Finally, insert details into database
    $query = "INSERT INTO designers (firstName, lastName, email, brandName, phoneNum, address, facebook, instagram, participated, regCode) 
                VALUES('$firstName', '$lastName', '$email', '$brandName', '$phoneNum', '$address', '$facebook', '$instagram', '$participated', '$regCode')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['des_success_message_title']  = "Registration Successful👋";
        $_SESSION['des_success_message']    = "You're being redirected";
        $_SESSION['regCode'] = $regCode;
        $_SESSION['designerCategory'] = $designerCategory;
        $_SESSION['firstName'] = $firstName;
        $_SESSION['email'] = $email;
        $_SESSION['phoneNum'] = $phoneNum;
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



//Top Model Query
if (isset($_POST['top_model_btn'])) {

    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $age = $conn->real_escape_string($_POST['age']);
    $guardianName = $conn->real_escape_string($_POST['guardianName']);
    $guardianTel = $conn->real_escape_string($_POST['guardianTel']);
    $height = $conn->real_escape_string($_POST['height']);
    $statistics = $conn->real_escape_string($_POST['statistics']);
    $shoeSize = $conn->real_escape_string($_POST['shoeSize']);
    $dressSize = $conn->real_escape_string($_POST['dressSize']);
    $email = $conn->real_escape_string($_POST['email']);
    $phoneNum = $conn->real_escape_string($_POST['phoneNum']);
    $instagram = $conn->real_escape_string($_POST['instagram']);
    $address = $conn->real_escape_string($_POST['address']);


    $check_model_query = "SELECT * FROM top_model WHERE email='$email'";
    $result = mysqli_query($conn, $check_model_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user_message_title'] = "User Already Exist!";
        $_SESSION['user_message'] = "Please contact admin";
    }

    // Finally, insert details into database
    $query = "INSERT INTO top_model (firstName, lastName, age, guardianName, guardianTel, height, statistics, shoeSize, dressSize, email, phoneNum, instagram, address) 
                VALUES('$firstName', '$lastName', '$age', '$guardianName', '$guardianTel', '$height', '$statistics', '$shoeSize', '$dressSize', '$email', '$phoneNum', '$instagram', '$address')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['model_success_message_title']  = "Registration Successful👋";
        $_SESSION['model_success_message']    = "You're being redirected";
        $_SESSION['phoneNum'] = $phoneNum;
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['email'] = $email;
    }else {
        $_SESSION['message_title']  = "Request Failed";
        $_SESSION['message']    = "Error sending request now: ".mysqli_error($conn).$id;
    }

}