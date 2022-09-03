<?php
include "../config/db.php";

//Message Select
$rentid = 0;
if(isset($_POST['rentid'])){
   $rentid = mysqli_real_escape_string($conn,$_POST['rentid']);
}
$sql = "SELECT * FROM exhibitors WHERE id=".$rentid;
$result = mysqli_query($conn,$sql);

$response = "<table border='0' width='100%'>";
while( $row = mysqli_fetch_array($result) ){
 $id = $row['id'];
 $contactperson = $row['contactperson'];
 $companyName = $row['companyName'];
 $email = $row['email'];
 $phoneNum = $row['phoneNum'];
 $address = $row['address'];
 $items = $row['items'];
 $regCode = $row['regCode'];
 $boothSize = $row['boothSize'];
 $date = $row['date'];

 $response .= "<div class=\"card-body\" style='margin-top: -20px'>";

 $response .= "<div class=\"text-center\">";
 $response .= "<img src=\"../assets/images/logoblack.svg\" style=\"width: 200px;\"><br>";
 $response .= "</div>";

        $response .= "<div class=\"table-responsive\">";

        $response .= "<table class=\"table table-bordered\">";
        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Exhibitor Code:</strong></th>";
            $response .= "<td>" .$regCode. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Contact Person:</strong></th>";
            $response .= "<td>" .$contactperson. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Company Name:</strong></th>";
            $response .= "<td>" .$companyName. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Booth Size:</strong></th>";
            $response .= "<td>" .$boothSize. "</td>";
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
            $response .= "<th style=\"background-color: #ececef;\"><strong>Address:</strong></th>";
            $response .= "<td>" .$address. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Phone Number:</strong></th>";
            $response .= "<td>" .$phoneNum. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Request Date:</strong></th>";
            $response .= "<td>" .date("d(D) M Y", strtotime($date)). "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
          $response .= "<th style='background-color: #ececef;'><strong>Items for Exhibition:</strong></th>";
          $response .= "<td><div class='form-group'>";
          $response .= "<textarea class='form-control' rows='5' readonly>".$items."</textarea>";
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