<?php
include 'Connection.php';
$id=$_POST['id'];
$name = $_POST['name'];
$description = $_POST['desc'];
$oldimg = $_POST['oldimg'];
$newimg = $_FILES['newimg']['name'];
if($newimg != ""){
    $updatephoto = $newimg;
   // move_uploaded_file($FILES['newimg']['tmp_name'], "imagefiles/$newimg");
    move_uploaded_file($_FILES['newimg']['tmp_name'], "./uniimagge/".$newimg);

}
else{
    $updatephoto = $oldimg;
}


$oldimg1 = $_POST['oldimg1'];
$newimg1 = $_FILES['newimg1']['name'];
if($newimg1 != ""){
    $updatephoto1 = $newimg1;
   // move_uploaded_file($FILES['newimg']['tmp_name'], "imagefiles/$newimg");
    move_uploaded_file($_FILES['newimg1']['tmp_name'], "./uniimagge/".$newimg1);

}
else{
    $updatephoto1 = $oldimg1;
}


$oldimg2 = $_POST['oldimg2'];
$newimg2 = $_FILES['newimg2']['name'];
if($newimg2 != ""){
    $updatephoto2 = $newimg2;
   // move_uploaded_file($FILES['newimg']['tmp_name'], "imagefiles/$newimg");
    move_uploaded_file($_FILES['newimg2']['tmp_name'], "./uniimagge/".$newimg2);

}
else{
    $updatephoto2 = $oldimg2;
}

$sql = $a->prepare("UPDATE category SET cat_name = ?, cat_description = ?, cat_iconn = ?, cat_image = ?, cat_imagetwo = ? WHERE cat_id = ?");
$sql->execute([$name, $description, $updatephoto, $updatephoto1, $updatephoto2, $id]);
header("location: viewcategory.php");
?>