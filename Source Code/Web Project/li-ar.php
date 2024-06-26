<?php
if (isset($_SESSION['email'])) {
    echo '<li><a href="/pythonprojects/Web project/logout.php" class="li-links logot ">تسجيل دخول</a></li>';
} else {
    echo '<li><a href="/pythonprojects/Web Project/Registration.php"class="li-links "> تسجيل او كن معنا </a></li>';
}
?>