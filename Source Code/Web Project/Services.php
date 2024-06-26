<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Responsive.css">
    <link rel="stylesheet" href="css/all.css">


    <title>Services</title>
</head>

<body>
    <!-- Header Section -->
    <header>
    <section class="upper-header">
        <div class="responsive">
                          <img class="logo-icon" src="images/تصميم بدون عنوان (7).png" alt="">
               <h1 id="header-logo"><span class="blue">Insta</span> Detect</h1>
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

    </header>
    <img class="serv-img" src="images/serv.jpg" alt="">
    <h2 class="services-title">
        Services !
    </h2>
    <span class="line2"></span>
    <section class="serv">
        <a href='/pythonprojects/Web Project/mri-center.php' class='serv1 services'>
            <img class="mri-scan" src="images/eye-scan.png" alt="">
            <h2>MRI SCANNER</h2>
            <h3>Scan your MRI </h3>
        </a>
        <a class='serv2 services' <?php if (isset($_SESSION['email'])) {
                                        echo 'href="/pythonprojects/Web Project/mri-History.php"';
                                    } else {
                                        echo 'href="#" onclick="alert(\'Please log in to access this feature.\')"';
                                    } ?>>
            <img class="mri-scan " src="images/check.png " alt=" ">
            <h2>History of MRIs</h2>
            <h3 class="His ">History Of Mris Here !</h3>
        </a>
    </section>

    <footer>
        <hr class="hr-fotter ">
        <img src="images/whatsapp.png " alt=" " srcset=" ">
        <img src="images/instagram.png " alt=" " srcset=" ">
        <img src="images/linkedin.png " alt=" " srcset=" ">
        <img src="images/facebook.png " alt=" " srcset=" ">
        <h2>Copyright © 2024 insta, EELU</h2>
        <h2>Legal Stuff | Privacy Policy | Security </h2>
    </footer>
    <a class="" href="Services-ar.php"><img class="translate" src="images/augmented-reality.png" alt=""></a>

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