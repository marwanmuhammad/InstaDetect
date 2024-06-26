<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحة الرئيسية</title>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Responsive.css">
    <link rel="stylesheet" href="css/ltr.css">


</head>
<style>
  .our-story-content-col::before {
    transform: rotate(180deg);
}
img.circle {
    width: 70px;
    height: 72px;
    background-color: #ffffff;
    border-radius: 50%;
    margin-top: 32px !important;
    display: inline-block;
}
.grid-x {
  height: 56vh;
}
span.pre {
  font-size: 34px;
}
.adjacent-large-text {
  text-align: center;
}
img.translate-ar {
    width: 41px;
    height: 42px;
    border-radius: 45%;
    background-color: transparent;
    position: absolute;
    top: 6%;
    left: 3%;
}
header ul ,.upper-header {
    flex-direction: row;
}
</style>
<body>
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
        <a class="" href="index.php"><img class="translate-ar" src="images/english (2).png" alt=""></a>

    </header>
    <div class="full-bg">
        <img class="backG-img " src="images/back.jpeg">
    </div>

    <!-- Hero Start -->
    <div class="container-fluid ">
        <div class="row-hero">
            <h1 class="big-tittle">أفضل حلول الرعاية الصحية <span class="title">فورية</span> </h1>
            <div class="block-flex">
                <?php include('buttons-ar.php'); ?>
            </div>
        </div>
        <div class="anmation-brain">
            <dotlottie-player src="https://lottie.host/623cc048-6a19-425f-833b-b4c598c5a3a5/mw5K3gOGbr.json" background="transparent" speed="1" loop autoplay></dotlottie-player>
        </div>
    </div>
    <!-- hero end  -->

    <!-- start fun-facts -->
    <div id="fun-facts" class="fun-facts fun-section overlay">
        <div class="container-ico">
            <div class="row-hero">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-fun">
                        <i class="fas fa-brain"></i>
                        <div class="content">
                            <span class="counter" data-val="72.1%"></span>
                            <p>تقريبًا من أورام المخ هي حميدة.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-fun">
                        <i class="fas fa-chart-line"></i>
                        <div class="content">
                            <span class="counter" data-val="90">000</span>
                            <p>لورما الحميدة للنمو البطيء</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-fun">
                        <i class="fas fa-smile"></i>
                        <div class="content">
                            <span class="counter" data-val="85%">0</span>
                            <p>مع
                              <p>معدل البقاء يزيد بنسبة 5 سنوات</p>
                            </div>
                        </div>
    
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
    
                        <div class="single-fun">
                            <i class="fas fa-medkit"></i>
                            <div class="content">
                                <span class="counter" data-val="32">32%</span>
                                <p>تصل معدلات الشفاء العالمية إلى 73٪.</p>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div> 
        <!-- End fun-facts -->
    
        <!-- /* start our-story-section */ -->
        <section class='our-story-section'>
            <div class='container-our-story'>
                <div class='grid-x'>
                    <div class='cell'>
                        <h2 class='adjacent-large-text'>أنت لست وحدك. <span class="span">نحن هنا للمساعدة.</span></h2>
                    </div>
                    <div class='cell large-7 our-story-content-col'>
                        <div class='story-content-col-wrapper   backG-heigh '>
                            <h3 class='story-content-title'>مجتمعنا</h3>
                            <div class='entry-content'><p class="pre-content">نحن فريق مكرس من المتطوعين والمرضى والناجين وأفراد الأسرة ومهنيي الرعاية الصحية والموظفين، مصممون على جعل الرحلة مع ورم في الدماغ مليئة بالأمل والدعم. نعمل بتعاون لخدمة احتياجات الكنديين المتأثرين بجميع أنواع الأورام في الدماغ.</p>
    <p class="pre-content">الأورام في الدماغ غير متوقعة ومعقدة. نحن هنا لمساعدة أي شخص يتأثر بأي نوع من أنواع الأورام في الدماغ. دعم من المتبرعين والشركات ومؤسسات المجتمع يعني أنه يمكن للكنديين الـ 55،000 الذين يعيشون مع ورم في الدماغ العثور على الأمل. الأمل من خلال البحوث. الأمل من خلال دعم المرضى والناجين. الأمل في علاج.</p>
    </div>
                            <button type="button" class="button type1"><a class="reg" href="/pythonprojects/Web Project/Community.php"><span class="btn-txt">اقرأ المزيد</span></a></button>
    
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <!-- /* end our-story-section */ -->
    
        
        <!-- start our-mission -->
        <section class='our-story-section'>
            <div class='container-our-story'>
                <div class='grid-x  sc-mission'>
                    <div class='cell'>
                        <h2 class='adjacent-large-text'>مهمتنا <span class="span">.</span></h2>
                        <br><span class="pre">زيادة بشكل سريع نسبة البقاء على قيد الحياة من سرطان الدماغ وتحسين جودة الحياة للأشخاص المتأثرين بالمرض.</span></h2>
                    </div>
                    <div class='cell large-7 our-story-content-co'>
                        <div class='story-content-col-wrapper '>
                            <dotlottie-player src="https://lottie.host/0b439d0e-62a1-400e-ab66-2ed120e91e14/oiUkxxvrtE.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <!-- /* start our-mission */ -->
    


  
  <!-- start service -->
  <div class="service-con">
      <p class="container-title">هنا هي الميزات <br> التي نفخر بها</p>
    
      <div class="gradient-cards">
          <div class="service-card">
              <div class="container-card bg-white-box">
                  <img class="barin"  src="images/brain.png" alt="">
                  <p class="card-title">جهاز التصوير بالرنين المغناطيسي</p>
                  <p class="card-description">يمكن للمستخدمين تحميل صور الرنين المغناطيسي لدماغهم بسهولة من خلال هذه الميزة. بعد الإرسال، سيتم عرض النتائج على الفور.</p>
                  <button type="button" class="button type1"><a class="reg" href="/pythonprojects/Web Project/mri-center-ar.php"><span class="btn-txt">هيا نذهب</span></a></button>

                </div>
          </div>
          <div class="service-card">
              <div class="container-card bg-white-box">
                  <img class="barin"  src="images/medical-prescription.png" alt="">
                  <p class="card-title">التاريخ الطبي</p>
                  <p class="card-description">عرض جميع صور الرنين المغناطيسي مع النتائج لمساعدتهم في تتبع حالتهم الصحية.</p>
                  <button type="button" class="button type1"><a class="reg" href="/pythonprojects/Web Project/mri-history-ar.php"><span class="btn-txt">هيا نذهب</span></a></button>

                </div>
          </div>
          <div class="service-card">
              <div class="container-card bg-white-box">
                  <img class="barin" src="images/people.png" alt="">
                  <p class="card-title">دعم المجتمع</p>
                  <p class
                  class="card-description">نقوم بإنشاء مجتمع داعم للمرضى، مما يضمن لهم منصة لمشاركة تجاربهم.</p>
                  <button type="button" class="button type1"><a class="reg" href="/pythonprojects/Web Project/community-ar.php"><span class="btn-txt">هيا نذهب</span></a></button>

                </div>
            </div>
        </div>
    </div>
    <!-- end service -->

    <!-- start footer-cta-tiles -->
    <section class="footer-cta-tiles" data-equalizer="" data-resize="cqwjdl-eq" data-mutate="pt8fpk-eq" data-e="8l9ubq-e" data-events="mutate">
        <div class="grid-container">
            <div class="grid">
                <div class="cell card-miss" data-equalizer-watch="">
                    <a href="/pythonprojects/Web project/Registration.php">
                        <div class="tile-inner-content-wrapper">
                            <img class="ico-card miss" src="images/add-friend.png" alt="">
                            <h2 class="cta-tile-title">لا تفوت الفرصة</h2>
                            <p class="cta-tile-content">لا تفوت فرصة التسجيل معنا لرؤية الميزات الحصرية للأعضاء.</p>
                            <button type="button" class="button type1"><a class="reg" href="/pythonprojects/Web project/Registration.php"><span class="btn-txt">التسجيل</span></a></button>
                        </div>
                    </a>
                </div>
                <div class="cell card-question bg" data-equalizer-watch="">
                    <a href="/pythonprojects/Web project/ContactUs.php">
                        <div class="tile-inner-content-wrapper"> 
                            <img class="ico-card" src="images/question-mark.png" alt="">
                            <h2 class="cta-tile-title">هل لديك سؤال؟</h2>
                            <p class="cta-tile-content">تواصل للحصول على الدعم والتعليم والمعلومات ولمعرفة المزيد عن البحوث.</p>
                            <button type="button" class="button type1"><a class="reg" href="/pythonprojects/Web Project/ContactUs.php"><span class="btn-txt">اتصل بنا</span></a></button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section> 
    <!-- end footer-cta-tiles -->

    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

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
        <h2>الأمور القانونية | سياسة الخصوصية | الأمان </h2>
    </footer>
    <script defer src="js/jquery-3.7.1.min.js "></script>
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

</body>
</html>
  