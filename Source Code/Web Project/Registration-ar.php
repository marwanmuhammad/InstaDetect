<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regirstrastion</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
 <link rel="stylesheet" href="css/Reg-Profile.css">
 <link rel="stylesheet" href="css/Responsive.css">
</head>
<style>
  img.translate-ar{

   width: 41px;
   height: 42px;
   border-radius: 45%;
   background-color: transparent;
   position: absolute;
   top: 10%;
   left: 1.5%;
 }

</style>
<body>
  <div>
    <?php
  if(isset($_POST["create"])){
    session_start();
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['lastname'] = $_POST['lastname'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];

    $sql = "INSERT INTO users (firstname,lastname,email,password) VALUES(?,?,?,?)";
    $stminsert = $db->prepare($sql);
    $res = $stminsert->execute([$_SESSION['firstname'],$_SESSION['lastname'],$_SESSION['email'],$_SESSION['password']]);
    if($res){
echo "Successfully Saved !";
    } else{
      echo "Nope !";
    }}
  ?>
  </div>
  <!-- Sign up -->
  <div class="reg-container container right-panel-active">
  <div class="container__form container--signup">
    <form action="registration.php" class="form" id="form1" method="post">
        <h2 class="form__title">اشتراك</h2>
        <p>سجل معلوماتك </p>
        <input type="text" placeholder="الاسم الأول" class="input" id="FirstName" name="firstname" required>

        <input type="text" placeholder="الاسم الاخير " class="input" id="LastName" name="lastname" required>

        <input type="email" placeholder="البريد الالكتروني " class="input" id="Email" name="email" required>

<div class = "Pass-to">
            <input type="password" placeholder="كلمه المرور" class="input" id="password"
            pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" name="password" required>
            <i class="fa-regular fa-eye-slash password-toggle"></i>
</div>
        <input type="submit" class="button" name="create" value="اشتراك">
    </form>
    </div>


    <!-- sign in -->
    <div class="container__form container--signin">
      <form action="jslogin.php" class="form" id="form2" method="POST">
        <h2 class="form__title">تسجيل الدخول</h2>
        <input type="email" placeholder="البريد الالكتروني" name="email" class="input" id="Email-SignIn" required />
<div class="Pass-to">
            <input type="password" placeholder="كلمه المرور" name="password" class="input" id="Password-SignIn" required />
            <i class="fa-regular fa-eye-slash password-show"></i>
</div>
        <a href="#" class="link">هل نسيت كلمه المرور</a>
        <input type="submit" name="submit" id="btn-SignIn" class="button type1 btn-txt" value = "سجل">
      </form>
    </div>


    <!-- Overlay -->
    <div class="container__overlay">
      <div class="overlay">
        <div class="overlay__panel overlay--left">
          <h2> !هل لديك حساب </h2>

          <button type="button" id="signIn" class="button type1"><a class="login-reg"><span
                class="btn-txt">تسجيل الدخول</span></a></button>
        </div>
        <div class="overlay__panel overlay--right">
          <h2>!ليس لديك حساب </h2>
          <button type="button" id="signUp" class="button type1"><a class="login-reg"><span class="btn-txt">اشتراك</span></a></button>
        </div>
      </div>
    </div>
  </div>


  <a onclick="back()" class=" exit-icon ">
  <img class="exit-icon exit-icon-special " src="images/icons8-back-80.png " alt=" ">
    </a>
    <a class="" href="Registration-ar.php"><img class="translate-ar" src="images/english (2).png" alt=""></a>




    <script defer src="js/jquery-3.7.1.min.js"></script>
    <script  src="js/main.js"></script>




</body>

</html>