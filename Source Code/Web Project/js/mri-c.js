let logo = document.getElementById("header-logo")

function Toggles() {
    $(logo).fadeIn(1000, function() {
        $(logo).fadeOut(1000, function() {
            Toggles();
        })
    })
}
window.onload = function() {
    Toggles()
}