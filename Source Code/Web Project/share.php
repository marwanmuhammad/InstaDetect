<?php

if (isset($_POST['submit']) && isset($_FILES['my_image']))
{ include "config.php";
session_start();


echo "<pre>";

print_r($_FILES['my_image']); echo "</pre>";


$img_name = $_FILES['my_image']['name'];

$img_size = $_FILES['my_image']['size'];

$tmp_name = $_FILES['my_image']['tmp_name'];

$error = $_FILES['my_image']['error'];

$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$Age = $_POST["Age"];
$EmailAddress = $_POST["EmailAddress"];
$StoryTitle = $_POST["StoryTitle"];
$StoryText = $_POST["StoryText"];
$Tumor = $_POST["Tumor"];

//$users_id = $_POST['users_id'];

if ($error === 0) {

$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

$img_ex_lc = strtolower($img_ex);

$allowed_exs = array("jpg", "jpeg", "png");

if (in_array($img_ex_lc, $allowed_exs)) 
{ $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
    $img_upload_path = 'uploadss/' .$new_img_name;
    move_uploaded_file($tmp_name, $img_upload_path);

$sql = "INSERT INTO Story (USER_ID, FirstName, LastName, Age, EmailAddress, StoryTitle, StoryText, Tumor, filename, upload_date) 
VALUES (:USER_ID, :FirstName, :LastName, :Age, :EmailAddress, :StoryTitle, :StoryText, :Tumor, :filename, NOW())";
$stmt = $db->prepare($sql);

$stmt->bindParam(':USER_ID', $_SESSION['USER_ID'], PDO::PARAM_INT);
$stmt->bindParam(':FirstName', $FirstName, PDO::PARAM_STR);
$stmt->bindParam(':LastName', $LastName, PDO::PARAM_STR);
$stmt->bindParam(':Age', $Age, PDO::PARAM_INT);
$stmt->bindParam(':EmailAddress', $EmailAddress, PDO::PARAM_STR);
$stmt->bindParam(':StoryTitle', $StoryTitle, PDO::PARAM_STR);
$stmt->bindParam(':StoryText', $StoryText, PDO::PARAM_STR);
$stmt->bindParam(':Tumor', $Tumor, PDO::PARAM_STR);
$stmt->bindParam(':filename', $new_img_name, PDO::PARAM_STR);

$stmt->execute();

header("Location: Community.php");

}else {
    $em = "You can't upload files of this type";
    header("Location:index.php?error=$em");

}

} 
}else { 
    $em = "unknown error occurred!";
header("Location: index.php?error=$em");
}
?>