<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اتصل بنا</title>
    <link rel="shortcut icon" href="images/call-center.png" type="image/x-icon">
    <link rel="stylesheet" href="css/BootStrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive2.css">
    <link rel="stylesheet" href="css/ltr.css">
    <link rel="stylesheet" href="css/responsive-ar.css">

    

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
    display: inline-block;
}

</style>
<body>
    <img class="backG-img" src='images/contact.jpg' alt=" ">
    <!-- الهيدر -->
    <header>
    <section class="upper-header">
    <div class="responsive">
              <img class="logo-icon" src="images/تصميم بدون عنوان (7).png" alt="">
               <h1 id="header-logo"><span class="blue">Insta</span> Detect</h1>
            </div>    <!-- الإضافة الخادمية لـ header.php -->
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
                        <a class="" href="ContactUs.php"><img class="translate-ar" src="images/english (2).png" alt=""></a>

                    
    </header>


    <div class="contact-title">
        <h1 class="name-page">اتصل بنا</h1>
        <span class="line2"></span>
    </div>


    <section id="contact">
        <div class="contact-wrapper ">
            <!-- الجزء الأيسر لصفحة الاتصال -->
            <form id="contact-form" class="form-horizontal" role="form">
                <div class="form-group ">
                    <label for="inputName" class=" col-sm-2 control-label ">الاسم: </label>
                    <div class="col-sm-12 ">
                        <input type="text " class="form-control " id="name " name="name " value=" " required>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="inputEmail " class="col-sm-2 control-label ">البريد الإلكتروني: </label>
                    <div class="col-sm-12 ">
                        <input type="email " class="form-control " id="email " name="email " value=" " required>
                    </div>
                </div>
                <label for="inputName" class=" col-sm-2 control-label ">محتوى الرسالة: </label>
                <textarea class="form-control " rows="10 " placeholder="الرسالة " id="massage " name="message " required></textarea>
                <button class="btn btn-primary send-button " id="submit " type="submit " value="SEND ">
              <div class="alt-send-button ">
                <i class="fa fa-paper-plane "></i><span class="send-text ">إرسال</span>
    </div>
    </button>
            </form>
        </div>

    </section>


<!-- النافذة السفلية -->
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
    <h2>أمور قانونية | سياسة الخصوصية | الأمان </h2>
</footer>
</body>

<script defer src="js/jquery-3.7.1.min.js "></script>
<script defer src="js/ContactUs.js "></script>
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
