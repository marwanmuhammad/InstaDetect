
<?php
session_start();
if (isset($_SESSION['email'])) {
    $profilePic = isset($_SESSION['profile_pic']) && !empty($_SESSION['profile_pic']) ? 'profilepics/' . $_SESSION['profile_pic'] : 'images/pre.png';
    
    echo '<a href="/pythonprojects/Web Project/profile.php">
            <div class="circle">
                <img class="circle" src="' . $profilePic . '" alt="Profile Picture">
            </div>
        </a>';
    echo '<button type="button" class="profile-button type1">
            <a class="login" href="/pythonprojects/Web project/logout.php">
                <span class="btn-txt">Logout</span>
            </a>
        </button>';
} else {
    echo '
    <div class="si">
        <button type="button" class="button type1">
            <a class="reg" href="/pythonprojects/Web project/Registration.php">
                <span class="btn-txt">Sign Up</span>
            </a>
        </button>
        <button type="button" class="button type1">
            <a class="login" href="/pythonprojects/Web project/Registration.php">
                <span class="btn-txt">Login</span>
            </a>
        </button>
    </div>
    ';
}
?>
