<?php
include 'Connection.php';
$id = $_POST['id'];
$name = $_POST['name'];
$intake = $_POST['intake'];
$fee = $_POST['fee'];
$duration = $_POST['duration'];
$description = $_POST['description'];
$jobs = $_POST['jobs'];
$outline = $_POST['outline'];

$oldimg = $_POST['oldimg'];
$newimg = $_FILES['newimg']['name'];

if ($newimg != "") {
    $updatephoto = $newimg;
    move_uploaded_file($_FILES['newimg']['tmp_name'], "./uniimagge/" . $newimg);
} else {
    $updatephoto = $oldimg;
}

$sql = $a->prepare("UPDATE course SET course_name=?, course_intakes=?, course_fee=?, course_duration=?, course_description=?, jobs=?, course_outline=?, course_image=? WHERE course_id=?");

$sql->execute([$name, $intake, $fee, $duration, $description, $jobs, $outline, $updatephoto, $id]);

header("location:viewcourseadm.php");
?>