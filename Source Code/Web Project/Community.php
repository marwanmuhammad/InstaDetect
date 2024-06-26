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
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/story.css">
<link rel="stylesheet" href="css/stoory.css">
<link rel="stylesheet" href="css/Responsive.css">
<title>Community</title>
</head>
<body>
<header>
<section class="upper-header">
<div class="responsive">
                  <img class="logo-icon" src="images/تصميم بدون عنوان (7).png" alt="">
               <h1 id="header-logo"><span class="blue">Insta</span> Detect</h1>
            </div>
<?php include('header.php');?>
<div class="checko">
    <input type="checkbox" id="check">
    <label for="check"><i class="fas fa-bars"></i></label>
    <section class="lower-header2">
        <ul>
            <li><a href="/pythonprojects/Web project/index.php" class="li-links">HOME</a></li>
            <li><a href="/pythonprojects/Web Project/Services.php" class="li-links">SERVICES</a></li>
            <li><a href="/pythonprojects/Web Project/ContactUs.php" class="li-links">CONTACT US</a></li>
            <li><a href="/pythonprojects/Web Project/Community.php" class="li-links">Community</a></li>
            <?php include('li.php'); ?>
        </ul>
    </section>
</div>
</section>
<hr>
<section class="lower-header">
    <ul>
        <li><a href="/pythonprojects/Web project/index.php" class="li-links">HOME</a></li>
        <li><a href="/pythonprojects/Web Project/Services.php" class="li-links">SERVICES</a></li>
        <li><a href="/pythonprojects/Web Project/ContactUs.php" class="li-links">CONTACT US</a></li>
        <li><a href="/pythonprojects/Web Project/Community.php" class="li-links">Community</a></li>
    </ul>
</section>
<a class="" href="community-ar.php"><img class="translate" src="images/augmented-reality.png" alt=""></a>
</header>
<h2 class="storys-title">
stories
</h2>
<span class="line2"></span>
<div class="share">
<button type="button" class="button ccc type1 SYS"><a class="reg"  <?php if (isset($_SESSION['email'])) {
    echo 'href="/pythonprojects/Web Project/ShareForm.php"';
} else {
    echo 'href="#" onclick="alert(\'Please log in to access this feature.\')"';
} ?> > <span class="btn-txt">Share Your Story</span></a></button>
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
                <h2 class="card-title"><?=$story['StoryTitle']?></h2>
                <p class="card-text-off"><?=$story['StoryText']?></p>
                <p class="card-text-full" style="display:none;"><?=$story['StoryText']?></p>
                <button class="button ccc type1 SYS read-more">View More</button>
                <?php if ($isOwner) { ?>
                    <form action="delete_story.php" method="post" onsubmit="return confirm('Are you sure you want to delete this story?')">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="id" value="<?=$story['Id']?>">
                        <button type="submit" class="delete-btn button ccc type1 SYS">Delete</button>
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
    <p class="FullName">Name :- <?=$story['FirstName']?> <?=$story['LastName']?></p>
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

<h2>Copyright © 2024 insta, EELU</h2>
<h2>Legal Stuff | Privacy Policy | Security</h2>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="js/story.js"></script>
<script defer src="js/jquery-3.7.1.min.js"></script>
<script defer src="js/js.js"></script>
<script defer src="js/script.js"></script>
<script src="js/communtiy.js"></script>
</body>
</html>
