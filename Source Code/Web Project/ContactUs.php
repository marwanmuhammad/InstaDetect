<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="shortcut icon" href="images/call-center.png" type="image/x-icon">
    <link rel="stylesheet" href="css/BootStrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Responsive.css">
</head>

<body>
    <img class="backG-img" src='images/contact.jpg' alt=" ">
    <!-- header -->
    <header>
    <section class="upper-header">
        <div class="responsive">
              <img class="logo-icon" src="images/تصميم بدون عنوان (7).png" alt="">
               <h1 id="header-log"><span class="blue">Insta</span> Detect</h1>
            </div>
                        <!-- Server-side include for header.php -->
                        <?php include('header.php'); ?>
                        <div class="checko">
                            <input type="checkbox" id="check">
                            <label for="check"><i class="fas fa-bars"></i></label>
                            <section class="lower-header2 ">
                                <ul>
                                    <li><a href="/pythonprojects/Web project/index.php" class="li-links ">HOME</a></li>
                                    <li><a href="/pythonprojects/Web Project/Services.php " class="li-links ">SERVICES</a></li>
                                    <li><a href="/pythonprojects/Web Project/ContactUs.php " class="li-links ">CONTACT US</a></li>
                                    <li><a href="/pythonprojects/Web Project/Community.php" class="li-links ">Community</a></li>
                                    <?php include('li.php'); ?>
                                </ul>
                            </section>
                            </div>
                </section>
                    <hr>
                        <section class="lower-header ">
                            <ul>
                                <li><a href="/pythonprojects/Web project/index.php" class="li-links ">HOME</a></li>
                                <li><a href="/pythonprojects/Web Project/Services.php " class="li-links ">SERVICES</a></li>
                                <li><a href="/pythonprojects/Web Project/ContactUs.php " class="li-links ">CONTACT US</a></li>
                                <li><a href="/pythonprojects/Web Project/Community.php" class="li-links ">Community</a></li>
                            </ul>
                        </section>
                        <a class="" href="ContactUs-ar.php"><img class="translate" src="images/augmented-reality.png" alt=""></a>


    </header>


    <div class="contact-title">
        <h1 class="name-page"> Contact Us</h1>
        <span class="line2"></span>
    </div>


    <section id="contact">
        <div class="contact-wrapper ">
            <!-- Left contact page -->
            <form id="contact-form" class="form-horizontal" role="form">
                <div class="form-group ">
                    <label for="inputName" class=" col-sm-2 control-label "> Name: </label>
                    <div class="col-sm-12 ">
                        <input type="text " class="form-control " id="name " name="name " value=" " required>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="inputEmail " class="col-sm-2 control-label "> Email: </label>
                    <div class="col-sm-12 ">
                        <input type="email " class="form-control " id="email " name="email " value=" " required>
                    </div>
                </div>
                <label for="inputName" class=" col-sm-2 control-label "> Message Content: </label>
                <textarea class="form-control " rows="10 " placeholder="MESSAGE " id="massage " name="message " required></textarea>
                <button class="btn btn-primary send-button " id="submit " type="submit " value="SEND ">
              <div class="alt-send-button ">
                <i class="fa fa-paper-plane "></i><span class="send-text ">SEND</span>
    </div>
    </button>
            </form>
        </div>

    </section>


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
    <h2>Legal Stuff | Privacy Policy | Security </h2>
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