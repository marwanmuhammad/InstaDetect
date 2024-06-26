<?php
include "config.php";
session_start();

header('Content-Type: application/json'); 

$requestPayload = json_decode(file_get_contents('php://input'), true);

if (isset($requestPayload['delete']) && isset($requestPayload['filename'])) {
    $USER_ID = isset($_SESSION['USER_ID']) ? $_SESSION['USER_ID'] : null;

    if ($USER_ID) {
        $filename = $requestPayload['filename'];


        $filePath = 'uploads/' . $filename;
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $sql = "DELETE FROM mri WHERE filename = :filename AND USER_ID = :user_id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':filename', $filename, PDO::PARAM_STR);
        $stmt->bindParam(':user_id', $USER_ID, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Image deleted successfully.']);
        } else {
            echo json_encode(['success' => false, 'error' => 'Failed to delete from database']);
        }
    } else {
        echo json_encode(['success' => false, 'error' => 'User not logged in']);
    }
    exit;
}




if (isset($_FILES['my_image'])) {
    $USER_ID = isset($_SESSION['USER_ID']) ? $_SESSION['USER_ID'] : null;

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
        if ($img_size > 125000) {
            echo json_encode(['error' => 'Sorry, your file is too large.']);
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

        
                $output = shell_exec("python predict.py " . escapeshellarg($img_upload_path));
                $predictionResult = trim($output);

                
                $sql = "INSERT INTO mri (filename, prediction_result, upload_date, USER_ID) VALUES (?, ?, NOW(), ?)";
                $stmt = $db->prepare($sql);
                $stmt->execute([$new_img_name, $predictionResult, $USER_ID]);

                echo json_encode(['success' => 'Image uploaded and prediction made.', 'predicted_class' => $predictionResult]);
            } else {
                echo json_encode(['error' => "You can't upload files of this type"]);
            }
        }
    } else {
        echo json_encode(['error' => 'An error occurred while uploading the file.']);
    }
} else {
    echo json_encode(['error' => 'Please submit an image.']);
}
?>
