let profilePic = document.getElementById("profile-pic");
let inputFile = document.getElementById("input-file");
inputFile.onchange = function() {
    profilePic.src = URL.createObjectURL(inputFile.files[0]);
}

function back() {
    history.back()
}