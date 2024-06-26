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

<body>
  <div>
    <?php
if(isset($_POST["create"])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (firstname,lastname,email,password) VALUES(?,?,?,?)";
  $stminsert = $db->prepare($sql);
  $res = $stminsert->execute([$firstname, $lastname, $email, $password]);
  if($res){
    echo "Successfully Saved !";
        }  else{
      error_log($db->errorInfo()[2]);
      echo "There was an error with the registration.";
  }
}
  ?>
  </div>
  <!-- Sign up -->
  <div class="reg-container container right-panel-active">
  <div class="container__form container--signup">
    <form action="registration.php" class="form" id="form1" method="post">
        <h2 class="form__title">Sign Up</h2>
        <p>your information below : </p>
        <input type="text" placeholder="First Name" class="input" id="FirstName" name="firstname" required>

        <input type="text" placeholder="Last Name" class="input" id="LastName" name="lastname" required>

        <input type="email" placeholder="Email" class="input" id="Email" name="email" required>

<div class = "Pass-to">
            <input type="password" placeholder="Password" class="input" id="password"
            pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" name="password" required>
            <i class="fa-regular fa-eye-slash password-toggle"></i>
</div>
        <input type="submit" class="button" name="create" value="Sign up">
    </form>
    </div>


    <!-- sign in -->
    <div class="container__form container--signin">
      <form action="jslogin.php" class="form" id="form2" method="POST">
        <h2 class="form__title">Sign In</h2>
        <input type="email" placeholder="Email" name="email" class="input" id="Email-SignIn" required />
<div class="Pass-to">
            <input type="password" placeholder="Password" name="password" class="input" id="Password-SignIn" required />
            <i class="fa-regular fa-eye-slash password-show"></i>
</div>
        <a href="#" class="link">Forgot your password?</a>
        <input type="submit" name="submit" id="btn-SignIn" class="button type1 btn-txt" value = "Login">
      </form>
    </div>


    <!-- Overlay -->
    <div class="container__overlay">
      <div class="overlay">
        <div class="overlay__panel overlay--left">
          <h2>Already have an account !</h2>

          <button type="button" id="signIn" class="button type1"><a class="login-reg"><span
                class="btn-txt">Login</span></a></button>
        </div>
        <div class="overlay__panel overlay--right">
          <h2>Don't have an account !</h2>
          <button type="button" id="signUp" class="button type1"><a class="login-reg"><span class="btn-txt">SignUp</span></a></button>
        </div>
      </div>
    </div>
  </div>


  <a onclick="back()" class=" exit-icon ">
  <img class="exit-icon exit-icon-special " src="images/icons8-back-80.png " alt=" ">
    </a>
    <a class="" href="Registration-ar.php"><img class="translate" src="images/augmented-reality.png" alt=""></a>



    <script defer src="js/jquery-3.7.1.min.js"></script>
    <script  src="js/main.js"></script>




</body>

</html>