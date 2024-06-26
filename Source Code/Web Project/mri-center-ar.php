<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mri center</title>
    <link rel="shortcut icon" href="images/brain.png" type="image/x-icon">

    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="css/ltr.css">
    <link rel="stylesheet" href="css/Responsive.css">
</head>
<style>
    img.translate-ar {
        top: 11%;
        position: absolute;
        left: 1.5%;
        background-color: transparent;
        width: 42px;
        height: 42px;
    }
</style>
<body>
  <!-- Server-side include for header.php -->
  <div class = "margin-up">
            <?php include('header-ar.php'); ?>
        </div>
    <img class="backG-img" src='images/1.jpg' alt=" ">
    <h2 class="Mri-title">
       مركز الرنين المغناطيسي
    </h2>
    <span class="line2"></span>

    <div class="section">
            <form class="mri-center-card" action="upload.php" method="post" enctype="multipart/form-data">
                <div class="card-about">
                    <h1>الأشعه</h1>
                    <img src="images/profile.png" alt id="profile-pic">
                    <label for="input-file" class="hover-3 mri-lable">رفع الصورة</label>
                    <input type="file" 
                        id="input-file" name="my_image">
                    <button onclick="submitImage()" name="submit" class="submit-button hover-3" style="display: none;">ارسال
                </button>
                </div>
            </form>
            <div class="right-column">
            <div class="title">
                    <h1>النتيجه</h1>
                <p id="result">...</p>
                <?php if (isset($_GET['error'])): ?>
      <p><?php echo $_GET['error']; ?></p>
<?php endif ?>
                </div>
            </div>
        </div>
    <a onclick="back()" class="exit-icon">
        <img class="exit-icon exit-icon-special " src="images/icons8-back-80.png " alt=" ">
    </a>
    <a class="" href="mri-center.php"><img  class="translate-ar" src="images/english (2).png" alt=""></a>


    <script src="js/mri.js"></script>
    <footer>
        <!-- put your footer here -->
    </footer>
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
