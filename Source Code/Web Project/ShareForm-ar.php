<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شارك قصتك</title>
    <link rel="stylesheet" href="css/share.css">
</head>
<body>
  <img class="communty-form-bg" src="images/ss0 (2).jpeg" alt="">
    <div class="title-share">
        <h2 class="text">
            شارك معانا قصتك
        </h2>
    </div>
    <div class="wrapper services">
        <div class="title">
          <h1>سجل قصتك</h1>
        </div>
        <form action="share.php" enctype="multipart/form-data"  method="post"  class="contact-form">
          <div class="input-fields">
            <input type="text" class="input" placeholder="الاسم الاول" name="FirstName" required>
            <input type="text" class="input" placeholder="اسم العائلة" name="LastName"  required>
            <input type="text" class="input" placeholder="العمر" name="Age" required>
            <input type="text" class="input" placeholder="البريد" name="EmailAddress" required>
            <input type="text" class="input" placeholder="عنوان القصه" name="StoryTitle" required>
            <label  class="Upload">ارفاق صورة</label>
            <input type="file" accept="image/jpeg, image/png, image/jpg" id="imageInput" name="my_image" required>
          </div>
          <div class="msg">
            <textarea placeholder="قصتك" name="StoryText" rows="8" cols="80" required></textarea>
            <select name="Tumor" required>
              <option value="" disabled selected>Select Brain Tumor Type</option>
              <option value="Acoustic Neuroma/Vestibular Schwannoma">Acoustic Neuroma/Vestibular Schwannoma</option>
              <option value="Anaplastic Astrocytoma">Anaplastic Astrocytoma</option>
            <option value="Astrocytoma, Grade 2">Astrocytoma, Grade 2</option>
            <option value="Astrocytoma, Grade 3">Astrocytoma, Grade 3</option>
            <option value="Astrocytoma, Grade 4">Astrocytoma, Grade 4</option>
            <option value="Craniopharyngioma">Craniopharyngioma</option>
            <option value="Cyst">Cyst</option>
            <option value="Ependymoma, Grade 2">Ependymoma, Grade 2</option>
            <option value="Ependymoma, Grade 3">Ependymoma, Grade 3</option>
            <option value="Glioblastoma">Glioblastoma</option>
            <option value="Glioma NOS">Glioma NOS</option>
            <option value="Meningioma, Grade 1">Meningioma, Grade 1</option>
            <option value="Meningioma, Grade 2">Meningioma, Grade 2</option>
            <option value="Meningioma, Grade 3">Meningioma, Grade 3</option>
            <option value="Metastatic, Primary Breast">Metastatic, Primary Breast</option>
            <option value="Metastatic, Primary Colorectal">Metastatic, Primary Colorectal</option>
            <option value="Metastatic, Primary Lung">Metastatic, Primary Lung</option>
            <option value="Metastatic, Primary Melanoma">Metastatic, Primary Melanoma</option>
            <option value="Metastatic, Primary Other">Metastatic, Primary Other</option>
            <option value="Oligodendroglioma, Grade 2">Oligodendroglioma, Grade 2</option>
            <option value="Oligodendroglioma, Grade 3">Oligodendroglioma, Grade 3</option>
            <option value="Pediatric Glioma, High Grade">Pediatric Glioma, High Grade</option>
            <option value="Pediatric Glioma, Low Grade">Pediatric Glioma, Low Grade</option>
            <option value="Pilocytic Astrocytoma">Pilocytic Astrocytoma</option>
            <option value="Pituitary">Pituitary</option>
            <option value="Primary CNS Lymphoma">Primary CNS Lymphoma</option>
            <option value="Spinal Cord">Spinal Cord</option>
            <option value="Other">Other</option>
            <option value="N/A">N/A</option>
          </select>
          <input type="submit" class="btn" name="submit" value="Upload">
        </form>
      </div>
      <a onclick="back()" class=" exit-icon ">
        <img class="exit-icon exit-icon-special " src="images/icons8-back-80.png " alt=" ">
    </a>
    <a class="" href="ShareForm.php"><img class="translate-ar" src="images/english (2).png" alt=""></a>
    <script src="js/story.js"></script>
    <script src="js/main.js"></script>
    <script src="js/profile.js"></script>
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