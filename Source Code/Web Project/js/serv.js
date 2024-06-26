let login = document.querySelectorAll(".login")
let reg = document.querySelectorAll(".reg")
console.log(login)
login.forEach(eo => {
    eo.addEventListener("click", () => {
        localStorage.setItem("inv", "login")

    })
});
reg.forEach(eo => {
    eo.addEventListener("click", () => {
        localStorage.setItem("inv", "signp")

    })
});

// let logo = document.getElementById("header-logo")

// function Toggles() {
//     $(logo).fadeIn(1000, function() {
//         $(logo).fadeOut(1000, function() {
//             Toggles();
//         })
//     })
// }
// window.onload = function() {
//     Toggles()
// }