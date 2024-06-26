<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Responsive.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/ltr.css">
    
    

    <title>الخدمات</title>
</head>
<style>
    .upper-header {
    flex-direction: row;
}
section.lower-header {
    direction: ltr;
}
img.circle {
    width: 70px;
    height: 72px;
    background-color: #ffffff;
    border-radius: 50%;
    margin-top: 32px !important;
    display: inline-block;
}
.btn-txt{
    letter-spacing: 0px !important;
}
</style>
<body>
    <!-- Header Section -->
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
    </header>
    <img class="serv-img" src="images/serv.jpg" alt="">
    <h2 class="services-title">
        الخدمات!
    </h2>
    <span class="line2"></span>
    <section class="serv">
        <a href='/pythonprojects/Web Project/mri-center-ar.php' class='serv1 services'>
            <img class="mri-scan" src="images/eye-scan.png" alt="">
            <h2>ماسح الرنين المغناطيسي (MRI)</h2>
            <h3>مسح رنينك المغناطيسي</h3>
        </a>
        <a class='serv2 services' <?php if (isset($_SESSION['email'])) {
                                        echo 'href="/pythonprojects/Web Project/mri-history-ar.php"';
                                    } else {
                                        echo 'href="#" onclick="alert(\'يرجى تسجيل الدخول للوصول إلى هذه الميزة.\')"';
                                    } ?>>
            <img class="mri-scan " src="images/check.png " alt=" ">
            <h2>تاريخ الفحوصات بالرنين المغناطيسي (MRI)</h2>
            <h3 class="His ">تاريخ الفحوصات بالرنين المغناطيسي هنا!</h3>
        </a>
    </section>
    <footer>
        <hr class="hr-fotter ">
        <img src="images/whatsapp.png " alt=" " srcset=" ">
        <img src="images/instagram.png " alt=" " srcset=" ">
        <img src="images/linkedin.png " alt=" " srcset=" ">
        <img src="images/facebook.png " alt=" " srcset=" ">
        <h2>حقوق النشر © 2024 Insta  EELU</h2>
        <h2>الأمور القانونية | سياسة الخصوصية | الأمان</h2>
    </footer>
    <a class="" href="Services.php"><img class="translate-ar" src="images/english (2).png" alt=""></a>

</body>
<script defer src="js/jquery-3.7.1.min.js "></script>
<script defer src="js/serv.js "></script>
<script defer src="js/js.js "></script>
<script defer src="js/script.js "></script>
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

</html>
