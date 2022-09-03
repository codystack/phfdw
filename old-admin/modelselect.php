<?php
include "../config/db.php";

//Message Select
$modelid = 0;
if(isset($_POST['modelid'])){
   $modelid = mysqli_real_escape_string($conn,$_POST['modelid']);
}
$sql = "SELECT * FROM models WHERE id=".$modelid;
$result = mysqli_query($conn,$sql);

$response = "<table border='0' width='100%'>";
while( $row = mysqli_fetch_array($result) ){
 $id = $row['id'];
 $firstName = $row['firstName'];
 $lastName = $row['lastName'];
 $email = $row['email'];
 $phoneNum = $row['phoneNum'];
 $age = $row['age'];
 $height = $row['height'];
 $burstChest = $row['burstChest'];
 $waist = $row['waist'];
 $hip = $row['hip'];
 $dressSuit = $row['dressSuit'];
 $regCode = $row['regCode'];
 $shoeSize = $row['shoeSize'];
 $agency = $row['agency'];
 $agencyContact = $row['agencyContact'];
 $date = $row['date'];

 $response .= "<div class=\"card-body\" style='margin-top: -20px'>";

 $response .= "<div class=\"text-center\">";
 $response .= "<img src=\"./assets/images/logoblack.svg\" style=\"width: 200px;\"><br>";
 $response .= "</div>";

        $response .= "<div class=\"table-responsive\">";

        $response .= "<table class=\"table table-bordered\">";
        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Model's Name:</strong></th>";
            $response .= "<td>" .$firstName.' '.$lastName. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Email:</strong></th>";
            $response .= "<td>" .$email. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Phone Number:</strong></th>";
            $response .= "<td>" .$phoneNum. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Age:</strong></th>";
            $response .= "<td>" .$age. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Height:</strong></th>";
            $response .= "<td>" .$height. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Burst/Chest:</strong></th>";
            $response .= "<td>" .$burstChest. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Waist:</strong></th>";
            $response .= "<td>" .$waist. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Hip:</strong></th>";
            $response .= "<td>" .$hip. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Dress/Suit Size:</strong></th>";
            $response .= "<td>" .$dressSuit. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Shoe Size:</strong></th>";
            $response .= "<td>" .$shoeSize. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Name of Agency:</strong></th>";
            $response .= "<td>" .$agency. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Agency Contact Person:</strong></th>";
            $response .= "<td>" .$agencyContact. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Request Date:</strong></th>";
            $response .= "<td>" .date("d(D) M Y", strtotime($date)). "</td>";
        $response .= "</tr>";
         
        }
        $response .= "</table>";
        
   $response .= "</div>";
   $response .= "</div>";
   $response .= "</div>";
   $response .= "</div>";

echo $response;
exit;