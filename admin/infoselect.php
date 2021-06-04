<?php
include "../config/db.php";

//Message Select
$contactid = 0;
if(isset($_POST['contactid'])){
   $contactid = mysqli_real_escape_string($conn,$_POST['contactid']);
}
$sql = "SELECT * FROM contact WHERE id=".$contactid;
$result = mysqli_query($conn,$sql);

$response = "<table border='0' width='100%'>";
while( $row = mysqli_fetch_array($result) ){
 $id = $row['id'];
 $fullName = $row['fullName'];
 $companyName = $row['companyName'];
 $email = $row['email'];
 $phoneNum = $row['phoneNum'];
 $comment = $row['comment'];
 $date = $row['date'];
 $subject = $row['subject'];

 $response .= "<div class=\"card-body\" style='margin-top: -20px'>";

 $response .= "<div class=\"text-center\">";
 $response .= "<img src=\"./assets/images/logoblack.svg\" style=\"width: 200px;\"><br>";
 $response .= "</div>";

        $response .= "<div class=\"table-responsive\">";

        $response .= "<table class=\"table table-bordered\">";
        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Client Name:</strong></th>";
            $response .= "<td>" .$fullName. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Company Name:</strong></th>";
            $response .= "<td>" .$companyName . "</td>";
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
            $response .= "<th style=\"background-color: #ececef;\"><strong>Request Date:</strong></th>";
            $response .= "<td>" .date("d(D) M Y", strtotime($date)). "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
            $response .= "<th style=\"background-color: #ececef;\"><strong>Subject:</strong></th>";
            $response .= "<td>" .$subject. "</td>";
        $response .= "</tr>";

        $response .= "<tr>";
          $response .= "<th style='background-color: #ececef;'><strong>Comment:</strong></th>";
          $response .= "<td><div class='form-group'>";
          $response .= "<textarea class='form-control' rows='5' readonly>".$comment."</textarea>";
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