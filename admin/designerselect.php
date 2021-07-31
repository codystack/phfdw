<?php
include "../config/db.php";

//Message Select
$designerid = 0;
if(isset($_POST['designerid'])){
   $designerid = mysqli_real_escape_string($conn,$_POST['designerid']);
}
$sql = "SELECT * FROM designers WHERE id=".$designerid;
$result = mysqli_query($conn,$sql);

$response = "<table border='0' width='100%'>";
while( $row = mysqli_fetch_array($result) ){
 $id = $row['id'];
 $firstName = $row['firstName'];
 $lastName = $row['lastName'];
 $brandName = $row['brandName'];
 $email = $row['email'];
 $phoneNum = $row['phoneNum'];
 $facebook = $row['facebook'];
 $instagram = $row['instagram'];
 $specialty = $row['specialty'];
 $designerCategory = $row['designerCategory'];
 $participated = $row['participated'];
 $regCode = $row['regCode'];
 $date = $row['date'];

 $response .= "<div class=\"card-body\" style='margin-top: -20px'>";

 $response .= "<div class=\"text-center\">";
 $response .= "<img src=\"./assets/images/logoblack.svg\" style=\"width: 200px;\"><br>";
 $response .= "</div>";

        $response .= "<div class=\"table-responsive\">";

        $response .= "<table class=\"table table-bordered\">";
        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Client Name:</strong></th>";
            $response .= "<td>" .$firstName.' '.$lastName. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Brand Name:</strong></th>";
            $response .= "<td>" .$brandName. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Registration Code:</strong></th>";
            $response .= "<td>" .$regCode. "</td>";
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
            $response .= "<th style=\"background-color: #ececef;\"><strong>Facebook Handle:</strong></th>";
            $response .= "<td>" .$facebook. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Instagram Handle:</strong></th>";
            $response .= "<td>" .$instagram. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Specialty:</strong></th>";
            $response .= "<td>" .$specialty. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Payment Category:</strong></th>";
            $response .= "<td>" .$designerCategory. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Request Date:</strong></th>";
            $response .= "<td>" .date("d(D) M Y", strtotime($date)). "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
          $response .= "<th style='background-color: #ececef;'><strong>Have you participated in a fashion show?:</strong></th>";
          $response .= "<td><div class='form-group'>";
          $response .= "<textarea class='form-control' rows='5' readonly>".$participated."</textarea>";
          "</div></td>";
        $response .= "</tr>";
         
        }
        $response .= "</table>";
        
   $response .= "</div>";
   $response .= "</div>";
   $response .= "</div>";
   $response .= "</div>";

echo $response;
exit;