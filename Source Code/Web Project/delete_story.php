<?php
include 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] == 'delete' && isset($_POST['id']) && isset($_SESSION['USER_ID'])) {
    $storyId = $_POST['id'];
    $userId = $_SESSION['USER_ID'];

    $sql = "DELETE FROM story WHERE Id = :id AND USER_ID = :user_id";
    $stmt = $db->prepare($sql);
    $stmt->execute(['id' => $storyId, 'user_id' => $userId]);

    if ($stmt->rowCount() > 0) {
        header("Location: Community.php");
        exit();
    } else {
        header("Location: Community.php?error=Unauthorized action");
        exit();
    }
} else {
    header("Location: Community.php?error=Invalid request");
    exit();
}
?>
