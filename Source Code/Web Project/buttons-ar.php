<?php

if (isset($_SESSION['email'])) {
echo $_SESSION['firstname'];
} else {
    echo '
    <button type="button" class="button type1"><a class="reg" href="/pythonprojects/Web project/Registration.php"><span class="btn-txt">كن معنا </span></a></button>
    <span class="or">او</span>
    <button type="button" class="button type1"><a class="login" href="/pythonprojects/Web project/Registration.php"><span class="btn-txt">تسجيل</span></a></button>
    ';
}
?>

