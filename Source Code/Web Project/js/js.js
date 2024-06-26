// let logoh = document.getElementById("header-logo")
console.log(logoh)
let btn = document.querySelector(".c")
console.log(btn)
let title = document.querySelector(".title")
console.log(title)
let b = document.querySelector(".join")
let con1 = document.querySelector(".s1 h3")
let con2 = document.querySelector(".s2 h3")
let con3 = document.querySelector(".s3 h3")
let s0 = document.querySelector(".title2")
let s2 = document.querySelector(".s2")
let s3 = document.querySelector(".line3")
let circle = document.querySelector(".circle")

let login = document.querySelectorAll(".login")
let reg = document.querySelectorAll(".reg")
let content1 = document.querySelector(".content-1")
let content2 = document.querySelector(".content-2")
let content3 = document.querySelector(".content-3")
let img1 = document.querySelector(".img1")
let img2 = document.querySelector(".img2")
let img3 = document.querySelector(".img3")
let txt1 = document.querySelector(".txt1")
let txt2 = document.querySelector(".txt2")
  let txt3 = document.querySelector(".txt3")
console.log(login)
console.log(reg)
console.log(content1)

window.onload = function() {
    Toggles()
    Toggles2()
    Toggles3()

}

// Animated Functions
function Toggles() {
    $(logoh).fadeIn(1000, function() {
        $(logoh).fadeOut(1000, function() {
            Toggles();
        })
    })
}

function Toggles2() {
    $(title).fadeIn(1000, function() {
        $(title).fadeOut(1000, function() {
            Toggles2();
        })
    })
}

function Toggles3() {
    $(b).slideDown(2000, function() {
        b.style.display = 'block'
    });
}
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