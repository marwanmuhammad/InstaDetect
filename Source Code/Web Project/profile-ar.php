<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Account center </title>
<link rel="stylesheet" href="css/BootStrap/bootstrap.min.css">
<link rel="stylesheet" href="css/Reg-Profile.css">
</head>
<body>

<div class="ccontainer light-style flex-grow-1 container-p-y">
<!-- Server-side include for header.php -->
<div class = "margin-up">
<?php include('header-ar.php'); ?>
</div>
<h4 class="font-weight-bold py-3 mb-4 Ar">
إعدادات الحساب
</h4>
<div class="card overflow-hidden">
<div class="row no-gutters row-bordered row-border-light">
<div class="col-md-3 pt-0">
<div class="list-group list-group-flush account-settings-links">
<a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">العامة</a>
<a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">تغيير كلمة المرور</a>
<a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">المعلومات</a>
</div>
</div>
<div class="col-md-9">
<div class="tab-content">
<div class="tab-pane fade active show" id="account-general">
<!-- Form for General section -->




<form method="post" enctype="multipart/form-data">
<div class="card-body media align-items-center">
<!-- Content for General section -->
<label for="input-file" class="">صورتك</label>
<img src="<?php echo isset($_SESSION['profile_pic']) ? 'profilepics/' . $_SESSION['profile_pic'] : 'images/pre.png'; ?>" alt="" class="d-block ui-w-80" id="profile-pic">
<br>
<label for="input-file" class="hover-3">تحميل صورة</label>
<br>
<input type="file" class="profile-input" accept="image/jpeg, image/png , image/jpg" id="input-file" name="profile_pic">
<hr class="border-light m-0">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST["update_general"])) {
$firstName = htmlspecialchars($_POST["firstName"]);
$lastName = htmlspecialchars($_POST["lastName"]);
$email = htmlspecialchars($_POST["email"]);
require_once 'config.php';
$USER_ID = $_SESSION['USER_ID'];


if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] == UPLOAD_ERR_OK) {
$uploadDir = __DIR__ . '/profilepics/';
$fileName = time() . '_' . basename($_FILES['profile_pic']['name']);
$uploadFile = $uploadDir . $fileName;

if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $uploadFile)) {
$stmt = $db->prepare("UPDATE users SET firstname = ?, lastname = ?, email = ?, profile_pic = ? WHERE USER_ID = ?");
$stmt->execute([$firstName, $lastName, $email, $fileName, $USER_ID]);
$_SESSION['profile_pic'] = $fileName;
} else {
$errorMessage = "There was an error uploading your file.";
}
} else {
$stmt = $db->prepare("UPDATE users SET firstname = ?, lastname = ?, email = ? WHERE USER_ID = ?");
$stmt->execute([$firstName, $lastName, $email, $USER_ID]);
}

$_SESSION['firstname'] = $firstName;
$_SESSION['lastname'] = $lastName;
$_SESSION['email'] = $email;
header("Location: profile.php");
exit;
}
}
?>

<div class="form-group">
<label class="form-label">الاسم الاول</label>
<input  type="text" class="form-control input" id="fristName" value="<?php echo $_SESSION['firstname'] ?>">
</div>
<div class="form-group">
<label class="form-label">الاسم الأخير</label>
<input  type="text" class="form-control input" id="lastName" value="<?php echo  $_SESSION['lastname'] ?>">
</div>
<div class="form-group">
<label class="form-label">البريد الإلكتروني</label>
<input  type="text" class="form-control input mb-1" id="Email" name="email" value="<?php echo $_SESSION['email'] ?>">
</div>
</div>
<!-- Save and Cancel buttons for General section -->
<div class="text-right mt-3">
<button type="submit" class="profile-button type2" name="update_general">حفظ التغييرات</button>&nbsp;
<button type="button" class="profile-button type2" name="cancel">الغاء</button>
</div>
</form>





