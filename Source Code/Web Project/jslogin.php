<?php
include('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = ?";
$stmselect = $db->prepare($sql);
$result = $stmselect->execute([$email]);

if ($result) {
    session_start();
    $user = $stmselect->fetch(PDO::FETCH_ASSOC);

    $isHashed = preg_match('/^\$2y\$/', $user['password']);

    if ($user && ($isHashed ? password_verify($password, $user['password']) : $password === $user['password'])) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['lastname'] = $user['lastname'];
        $_SESSION['USER_ID'] = $user['USER_ID'];
        $_SESSION['profile_pic'] = $user['profile_pic'];
        header("Location: /pythonprojects/Web Project/index.php");
        exit();
    } else {
        echo "User Not Found or Incorrect Password!";
    }
} else {
    echo 'An error occurred in the database query.';
}
?>
