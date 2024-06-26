<?php
 include "config.php";
 ?>
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحة الرئيسية</title>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive2.css">
    <link rel="stylesheet" href="css/ltr.css">
    <link rel="stylesheet" href="css/responsive-ar.css">

</head>
<style>
    img.circle {
    width: 70px;
    height: 72px;
    background-color: #ffffff;
    border-radius: 50%;
    margin-top: 32px !important;
    display: inline-block;
}
</style>
<body>
    <header>
    <section class="upper-header">
    <div class="responsive">
              <img class="logo-icon" src="images/تصميم بدون عنوان (7).png" alt="">
               <h1 id="header-logo"><span class="blue">Insta</span> Detect</h1>
            </div>
            <?php include('header-ar.php');?>
            <div class="checko">
                <input type="checkbox" id="check">
                <label for="check"><i class="fas fa-bars"></i></label>
                <section class="lower-header2">
                    <ul>
                        <li><a href="/pythonprojects/Web project/in.php" class="li-links ">الرئيسية</a></li>
            <li><a href="/pythonprojects/Web Project/Services-ar.php " class="li-links ">الخدمات</a></li>
            <li><a href="/pythonprojects/Web Project/ContactUs-ar.php " class="li-links ">اتصل بنا</a></li>
            <li><a href="/pythonprojects/Web Project/community-ar.php " class="li-links ">المجتمع</a></li>
            <?php include('li-ar.php'); ?>
                    </ul>
                </section>
            </div>
        </section>
        <hr>
        <section class="lower-header">
            <ul>
                <li><a href="/pythonprojects/Web project/index.php" class="li-links">الرئيسية</a></li>
                <li><a href="/pythonprojects/Web Project/Services.php" class="li-links">الخدمات</a></li>
                <li><a href="/pythonprojects/Web Project/ContactUs-ar.php " class="li-links ">اتصل بنا</a></li>
                <li><a href="/pythonprojects/Web Project/Community.php" class="li-links">المجتمع</a></li>
            </ul>
        </section>
        <a class="" href="mri-History.php"><img class="translate-ar" src="images/english (2).png" alt=""></a>

    </header>

    <div class="mri-h-container">
        <h2 class="Mri-title">تاريخ الرنين المغناطيسي</h2>
        <span class="line2"></span>
    
        <div class="mri-h-row">
        <?php
if (isset($_SESSION['USER_ID'])) {
    $USER_ID = $_SESSION['USER_ID'];

    $sql = "SELECT mri.*, users.firstname, users.lastname FROM mri INNER JOIN users ON mri.USER_ID = users.USER_ID WHERE mri.USER_ID = :user_id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':user_id', $USER_ID, PDO::PARAM_INT);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row) { ?>
        <!-- Display MRI photos -->
<div class="mri-h-col">
            <div class="mri-h-card">
                <div class="img-cover-mri-history">
                    <img src="uploads/<?=$row['filename']?>" class="card-img-top" alt="...">
                </div>
                <div class="mri-h-card-body">
            <h5 class="mri-h-card-title">النتيجه</h5>
            <!-- Display the prediction result here -->
            <p class="mri-h-card-text"><?= $row['prediction_result'] ?></p>
            <p><?= $row['upload_date'] ?></p>
        </div>
                <button class="delete-btn button type1 "><span class="btn-txt"> حذف</span> </button>

            </div>
        </div>

    <?php }
} else {
    echo "User ID not found in session.";
}
?>
        </div>
    </div>

    <footer>
        <hr class="hr-fotter">
        <div class="footer-link">
            <a href="#"><img src="images/whatsapp.png" alt=""></a>
            <a href="#"><img src="images/instagram.png" alt=""></a>
            <a href="#"><img src="images/linkedin.png" alt=""></a>
            <a href="#"><img src="images/facebook.png" alt=""></a>
        </div>
        <h2>حقوق النشر © 2024 Insta  EELU</h2>
        <h2>الشروط القانونية | سياسة الخصوصية | الأمان</h2>
    </footer>
    <script defer src="js/jquery-3.7.1.min.js "></script>
    <script defer src="js/js.js "></script>
    <script src="js/history.js" ></script>
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