</div>
<div class="tab-pane fade" id="account-change-password">
<!-- Form for Change Password section -->
<form method="post">
<?php
require_once 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST["change_password"])) {
$currentPassword = $_POST["current_password"];
$USER_ID = $_SESSION['USER_ID']; 
$stmt = $db->prepare("SELECT password FROM users WHERE USER_ID = ?");
$stmt->execute([$USER_ID]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($currentPassword == $row['password']) {
$newPassword = $_POST["new_password"];
$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
$stmt = $db->prepare("UPDATE users SET password = ? WHERE USER_ID = ?");
$stmt->execute([$hashedPassword, $USER_ID]);
$successMessage = "Password changed successfully!";
} else {
$errorMessage = "Incorrect current password!";
}

}            
}
?>
<div class="card-body pb-2">
<?php if (!empty($successMessage) || !empty($errorMessage)): ?>
<script type="text/javascript">
var message = "<?php echo !empty($successMessage) ? $successMessage : $errorMessage; ?>";
alert(message);
</script>
<?php endif; ?>
<!-- Content for Change Password section -->
<div class="form-group">
<label class="form-label">كلمة المرور الحالية</label>
<input type="password" name="current_password" id="new-password" class="form-control profile-input">
</div>
<div class="form-group">
<label class="form-label">كلمة المرور الجديدة</label>
<input type="password" name="new_password" id="repeat-password" class="form-control profile-input">
</div>
</div>
<!-- Save and Cancel buttons for Change Password section -->
<div class="text-right mt-3">
<button type="submit" name="change_password" class="profile-button type2">حفظ التغييرات</button>&nbsp;
<button type="button" class="profile-button type2" name="cancel">الغاء</button>
</div>
</form>
</div>






<div class="tab-pane fade" id="account-info">
<!-- Form for Info section -->
<form method="post">
<div class="card-body pb-2">
<!-- Content for Info section -->
<div class="form-group">
<label class="form-label">النتيجه</label>
<textarea disabled id="Result" class="form-control input" rows="5" cols="5">
<?php
if (isset($_SESSION['USER_ID'])) {
$USER_ID = $_SESSION['USER_ID'];

$sql = "SELECT prediction_result FROM mri WHERE USER_ID = ? ORDER BY upload_date DESC LIMIT 1";
$stmt = $db->prepare($sql);
$stmt->execute([$USER_ID]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
echo htmlspecialchars($row['prediction_result']);
} else {
echo "No results available yet.";
}
} else {
echo "User not logged in.";
}
?>
</textarea>
</div>
<div class="form-group">
<?php
if (isset($_SESSION['USER_ID'])) {
$USER_ID = $_SESSION['USER_ID'];

$sql = "SELECT upload_date FROM mri WHERE USER_ID = ? ORDER BY upload_date DESC LIMIT 1";
$stmt = $db->prepare($sql);
$stmt->execute([$USER_ID]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
$lastUpdatedDate = $row['upload_date'];
$_SESSION['last_updated_date'] = $lastUpdatedDate;
echo "Last updated photo date: " . $lastUpdatedDate;
} else {
echo "No photos uploaded yet.";
}
} else {
echo "User not logged in.";
}
?>
</div>
</div>
</form>
</div>




</div>
</div>
</div>
</div>

<a onclick="back()" class="exit-icon">
<img class="exit-icon exit-icon-special " src="images/icons8-back-80.png " alt=" ">
</a>
<a class="" href="profile.php"><img class="translate-ar" src="images/english (2).png" alt=""></a>

</div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="js/profile.js"></script>
<script>
window.embeddedChatbotConfig = {
chatbotId: "v1C8-dshFH1HTUSozu7ir",
domain: "www.chatbase.co"
}
</script>
<script
src="https://www.chatbase.co/embed.min.js"
chatbotId="v1C8-dshFH1HTUSozu7ir"
domain="www.chatbase.co"
defer>
</script>
</body>

</html>