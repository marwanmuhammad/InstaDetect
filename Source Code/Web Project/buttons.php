<?php

if (isset($_SESSION['email'])) {
echo $_SESSION['firstname'];
} else {
    echo '
    <button type="button" class="button type1"><a class="reg" href="/pythonprojects/Web project/Registration.php"><span class="btn-txt">Sign Up</span></a></button>
    <span class="or">OR</span>
    <button type="button" class="button type1"><a class="login" href="/pythonprojects/Web project/Registration.php"><span class="btn-txt">Login</span></a></button>
    ';
}
?>

