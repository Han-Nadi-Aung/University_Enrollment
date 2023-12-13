<?php

include './connection.php';

$sql = $a->prepare("SELECT * FROM student_information ");
$sql->execute();

$name = $_POST['cidd'];
$password = $_POST['cpwdd'];

$matchingRows = []; // Initialize an empty array to store matching rows

while($row = $sql->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    if ($name == $Sname && password_verify($password, $Spwd)) { 
        $matchingRows[] = $row; // Add the matching row to the array
    }
}

if (!empty($matchingRows)) {
    // At least one match found
    session_start();  
    $_SESSION['su'] = $matchingRows[0]['Sname']; // Store the first matching student's name
    $_SESSION['SID'] = $matchingRows[0]['SID']; // Store the first matching student's ID
    header("Location: enroll.php");
} else {
    // No match found
    header("Location: stulogin.php");
}

?>