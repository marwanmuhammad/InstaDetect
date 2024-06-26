<?php
include 'config.php'; 

if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id']) && isset($_SESSION['USER_ID'])) {
    $storyId = $_GET['id'];
    $userId = $_SESSION['USER_ID'];

    $sql = "DELETE FROM story WHERE Id = :id AND USER_ID = :user_id";
    $stmt = $db->prepare($sql);
    $stmt->execute(['id' => $storyId, 'user_id' => $userId]);

    if ($stmt->rowCount() > 0) {
        header("Location: Community.php");
        exit();
    } else {
        echo "Error deleting story or unauthorized action.";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/story.css">
    <link rel="stylesheet" href="css/stoory.css">
    <link rel="stylesheet" href="css/responsive2.css">
    
    <title>شارك قصتك</title>
</head>
<style>
    .btn-txt{
        letter-spacing: 0px !important;
    }

img.circle {
    width: 70px;
    height: 72px;
    background-color: #ffffff;
    border-radius: 50%;
    margin-top: 32px !important;
    display: inline-block;
}

</style>
<body class="body">
<header>
<section class="upper-header">
<div class="responsive">
                  <img class="logo-icon" src="images/تصميم بدون عنوان (7).png" alt="">
               <h1 id="header-logo"><span class="blue">Insta</span> Detect</h1>
            </div>
            <!-- Server-side include for header.php -->
            <?php include('header-ar.php');?>
            <div class="checko">
                <input type="checkbox" id="check">
                <label for="check"><i class="fas fa-bars"></i></label>
                <section class="lower-header2 ">
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
        <section class="lower-header ">
            <ul>
              <li><a href="/pythonprojects/Web project/in.php" class="li-links ">الرئيسية</a></li>
              <li><a href="/pythonprojects/Web Project/Services-ar.php " class="li-links ">الخدمات</a></li>
            <li><a href="/pythonprojects/Web Project/ContactUs-ar.php " class="li-links ">اتصل بنا</a></li>
              <li><a href="/pythonprojects/Web Project/community-ar.php " class="li-links ">المجتمع</a></li>
            </ul>
        </section>
        <a class="" href="Community.php"><img class="translate-ar" src="images/english (2).png" alt=""></a>

</header>
    <h2 class="storys-title">
        القصص
    </h2>
    <span class="line2"></span>
    <div class="share">
    <button type="button" class="button ccc type1 SYS"><a class="reg"  <?php if (isset($_SESSION['email'])) {
    echo 'href="/pythonprojects/Web Project/ShareForm-ar.php"';
} else {
    echo 'href="#" onclick="alert(\'Please log in to access this feature.\')"';
} ?> > <span class="btn-txt">شارك قصتك</span></a></button>
    </div>
    <div>
        <img class="communty-story-bg" src="images/f707092bcf.jpeg" alt="">
    </div>
    <div class="slide-container swiper">
<?php
$sql = "SELECT * FROM story ORDER BY upload_date DESC";
$stmt = $db->prepare($sql);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    while ($story = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $isOwner = isset($_SESSION['USER_ID']) && $_SESSION['USER_ID'] == $story['USER_ID'];
?>
<div class="slide-content">
<div class="card-wrapper swiper-wrapper">
<div class="card swiper-slide">
<div class="image-content">
    <span class="overlay-1"></span>
    <div class="card-image-1">
        <img src="uploadss/<?=$story['filename']?>" alt="" class="card-img-1">
    </div>
</div>
<div class="card-body">
    <h2 class=card-title><?=$story['StoryTitle']?>
</h2>
    <p class="card-text-off"><?=$story['StoryText']?></p>
<p class="card-text-full" style="display:none;"><?=$story['StoryText']?></p>
    <button class= "button ccc type1 SYS read-more ">اقرا المزيد</button>
    <?php if ($isOwner) { ?>
                    <form action="delete_story.php" method="post" onsubmit="return confirm('Are you sure you want to delete this story?')">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="id" value="<?=$story['Id']?>">
                        <button type="submit" class="delete-btn button ccc type1 SYS">حذف</button>
                    </form>
                <?php } ?>

</div>
</div>
</div>
</div>
<!-- Popup box -->
<div class="popup-box" id="popupBox">
<span class="close-icon" onclick="closePopup()"><img class="img-close" src="images/close (1).png" alt=""></span>
<img src="uploadss/<?=$story['filename']?>" class="popup-img" alt="">
<p class="FullName">Name :- <?=$story['FirstName']?>  <?=$story['LastName']?></p>
<p class="Age">Age :- <?=$story['Age']?></p>
<p class="BrainTumorType">Tumor Type :- <?=$story['Tumor']?></p>
<h2 class="popup-title"><?=$story['StoryTitle']?></h2>
<p class="popup-text"><?=$story['StoryText']?></p>


</div>
<?php }
}
?>
</div>
 <!-- Footer -->
    <footer>
        <hr class="hr-fotter ">
        <div class="footer-link">
            <a href="# ">
                <img src="images/whatsapp.png " alt=" " srcset=" ">
            </a>
            <a href="# ">
                <img src="images/instagram.png " alt=" " srcset=" ">
            </a>
            <a href="# ">
                <img src="images/linkedin.png " alt=" " srcset=" ">
            </a>
            <a href="# ">
                <img src="images/facebook.png " alt=" " srcset=" ">
            </a>
        </div>
        <h2>حقوق النشر © 2024 Insta  EELU</h2>
        <h2>الأمور القانونية | سياسة الخصوصية | الأمان</h2>
    </footer>

    <script defer src="js/jquery-3.7.1.min.js "></script>
    <script src="js/js.js"></script>
    <script src="js/story.js"></script>
    <script src="js/communtiy.js"></script>
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
